<?php
// signup.php
session_start();

// Database connection
$servername = "localhost";
$username = "root";        
$password = "";            
$dbname = "unreal_games";  

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = $_POST['password'];

        // Hash the password before storing it
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $hashed_password);

        // Execute the statement
        if ($stmt->execute()) {
            // Optional: Store the email in the session
            $_SESSION['email'] = $email;

            // Redirect to index.html after successful registration
            header('Location: index.html');
            exit(); // Ensure no further code is executed after the redirect
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Please provide both email and password.";
    }
}

$conn->close();
?>
