 <!DOCTYPE html>
 <html lang="en" data-theme="light">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
  <title>Login</title>
 </head>
 <body class="w-11/12 mx-auto">
 <?php
     
     include_once ('header.php');
  
     ?>
<main>

<!-- Main Container -->
<div class="w-3/4 mx-auto mt-16 mb-16 flex justify-around items-center">
 <div>
    <h1 class="text-5xl font-bold mb-5">Welcome Back!</h1>
    <h1 class="text-3xl font-semibold">Enter Your Information Here <br>For <span class="text-blue-700">Login</span></h1> 
 </div>
 <div class="flex flex-col">
  <form action="conncomplog.php" method="POST" class="mb-4">
    <label for="name">Company Name:</label>
    <input type="text" placeholder="Type here" class="input input-bordered input-info w-full max-w-xs mt-3 " />
  </form>
  <form action="conncomplog.php" method="POST" class="mb-4">
    <label for="email">Company Email:</label>
    <input type="email" placeholder="Type here" class="input input-bordered input-info w-full max-w-xs mt-3" />
  </form>
  <form action="conncomplog.php" method="POST" class="mb-4">
    <label for="password">Password:</label>
    <input type="password" placeholder="Type here" class="input input-bordered input-info w-full max-w-xs mt-3" />
  </form>
  <input type="submit" value="Submit" class="btn btn-primary">
</div>




</div>
</main>






<?php
     
        include_once ('footer.php');
     
        ?>
 </body>
 </html>
<!-- </center><center>

<h2>Welcome back!</h2>
<p> Enter your information for login </p>

<form action="conncomplog.php" method="POST">
  <label for="name"> Company Name:</label>
  <input type="text" id="Company Name" name="Company Name" value=""><br>
  <label for="email">Company Email:</label>
  <input type="text" id="Company Email" name="Company Email" value=""><br>
  <label for="password">Password:</label>
  <input type="password" id="Password" name="Password" value=""><br><br>
  <input type="submit" value="submit">
</form>  -->
