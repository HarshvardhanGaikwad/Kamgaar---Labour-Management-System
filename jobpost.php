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
if($_REQUEST['IDno']=='' || $_REQUEST['cid']=='' || $_REQUEST['work']==''|| $_REQUEST['nolabour']=='' || $_REQUEST['wage']=='' || $_REQUEST['location']=='' )
{
Echo "please fill the empty field.";
}
else
{
    $sql2="insert into workcl(wid,f_c_id,work_desc,labour_require,wages_offer,location) values('".$_REQUEST['IDno']."', '".$_REQUEST['cid']."','".$_REQUEST['work']."','".$_REQUEST['nolabour']."','".$_REQUEST['wage']."','".$_REQUEST['location']."')";
    $res=mysqli_query($conn,$sql2);
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
    
    <a href="profile.php">Home</a>
    </html>