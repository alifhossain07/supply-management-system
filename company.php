<!DOCTYPE html>
<html>
<head> 
<title> Page 5 </title>
<link rel="stylesheet" href="header.css">
</head>
<body>

<?php
     
        include_once ('header.php');
     
        ?>

<center>

<h2>Company information</h2>

<form action="connectcomin.php" method="POST">

  <label for="Name"> Name:</label>
  <input type="text" id="Name" name="Name" value=""><br>
<label for="Brunch"> Brunch:</label>
  <input type="text" id="Brunch" name="Brunch" value=""><br>
<label for="OrderID"> OrderID:</label>
  <input type="digit" id="OrderID" name="OrderID" value=""><br>
<label for="Quantity"> Quantity:</label>
  <input type="digit" id="Quantity" name="Quantity" value=""><br>
  <label for="PreviousSells"> PreviousSells:</label>
  <input type="digit" id="PreviousSells" name="PreviousSells" value=""><br>

  <input type="submit" value="Submit">
</form> 

</center>
<?php
     
        include_once ('footer.php');
     
        ?>

</body>
</html>
