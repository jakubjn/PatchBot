<?php
    $title = $_POST['title'];
    $content = $_POST['content'];

    $db->query("INSERT INTO posts (title, content) VALUES ('$title', '$content')");

    $post = $db->query("SELECT * FROM posts WHERE id = 1")->fetch_assoc();
    echo "<h1>" . $post['title'] . "</h1>";
    echo "<p>" . $post['content'] . "</p>";
?>