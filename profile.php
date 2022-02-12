
<?php
include('session.php');
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
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Post your 
        <br class="hidden lg:inline-block">work requirement
      </h1>
      <p class="mb-8 leading-relaxed"> Customer can post a labour requirement with the following details such as work desscription, location, daily wages offered, etc.</p>
      <div class="flex justify-center">
      <a href="jobpost.html" style="background-color: rgb(30, 121, 226);color:white;padding:3px;border-radius:5px">Post a Job </a>

        </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="hero" src="8619.jpg">
    </div>
  </div>
</section>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Applications</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">This List displays all jobs that have been posted by Customer and the list of labour who have applied to that particular job</p>
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
  
  JOIN workcl on (workcl.wid=custlabour.wid)  where customer.username='$login_session' order by wid desc";
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



  <div class="container px-10 py-40 mx-auto" style=" background-color:rgb(231, 227, 227)">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Jobs Potsed by User Till Now....</h1>
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
    $Vendor_id="SELECT c_id FROM customer where username = '$login_session' ";
   $result=mysqli_query($conn,$Vendor_id);
   $row = mysqli_fetch_row($result);
   


     $sql = "SELECT *  FROM workcl  where f_c_id=$row[0] order by wid desc";
     
     
     $query = mysqli_query($conn, $sql);
     if (!$query) {
       die ('SQL Error: ' . mysqli_error($conn));
     }
     
     ?>
 <div class="box-body">
   <table class="lg:w-3/3 w-full mx-auto overflow-auto">
      
        <tr>
        <th>WORK ID</th>
        
        <th>WORK DESCRIPTION</th>
        <th>LABOUR REQUIREMENT</th>
        <th>WAGES OFFERED</th>
        <th>WORK LOCATION</th>
        
        </tr>";
       <?php   
        while($row = mysqli_fetch_array($query)) {
            echo "<tr><td>" 
            . $row["wid"]. "</td><td> "
            

            . $row["work_desc"]. "</td><td>"
            . $row["labour_require"]. "</td><td>"
            
             . $row["wages_offer"]. "</td><td>"
            .$row["location"]. "</td></tr>";
        }
           
$conn->close();
?>
</table>
 
</div>
            </div>
    
  </div>
</section>
<section class="text-gray-600 body-font">
<div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Connect with Contractors</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">This List displays all the contractors who are recruiting Labourers to work under them for large scale projects </p>
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
