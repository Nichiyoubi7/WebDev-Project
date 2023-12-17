<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h1>Admin Panel - Add User</h1>

    <?php
    // Display form and process form submission
    include 'add_user_form.php';
    include 'add_user_process.php';
    ?>

    <h2>Current Users</h2>
    <?php
    // Display current users from the database
    include 'display_users.php';
    ?>
</body>
</html>
