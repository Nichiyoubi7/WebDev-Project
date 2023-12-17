<?php
// Database connection details
$hostname = '';
$username = '';
$password = '';
$database = '';

// Connect to MySQL
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];

        // Insert user into the database
        $sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";
        if ($conn->query($sql) === TRUE) {
            echo "<p>User added successfully.</p>";
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>
