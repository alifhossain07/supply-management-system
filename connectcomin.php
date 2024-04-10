<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO companylog (Name, Brunch, OrderID, Quantity, PreviousSells)
VALUES ('$_POST[Name]', '$_POST[Brunch]', '$_POST[OrderID]', '$_POST[Quantity]', '$_POST[PreviousSells]')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>