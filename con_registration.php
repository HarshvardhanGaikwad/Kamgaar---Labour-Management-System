<?php
session_start(); // Starting Session


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


//if submit is not blanked i.e. it is clicked.
if(isset($_REQUEST['submit'])!='')
{
if($_REQUEST['IDno']=='' || $_REQUEST['name']=='' || $_REQUEST['address']==''|| $_REQUEST['licno']==''|| $_REQUEST['username']=='' || $_REQUEST['password']=='' || $_REQUEST['phone']=='' || $_REQUEST['email']=='')
{
Echo "please fill the empty field.";
}
else
{
    $sql0="insert into contractor(conid,conname,conadd,conlicno,user,con_pass,phone,email) 
    values('".$_REQUEST['IDno']."', '".$_REQUEST['name']."','".$_REQUEST['address']."','".$_REQUEST['licno']."','".$_REQUEST['username']."', '".$_REQUEST['password']."', '".$_REQUEST['phone']."', '".$_REQUEST['email']."')";
    $res=mysqli_query($conn,$sql0);
if($res)
{
Echo "Registration Successful";
Echo "Click to Login";

}
else
{
Echo "There is some problem in inserting record";
}

}
}

?>
<html>
    
    <a href="index.php">Login</a>
    </html>