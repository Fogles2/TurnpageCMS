<?php
require __DIR__ . '/../config/config.php';
require __DIR__ . '/../src/Page.php';

$page = new Page();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $content = $_POST['content'];
    
    if ($page->update($id, $title, $content, $slug)) {
        header('Location: /admin/dashboard.php');
        exit;
    } else {
        echo "Failed to update page.";
    }
}
?>