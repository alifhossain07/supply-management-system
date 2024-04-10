 <!DOCTYPE html>
<html>
<head> 
<title> Page 2 </title>
<link rel="stylesheet" href="header.css">
</head>
<body>
<?php
     
     include_once ('header.php');
  
     ?>

<center>

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
</form> 

</center>
<?php
     
        include_once ('footer.php');
     
        ?>

</body>
</html>
