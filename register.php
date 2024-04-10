<!DOCTYPE html>
<html>
<head> 
<title> Page 3 </title>
<link rel="stylesheet" href="header.css">
</head>
<body>
<?php
     
     include_once ('header.php');
  
     ?>
<center>

<h2>New here?</h2>
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
</form> 

</center>
<?php
     
        include_once ('footer.php');
     
        ?>
</body>
</html>
