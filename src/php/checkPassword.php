<?php

// Establish connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clearpay";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the provided username (email) and password are not empty
    if (!empty($_POST['username']) && !empty($_POST['password'])) {

        // Prepare the username (email) and password for retrieval from the database (prevent SQL injection)
        $username = $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']);

        // SQL query to retrieve the hashed password based on the provided email
        $sql = "SELECT password_hash FROM Utenti WHERE email = '$username'";

        // Execute the SQL query
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Fetch the hashed password from the result set
            $row = $result->fetch_assoc();
            $hashed_password = $row["password_hash"];

            // Verify if the provided password matches the hashed password
            if (password_verify($password, $hashed_password)) {
                // Passwords match, authentication successful
                echo "Authentication successful";
                // Redirect or perform further actions here after successful authentication
            } else {
                // Passwords do not match
                echo "Invalid password";
            }
        } else {
            // No user found with the provided email
            echo "No User Associated with such email";
        }
    } else {
        // Email or password not provided
        echo "Please provide both email and password";
    }
}

// Close connection
$conn->close();
?>
