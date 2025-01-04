<?php
// Admin login page
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Simulated login (use proper validation and security in production)
    $admin_username = 'admin'; // Static username (for demo purposes)
    $admin_password = 'password123'; // Static password (for demo purposes)

    if ($_POST['username'] == $admin_username && $_POST['password'] == $admin_password) {
        $_SESSION['logged_in'] = true;
        header('Location: admin-panel.php'); // Redirect to admin panel
    } else {
        $error_message = "Invalid credentials";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <h2>Admin Login</h2>
        <?php if (isset($error_message)) { echo "<p class='text-danger'>$error_message</p>"; } ?>
        <form method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required />
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>
