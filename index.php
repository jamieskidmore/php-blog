<?php

require_once 'Blog/Controllers/BlogController.php';

// add details
$host = '';
$username = '';
$password = '';
$database = '';

$blogController = new BlogController($host, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $added = $blogController->addPost($title, $content);

    if ($added) {
        header("Refresh:0");
    }
}

$posts = $blogController->getPosts();

include 'Blog/Views/index.php';
?>