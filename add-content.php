<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: admin-login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle form submission to add new content (this is just a simulation)
    $title = $_POST['title'];
    $image = $_FILES['image']['name'];

    // In production, move the image to the desired folder and add the content to the database
    move_uploaded_file($_FILES['image']['tmp_name'], "../Photos/$image");

    // Redirect to admin panel after adding content
    header('Location: admin-panel.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add New Content</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <h2>Add New Content</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required />
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" required />
            </div>
            <button type="submit" class="btn btn-primary">Add Content</button>
        </form>
    </div>
</body>
</html>
