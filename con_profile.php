
<?php
include('con_session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body style="background-color:rgb(231, 227, 227)">
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
    

     $sql = "SELECT *  FROM workcl where labour_require>49 order by wid desc ";
     
     
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

<?php
include('footer.php');
?>
</body>
</html>
