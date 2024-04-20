<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Blog</title>
</head>
<body>
    <h1>Simple Blog</h1>
    <form method="post">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea>
        <br>
        <input type="submit" value="Add Post">
    </form>
    <h2>Posts</h2>
    <?php foreach ($posts as $post): ?>
        <h3><?php echo ($post['title']); ?></h3>
        <p><?php echo ($post['content']); ?></p>
    <?php endforeach; ?>
</body>
</html>
