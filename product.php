<html>
<head> 
<title> Page 6 </title>
<link rel="stylesheet" href="header.css">
</head>
<body>
<?php
     
     include_once ('header.php');
  
     ?>
<center>

<h2>Product information</h2>

<form action="/action_page.php">

  <label for="fname"> Product ID:</label>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="fname"> Product name:</label>
  <input type="text" id="fname" name="fname" value=""><br>
<label for="fname"> Quantity:</label>
  <input type="text" id="fname" name="fname" value=""><br>
<label for="fname"> Price:</label>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="fname"> In stock:</label>
  <input type="text" id="fname" name="fname" value=""><br>

  <input type="submit" value="Submit">
</form> 

</center>
<?php
     
        include_once ('footer.php');
     
        ?>
</body>
</html>