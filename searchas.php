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
            background-color: #ffe6f2;
            margin: 0;
    padding: 0;
        }


        header {
    background-color: white;
    color: #ff007f;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    border-bottom: 2px solid lightpink;
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
    color: #ff007f;
    transition: color 0.3s ease;
}

nav ul li:hover a {
    color: #d6005f;
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
    background-color: #ff007f; /* Pink button background */
    color: #fff; /* Button text color */
    text-decoration: none;
    border-radius: 5px;
}

.logout a:hover {
    background-color: #d6005f; /* Darker pink on hover */
}

footer {
    background-color: white;
    color: #ff007f;
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
    color: #ff007f;
    text-decoration: none;
}

.footer-menu a:hover {
    color: #d6005f;
}

.welcome-text {
    color: #ff007f;
    margin-right: 100px;
}

.copyright {
    color: #ff007f;
    text-align: center;
    
}
    </style>
</head>
<body>



<?php
     
        include_once ('header.php');
     
        ?>

    <h2>Members Details</h2>

    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
       
        <label for="id">Name:</label>
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
        $phone = $_GET['Name'];
        $sql .= " WHERE Name = $Name";
    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>Name</th><th>Brunch</th><th>Order ID</th><th></th><th>Quantity</th><th>Previous Sells</th><th>Action</th></tr>";
    
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["Brunch"] . "</td><td>" . $row["Order ID"] . "</td><td>" . $row["Quantity"] . "</td><td>" . $row["Previous Sells"] . "</td><td>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

 
    mysqli_close($conn);
    ?>
   



</style>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome to Supplier Management System</h1>
        <img src="logo.png" alt="Banner Image"><br><br>
        <a href="logIn.php" class="login-button">Login</a>
    </div>

    <footer>
    <div class="footer-top">
    <div class="footer-logo">
        <img src="logo.png" alt="Mini Logo">
    </div>
    <div class="footer-menu">
        <ul>
        <li><h3>Menu</h3></li>
            <li><a href="dash.php">Home</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="logIn.php">Log In</a></li>
            <li><a href="company.php">Company</a></li>
            
        </ul>
    </div>
    <div class="welcome-text">
       <h1>WELCOME to SMS</h1> 
    </div>
    </div>
    <div class="copyright">
       Copyright &copy; 2024
    </div>
    
</footer>

</body>
</html>
