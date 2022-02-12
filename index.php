<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");

}

?>
<?php
include('l_login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: l_profile.php");
}
?>
<?php
include('con_login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: con_profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session:</title>

<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
<nav class="border-b dark:border-gray-700 ">
<div class="text-gray-600 body-font " >

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
                        <a  class="block mx-8 font-medium text-gray dark:text-white-200 hover-zoom hover:text-white-900 dark:hover:text-white-400 " href="#customermain"> Customer Login</a>
                        <a  class="block mx-8 font-medium text-gray dark:text-white-200 hover:text-white-900 dark:hover:text-white-400 hover-zoom"href="#lmain" >Labour Login</a>
                        <a  class="block mx-8 font-medium text-gray dark:text-white-200 hover:text-white-900 dark:hover:text-white-400 hover-zoom" href="#conmain">Contractor Login</a>
                        <a class="block mx-8 font-medium text-gray dark:text-white-200 hover:text-white-900 dark:hover:text-white-400 hover-zoom" href="#contact">Contact</a>

                        <button class="flex items-center px-5 py-2 text-sm font-medium tracking-wide text-center text-white capitalize transition-colors duration-200 transform bg-gray-700 rounded-lg hover:bg-gray-600 focus:outline-none focus:bg-gray-600">
                            Get in touch
                        </button>
                        
                    </div>
</nav>
            
  </div>
</div>
</nav>
<br><br>
<header class="bg-white dark:bg-gray-800" style=" background-image:url('25.jpg');background-size:37% 95%;background-repeat:no-repeat;background-position:right;"    >
        

        <div class="container flex flex-col px-6 py-10 mx-auto space-y-6 lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center">
            <div class="w-full lg:w-1/2">
                <div class="lg:max-w-lg">
                    <h1 class="text-2xl font-medium tracking-wide text-gray-800 dark:text-white lg:text-4xl">Find your next Labour through an Online platform</h1>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">We connect customers with the labourers/contractors to make the search for work requirement easy through our website.</p>
                    <div class="grid gap-6 mt-8 sm:grid-cols-2">
                        <div class="flex items-center text-gray-800 -px-3 dark:text-gray-200">
                            <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>

                            <span class="mx-3">User friendly</span>
                        </div>

                        <div class="flex items-center text-gray-800 -px-3 dark:text-gray-200">
                            <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>

                            <span class="mx-3">Connect with any Labour</span>
                        </div>

                        <div class="flex items-center text-gray-800 -px-3 dark:text-gray-200">
                            <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>

                            <span class="mx-3">Verified Labours</span>
                        </div>

                        <div class="flex items-center text-gray-800 -px-3 dark:text-gray-200">
                            <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>

                            <span class="mx-3">Certified Contractors</span>
                        </div>

                        <div class="flex items-center text-gray-800 -px-3 dark:text-gray-200">
                            <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>

                            <span class="mx-3">Post Job requirement</span>
                        </div>

                        <div class="flex items-center text-gray-800 -px-3 dark:text-gray-200">
                            <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>

                            <span class="mx-3">Quick feedback </span>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </header>
<br><br> <br> 

    <section class=" bg-gray-900 body-font " style="padding:30px;">
  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center"style="border: 1px solid white;border-radius:10px;">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-white text-center">Customer Login</h1>
      <p class="leading-relaxed mt-4 text-gray-400 text-center">Connect with Labour/contractors. Post work requirement.<br> Connect with Labour you want. </p>
    </div>
    <div class="lg:w-2/6 sm:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col sm:ml-auto w-full mt-10 sm:mt-0"style="margin-left:20px; ">
<img src="customerlogin.png">
    <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign In</h2>
      
    <div id="customermain">

<div id="login">
<form class="form" method="post" action="login.php">
<label class="leading-7 text-sm text-gray-600">UserName </label>
<input id="name" name="username" placeholder="username" type="text" class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"><br>
<label class="leading-7 text-sm text-gray-600">Password </label>
<input id="password" name="password" placeholder="**********" type="password" class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
<input name="submit" type="submit" value=" Login " style="background-color: rgb(29, 204, 52);margin-top:8px;color:white;padding:3px;border-radius:5px">
<span><?php echo $error; ?></span>
<div class="text-xs text-gray-500 mt-3">Don't have an account? <a href="registration.html" style="background-color: rgb(30, 121, 226);color:white;padding:3px;border-radius:5px">Sign Up</a> </div>
          </div>
</form>


</div>
</div> 
  </div>
</section>


<section class="text-gray-600 bg-gray-700 body-font"style="padding:30px;">
  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center"style="border: 1px solid white;border-radius:10px;">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-white text-center">Labour Login</h1>
      <p class="leading-relaxed mt-4 text-gray-400 text-center">Connect with Labour/contractors. Post work requirement.<br> Connect with Labour you want. </p>
    </div>
    <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0"style="margin-left:20px; ">
    <img src="labourlogin.png">
    <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign In</h2>
      <div id="customermain">

      <div id="lmain">

<div id="login">
<form class="form" method="post" action="l_login.php">

<label class="leading-7 text-sm text-gray-600">UserName </label>
<input id="name" name="username" placeholder="username" type="text" class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"><br>
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"  class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
<input name="submit" type="submit" value=" Login " style="background-color: rgb(29, 204, 52);margin-top:8px;color:white;padding:3px;border-radius:5px">
<span><?php echo $error; ?></span>
<div class="text-xs text-gray-900 mt-3">Don't have an account? <a href="l_registration.html" style="background-color: rgb(30, 121, 226);color:white;padding:3px;border-radius:5px">Sign Up</a> </div>
          </div>
</form>
</div>
</div> 
</section>

<section class="text-gray-600 bg-gray-100 body-font"style="padding:30px;">
  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center"style="border: 1px solid white;border-radius:10px;">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-gray text-center">Contractor Login</h1>
      <p class="leading-relaxed mt-4 text-gray-700 text-center">Connect with Labour/contractors. Post work requirement.<br> Connect with Labour you want. </p>
    </div>
    <div class="lg:w-2/6 md:w-1/2 bg-gray-200 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0"style="margin-left:20px;">
    <img src="contractorlogin3.png">

    <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign In</h2>
      <div id="customermain">

      <div id="conmain">

<div id="login">
<form class="form" method="post" action="con_login.php">

<label>UserName </label>
<input id="name" name="username" placeholder="username" type="text"class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"><br>
<label>Password </label>
<input id="password" name="password" placeholder="**********" type="password" class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
<input name="submit" type="submit" value=" Login " style="background-color: rgb(29, 204, 52);color:white;padding:3px;border-radius:5px;margin-top:8px;">
<span><?php echo $error; ?></span>
<div class="text-xs text-gray-900 mt-3">Don't have an account? <a href="con_registration.html" style="background-color: rgb(30, 121, 226);color:white;padding:3px;border-radius:5px">Sign Up</a> </div>
          </div>
</form>
</div>
</div> 
</section>

















    
                    

                   




    
    

<div id="contact">


    


<?php
include('footer.php');
?>
</div>
</body>
</html>
