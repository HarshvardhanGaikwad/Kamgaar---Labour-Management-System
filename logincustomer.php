<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div>
  <div style="margin-top:20px">
    <div>
      <form name="form_login" method="post" action="custdashboard.html" role="form">
        <fieldset>
          <h2>Please Sign In</h2>
          <hr>
          <div>
            <input name="user_id" type="text" id="usersname" placeholder=" User ID">
          </div>
          <div>
            <input type="password" name="password" id="c_pass" placeholder="Password">
          </div>
          <span>
          <button type="button" data-color="info">Remember Me</button><!-- Additional action="custdashboard.html" Option -->
          <input type="checkbox" name="remember_me" id="remember_me" checked="checked">
          <hr>
          <div>
            <div>
              <input type="submit" name="Submit" value="Login">
            </div>
            <div> <a href="registration.html" target="_blank">Register<small>- Read Article</small></a> </div>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>


<?php     //start php tag
//include connect.php page for database connection
$username = "root";
    $password = "Gaikwad@155508";
    $database = "testpassword";
    $conn = new mysqli("localhost", "root", "Gaikwad@155508", "testpassword");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

//if submit is not blanked i.e. it is clicked.
if (isset($_REQUEST['Submit'])) //here give the name of your button on which you would like    //to perform action.
{
// here check the submitted text box for null value by giving there name.
    if($_REQUEST['usersname']=="" || $_REQUEST['c_pass']=="")
    {
    echo " Field must be filled";
    }
    else
    {
       $sql1= "select * from customer where username= '".$_REQUEST['usersname']."' &&  c_pass ='".$_REQUEST['c_pass']."'";
      $result=mysqli_query($sql1)
        or exit("Sql Error".mysqli_error());
        $num_rows=mysqli_num_rows($result);
       if($num_rows>0)
       {
//here you can redirect on your file which you want to show after login just change filename ,give it to your filename.
            
 //OR just simply print a message.
         Echo "You have logged in successfully";    
        }
        else
        {
            echo "username or password incorrect";
        }
    }
}    
?>


</body>
</html>