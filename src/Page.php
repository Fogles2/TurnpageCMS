<?php
class Page {
    private $db;

    public function __construct() {
        global $db;
        $this->db = $db;
    }

    // Create a new page
    public function create($title, $content, $slug) {
        $stmt = $this->db->prepare("INSERT INTO pages (title, content, slug) VALUES (?, ?, ?)");
        return $stmt->execute([$title, $content, $slug]);
    }

    // Get a page by slug
    public function getBySlug($slug) {
        $stmt = $this->db->prepare("SELECT * FROM pages WHERE slug = ?");
        $stmt->execute([$slug]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Update a page
    public function update($id, $title, $content, $slug) {
        $stmt = $this->db->prepare("UPDATE pages SET title = ?, content = ?, slug = ? WHERE id = ?");
        return $stmt->execute([$title, $content, $slug, $id]);
    }

    // Delete a page
    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM pages WHERE id = ?");
        return $stmt->execute([$id]);
    }

    // List all pages
    public function list() {
        $stmt = $this->db->query("SELECT * FROM pages");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>