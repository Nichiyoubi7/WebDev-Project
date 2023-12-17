<?php
// Display current users from the database
$result = $conn->query("SELECT * FROM users");

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>{$row['username']} - {$row['email']}</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No users found.</p>";
}
?>
