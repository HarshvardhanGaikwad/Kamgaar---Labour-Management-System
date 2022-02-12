
<?php
include('l_session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
<nav class="border-b dark:border-gray-700 ">
<div class="text-gray-600 bg-gray-200 body-font " >

  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      
    <a class="flex title-font font-medium items-center text-white-900 mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl text-gray">Kamgaar</span>
</a>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    <div  class="flex flex-col mt-4 space-y-8 lg:flex-row lg:items-center lg:mt-0 lg:space-y-0 lg:-px-8">
                       
                        <div id="profile" style="padding:30px;">
<b id="welcome"  >Welcome : <i><?php echo $login_session; ?></i></b></div>
<b id="logout" class="flex px-8 py-1 text-sm font-medium text-center text-white capitalize transition-colors duration-200 transform bg-gray-700 rounded-lg hover:bg-gray-600 focus:outline-none focus:bg-gray-600"><a href="logout.php" style="float:right;">Log Out</a></b>

                        
                    </div>
</nav>
            
  </div>
</div>
</nav>
<section class="text-gray-600 body-font">

<div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Jobs Posted by User Till Now....</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">This List displays all jobs that have been posted by Customer </p>
    </div>
    <div class="lg:w-3/3 w-full mx-auto overflow-auto">
    
    <?php
    $username = "root";
    $password = "Gaikwad@155508";
    $database = "testpassword";
    $conn = new mysqli("localhost", "root", "Gaikwad@155508", "testpassword");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    

     $sql = "SELECT *  FROM workcl order by wid desc ";
     
     
     $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>
        <tr><th style='padding-right:30px;'>Work ID</th>
        <th style='padding-right:30px;'>Cutomer ID</th>
        <th style='padding-right:30px;'>Work Description</th>
        <th style='padding-right:30px;'>Labour Requirement</th>
        <th style='padding-right:30px;'>Wages Offered</th>
        <th style='padding-right:30px;'>Location</th></tr>
      
        ";
          
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["wid"]. "</td><td>"
            . $row["f_c_id"]. "</td><td> 
           <p class=' font-medium text-gray-900 title-font mb-2'>" . $row["work_desc"]. "</p></td><td>"
            . $row["labour_require"]. "</td><td>"
            . $row["wages_offer"]. "</td><td>"
            . $row["location"]. "</td></tr>";

             
        }
        echo "</table>";
    } else {
     echo "0 results";
    }
$conn->close();
?>
 
            </div>
    
  </div>
</section>




<section class="text-gray-600 bg-gray-300 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Apply for any Job</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Apply for any job by entering workid and customer id which is specified in the above list</p>
    </div>
    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
      <div class="relative flex-grow w-full">
      <form name="registration" method="post">

        <label for="full-name" class="leading-7 text-sm text-gray-600">Enter Customer ID </label>
        <input type="text" id="full-name" name="cid" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      
      <div class="relative flex-grow w-full">
        <label for="email" class="leading-7 text-sm text-gray-600">Enter Work ID</label>
        <input type="text" name="wid" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <input type="submit" name="submit" value="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
</form>
    </div>  
  </div>
</section>
<?php


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
    if($_REQUEST['wid']=='' || $_REQUEST['cid']=='' )
    {
        Echo "please fill the empty field.";
    }
    else
    {
        $Lendor_id="SELECT lid FROM labour where username = '$login_session' ";
    $result=mysqli_query($conn,$Lendor_id);
    $row = mysqli_fetch_row($result);
        $sql4="insert into custlabour(fk_c_id,fk_lid,wid) 
        values('".$_REQUEST['cid']."', '$row[0]','".$_REQUEST['wid']."')";
        $res=mysqli_query($conn,$sql4);
        if($res)
        {
            Echo "Applied Successful";
           

        }
        else
        {
        Echo "There is some problem in inserting record";
        }

    }
}

?>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Applications Applied</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">This List displays all jobs that you have applied till now</p>
    </div>
    <div class="lg:w-3/3 w-full mx-auto overflow-auto">
    <?php
    

    $username = "root";
    $password = "Gaikwad@155508";
    $database = "testpassword";
    $conn = new mysqli("localhost", "root", "Gaikwad@155508", "testpassword");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT distinct customer.c_id,customer.cname, workcl.wid,workcl.work_desc,workcl.labour_require
     AS labour_required,workcl.wages_offer AS wages_offered, 
    labour.lid AS labour_id,labour.lname AS labour_name,labour.phone, labour.wages AS desired_wages,
   labour.skils AS labour_skills,labour.licno AS labour_license,
   labour.verfied AS labour_verification
  FROM customer 
  JOIN custlabour on (customer.c_id=custlabour.fk_c_id)
  JOIN labour on (labour.lid=custlabour.fk_lid)
  
  JOIN workcl on (workcl.wid=custlabour.wid)  where labour.username='$login_session'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>
      
        <tr>
        <th>Customer ID</th>
        <th>Customer Name</th>
        <th>Work ID</th>
        <th>Work Description</th>
        <th>Labour Requirement</th>
        <th>Wages Offered</th>
        <th>Labour ID</th>
        <th>Labour Name</th>
        <th>Labour Phone</th>
        <th>Desired Wages</th>
        <th>Labour Skills</th>
        <th>Labour License</th>
        <th>Labour Verification</th>
        </tr>";
          
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["c_id"]. "</td><td>"
            . $row["cname"]. "</td><td> "
            . $row["wid"]. "</td><td>"
            . $row["work_desc"]. "</td><td>"
            . $row["labour_required"]. "</td><td>"
            . $row["wages_offered"]. "</td><td>"
            . $row["labour_id"]. "</td><td>"
             . $row["labour_name"]. "</td><td>"
             . $row["phone"]. "</td><td>"
             . $row["desired_wages"]. "</td><td>"
             . $row["labour_skills"]. "</td><td>"
             . $row["labour_license"]. "</td><td>"
             . $row["labour_verification"]. "</td></tr>";
             
        }
        echo "</table>";
    } else {
     echo "0 results";
    }
$conn->close();
?>
            </div>
    
  </div>
</section>


<section class="text-gray-600 body-font">
<div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Connect with Contractors</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">This List displays all the contractors with whom you can connect for large scale porjects</p>
    </div>
    <div class="lg:w-3/3 w-full mx-auto overflow-auto">
    
    <?php
    $username = "root";
    $password = "Gaikwad@155508";
    $database = "testpassword";
    $conn = new mysqli("localhost", "root", "Gaikwad@155508", "testpassword");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    

     $sql = "SELECT conname,conadd,conlicno,phone,email  FROM contractor ";
     
     
     $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>
        
        <th style='padding-right:30px;'>Contractor Name</th>
        <th style='padding-right:30px;'>Contractor Address</th>
        <th style='padding-right:30px;'>Contractor License No.</th>
        <th style='padding-right:30px;'>Contractor Phone no.</th>
        <th style='padding-right:30px;'>Email</th></tr>
      
        ";
          
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["conname"]. "</td><td>"
            . $row["conadd"]. "</td><td> "
            . $row["conadd"]. "</td><td>"
            . $row["conlicno"]. "</td><td>"
            . $row["phone"]. "</td><td>"
            . $row["email"]. "</td></tr>";

             
        }
        echo "</table>";
    } else {
     echo "0 results";
    }
$conn->close();
?>
 
            </div>
    
  </div>
</section>
<?php
include('footer.php');
?>
</body>
</html>
