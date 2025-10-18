<?php
class Router {
    public function route() {
        $url = $_GET['url'] ?? 'home';
        
        switch ($url) {
            case 'home':
                require __DIR__ . '/../public/home.php';
                break;
            case 'admin':
                require __DIR__ . '/../admin/dashboard.php';
                break;
            default:
                require __DIR__ . '/../public/404.php';
        }
    }
}
?>