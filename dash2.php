<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Welcome to Supplier Management System</title>
    
    <link rel="stylesheet" href="header.css">
     <style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #0effff; /* light cyan background */
}

.welcome-container {
    text-align: center;
    margin-top: 50px;
}

h1 {
    font-size: 36px;
    color: #4169e1; /* royal blue heading color */
}

.login-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4169e1; /* Pink button background */
    color: #fff; /* Button text color */
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
}

.login-button:hover {
    background-color: #d6005f; /* Darker pink on hover */
}



footer {
    background-color: white;
    color: #4169e1;
    padding: 20px;
   
    justify-content: space-between;
    align-items: center;
    margin-top: 178px;
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
    color:#4169e1;
    text-decoration: none;
}

.footer-menu a:hover {
    color: #d6005f;
}

.welcome-text {
    color: #4169e1;
    margin-right: 100px;
}

.copyright {
    color: #4169e1;
    text-align: center;
    
}

</style> 
</head>
<body>
    <div class="welcome-container">
        <h1 class="text-2xl"> Welcome to Supplier Management System</h1>
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
