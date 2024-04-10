<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: light blue;
            margin: 0;
    padding: 0;
        }


        header {
    background-color: rgba(204, 255, 252, 0.985);
    color: #2c34a5;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    border-bottom: 2px solid blue;
}

.logo {
    display: flex;
    align-items: center;
}

.logo img {
    height: 50px;
    width: auto;
    margin-right: 10px;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline-block;
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #2c34a5;
    transition: color 0.3s ease;
}

nav ul li:hover a {
    color: #2c34a5;
}

.submenu-content {
    display: none;
    position: absolute;
    background-color: white;
    border: 1px solid lightpink;
    padding: 10px;
}

.submenu:hover .submenu-content {
    display: block;
}
        
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        form {
            margin-bottom: 20px;
        }
        .update-btn {
  background-color: blue;
  color: #fff;
}




.delete-btn {
  background-color: red;
  color: #fff;
}



.logout {
    text-align: center;
}

.logout a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #2c34a5; /* Pink button background */
    color: #fff; /* Button text color */
    text-decoration: none;
    border-radius: 5px;
}

.logout a:hover {
    background-color: #d6005f; /* Darker pink on hover */
}

footer {
    background-color: rgba(204, 255, 252, 0.985);
    color: #2c34a5;
    padding: 20px;
   
    justify-content: space-between;
    align-items: center;
}

.footer-top{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.footer-menu ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.footer-menu li {
    margin-bottom: 10px;
}

.footer-menu a {
    color: ##2c34a5;
    text-decoration: none;
}

.footer-menu a:hover {
    color: #2c34a5;
}

.welcome-text {
    color: #2c34a5;
    margin-right: 100px;
}

.copyright {
    color: #2c34a5;
    text-align: center;
    
}
    </style>
</head>
<body>



<?php
     
        include_once ('header.php');
     
        ?>
    <h2>Company Details</h2>

    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
       
        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name">
        <input type="submit" value="Search">
    </form>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";

  
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $sql = "SELECT * FROM companylog";
    if (isset($_GET['Name']) && !empty($_GET['Name'])) {
        $Name = $_GET['Name'];
        $sql .= " WHERE Name = $Name";
    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>Name</th><th>Branch</th><th>Order ID</th><th>Quantity</th><th>Previous Sell</th><th>Action</th></tr>";
    
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["Brunch"] . "</td><td>" . $row["OrderID"] . "</td><td>" . $row["Quantity"] . "</td><td>" . $row["PreviousSells"] . "</td><td >";
            echo "<form method='POST' action='update_customer.php'><input type='hidden' name='Name' value='".$row["Name"]."'><button class='update-btn' type='submit'>Update</button></form>";
            echo "<form method='POST' action='delete_customer.php'><input type='hidden' name='Name' value='".$row["Name"]."'><button class='delete-btn' type='submit'>Delete</button></form></td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

 
    mysqli_close($conn);
    ?>
   


   <?php
     
        include_once ('footer.php');
     
        ?>
</body>
</html>
