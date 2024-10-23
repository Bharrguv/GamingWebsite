<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";        
$password = "";            
$dbname = "unreal_games";  

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = $_POST['password'];

        // Query to check if the user exists
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $stored_hashed_password = $user['password']; // The hashed password from the database

            // Debugging: Echo the hashed and plain passwords for troubleshooting
            // echo "Stored hashed password: " . $stored_hashed_password . "<br>";
            // echo "Entered password: " . $password . "<br>";

            // Verify the entered password against the stored hashed password
            if (password_verify($password, $stored_hashed_password)) {
                // Password matches, set session variables
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];

                // Redirect to home page
                header('Location: index.html');
                exit();
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with this email.";
        }
    } else {
        echo "Please enter both email and password.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
