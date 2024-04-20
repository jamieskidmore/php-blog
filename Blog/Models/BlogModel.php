<?php

class BlogModel {
    private $conn;

    public function __construct($host, $username, $password, $database) {
        $this->conn = new mysqli($host, $username, $password, $database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getPosts() {
        $sql = "SELECT * FROM posts";
        $result = $this->conn->query($sql);
        $posts = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $posts[] = $row;
            }
        }
        return $posts;
    }

    public function addPost($title, $content) {
        $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            return false;
        }
    }
}
?>
