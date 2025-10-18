<?php include __DIR__ . '/../includes/header.php'; ?>

<h1>Create New Page</h1>

<form action="/admin/page-save.php" method="post">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>
    
    <label for="slug">Slug:</label>
    <input type="text" id="slug" name="slug" required>
    
    <label for="content">Content:</label>
    <textarea id="content" name="content" required></textarea>
    
    <button type="submit">Save</button>
</form>

<script src="https://cdn.tiny.cloud/1/YOUR_TINYMCE_API_KEY/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: '#content'
  });
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>