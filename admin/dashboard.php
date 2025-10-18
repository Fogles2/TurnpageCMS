<?php include __DIR__ . '/../includes/header.php'; ?>

<h1>Admin Dashboard</h1>

<h2>Pages</h2>
<a href="/admin/page-create.php">Create New Page</a>

<ul>
    <?php
    $page = new Page();
    $pages = $page->list();
    foreach ($pages as $p) {
        echo '<li><a href="/admin/page-edit.php?id=' . $p['id'] . '">' . $p['title'] . '</a></li>';
    }
    ?>
</ul>

<?php include __DIR__ . '/../includes/footer.php'; ?>