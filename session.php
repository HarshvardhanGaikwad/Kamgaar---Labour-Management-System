
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$username = "root";
    $password = "Gaikwad@155508";
    $database = "testpassword";
    $conn = new mysqli("localhost", "root", "Gaikwad@155508", "testpassword");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($conn, "select username from customer where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];



if(!isset($login_session)){
mysqli_close($conn); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>
