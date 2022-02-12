
<?php
session_start();
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
else
{
// Define $username and $password
//$username=$_POST['username'];
//$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
    $username = "root";
    $password = "Gaikwad@155508";
    $database = "testpassword";
    $conn = new mysqli("localhost", "root", "Gaikwad@155508", "testpassword");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Define $username and $password
    $username=$_POST['username'];
    $password=$_POST['password'];
// SQL query to fetch information of registerd users and finds user match.
    $sql1="select * from contractor where con_pass='$password' AND user='$username'";
    $query = mysqli_query($conn,$sql1);
    $rows = mysqli_num_rows($query);
    if ($rows == 1) {
        $_SESSION['login_user']=$username; // Initializing Session
        header("location: con_profile.php"); // Redirecting To Other Page
    } else {
        $error = "Username or Password is invalid";
        }
    mysqli_close($conn); // Closing Connection
}
}
?>
