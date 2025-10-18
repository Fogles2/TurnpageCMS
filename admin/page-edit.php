<?php
require __DIR__ . '/../config/config.php';
require __DIR__ . '/../src/Page.php';

$pageObj = new Page();
$page = $pageObj->getBySlug($_GET['id']);

include __DIR__ . '/../includes/header.php';
?>

<h1>Edit Page</h1>

<form action="/admin/page-update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $page['id']; ?>">
    
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="<?php echo $page['title']; ?>" required>
    
    <label for="slug">Slug:</label>
    <input type="text" id="slug" name="slug" value="<?php echo $page['slug']; ?>" required>
    
    <label for="content">Content:</label>
    <textarea id="content" name="content" required><?php echo $page['content']; ?></textarea>
    
    <button type="submit">Update</button>
</form>

<script src="https://cdn.tiny.cloud/1/YOUR_TINYMCE_API_KEY/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: '#content'
  });
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>