<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: admin-login.php'); // Redirect to login page if not authenticated
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <h2>Admin Panel</h2>
        <div class="mb-4">
            <a href="add-content.php" class="btn btn-success">Add New Content</a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>

        <h3>Manage Content</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Content ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Example content (this should be fetched from a database)
                $content_items = [
                    ['id' => 1, 'title' => 'Vocals', 'image' => 'Vocals.jpg'],
                    ['id' => 2, 'title' => 'Practices', 'image' => 'Guitar.jpg'],
                    ['id' => 3, 'title' => 'Listening', 'image' => 'Listening.jpeg'],
                ];
                foreach ($content_items as $content) {
                    echo "
                    <tr>
                        <td>{$content['id']}</td>
                        <td>{$content['title']}</td>
                        <td><img src='../Photos/{$content['image']}' alt='{$content['title']}' width='50'></td>
                        <td>
                            <a href='edit-content.php?id={$content['id']}' class='btn btn-warning btn-sm'>Edit</a>
                            <a href='delete-content.php?id={$content['id']}' class='btn btn-danger btn-sm'>Delete</a>
                        </td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
