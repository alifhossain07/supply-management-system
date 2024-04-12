<!DOCTYPE html>
<html>
<head> 
<title> Page 3 </title>
<link rel="stylesheet" href="header.css">
</head>
<body class="bg-sky-100">
<?php
     
     include_once ('header.php');
  
     ?>
<main class="w-3/4 mx-auto mt-10 mb-16">
<div class="text-center space-y-4">
  <h1 class="text-4xl font-bold">New Here?</h1>
  <h1 class="text-2xl font-semibold">Provide your Information to get <span class="text-blue-700 ">Registered</span></h1>
</div>
<!-- form container -->
<form action="/action_page.php" class="flex flex-row justify-around mt-10">
  <div class="mb-4 flex flex-col w-1/3">
    <label for="companyID">Company ID:</label>
    <input type="text" id="companyID" name="companyID" placeholder="Enter Company ID" class="input input-bordered input-info w-full max-w-md mt-3 mb-3" />
    <label for="companyName">Company Name:</label>
    <input type="text" id="companyName" name="companyName" placeholder="Enter Company Name" class="input input-bordered input-info w-full max-w-md mt-3 mb-3" />
    <label for="contactPerson">Contact Person:</label>
    <input type="text" id="contactPerson" name="contactPerson" placeholder="Enter Contact Person" class="input input-bordered input-info w-full max-w-md mt-3 mb-3" />
    <label for="personContact">Person's Contact:</label>
    <input type="text" id="personContact" name="personContact" placeholder="Enter Person's Contact" class="input input-bordered input-info w-full max-w-md mt-3" />
  </div>
  <div class="mb-4 flex flex-col w-1/3">
    <label for="personEmail">Person's Email:</label>
    <input type="text" id="personEmail" name="personEmail" placeholder="Enter Person's Email" class="input input-bordered input-info w-full max-w-md mt-3 mb-3" />
    <label for="companyAddress">Company Address:</label>
    <input type="text" id="companyAddress" name="companyAddress" placeholder="Enter Company Address" class="input input-bordered input-info w-full max-w-md mt-3 mb-3" />
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter Password" class="input input-bordered input-info w-full max-w-md mt-3 mb-3" />
    <button type="submit" class="btn btn-primary mt-4">Submit</button>
  </div>
</form>



</main>






<?php
     
        include_once ('footer.php');
     
        ?>
</body>
</html>
<!-- <h2>New here?</h2>
<p> Register your information for sign up </p>

<form action="/action_page.php">
  <label for="fname"> Company ID:</label>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="fname"> Company name:</label>
  <input type="text" id="fname" name="fname" value=""><br>
<label for="fname"> Contact Person:</label>
  <input type="text" id="fname" name="fname" value=""><br>
<label for="fname"> Person's contact:</label>
  <input type="text" id="fname" name="fname" value=""><br>
<label for="lname">Person's Email:</label>
  <input type="text" id="lname" name="lname" value=""><br>
  <label for="fname"> Company address:</label>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Passward:</label>
  <input type="text" id="lname" name="lname" value=""><br><br>
   <a href="home.php"> Submit</a>
</form>  -->