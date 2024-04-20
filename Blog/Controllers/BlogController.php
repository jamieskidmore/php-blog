<?php

require_once 'Blog/Models/BlogModel.php';

class BlogController {
    private $blogModel;

    public function __construct($host, $username, $password, $database) {
        $this->blogModel = new BlogModel($host, $username, $password, $database);
    }

    public function getPosts() {
        return $this->blogModel->getPosts();
    }

    public function addPost($title, $content) {
        return $this->blogModel->addPost($title, $content);
    }
}
?>