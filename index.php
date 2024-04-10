<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #ffe6f2; /* Light pink background */
}

.login-container {
    width: 100%;
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff; /* White container background */
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.registration-container {
    width: 100%;
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff; /* White container background */
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.dashboard-container {
    width: 100%;
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff; /* White container background */
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #ff007f; /* Pink heading color */
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #333; /* Label color */
}

input[type="text"],
input[type="password"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc; /* Input border color */
    border-radius: 5px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #ff007f; /* Pink button background */
    color: #fff; /* Button text color */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #d6005f; /* Darker pink on hover */
}

button:focus {
    outline: none;
}

        /* new */
    .dashboard-container {
    width: 100%;
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff; /* White container background */
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.profile-info {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.profile-pic img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    margin-right: 15px;
}

.user-info h2 {
    margin: 0;
    color: #333; /* Username color */
}

.user-info p {
    margin: 5px 0;
    color: #666; /* User number color */
}

.balance-info {
    text-align: right;
    margin-bottom: 20px;
}

.options ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.options ul li {
    margin-bottom: 10px;
}

.options ul li a {
    display: block;
    padding: 10px;
    background-color: #ff007f; /* Pink button background */
    color: #fff; /* Button text color */
    text-decoration: none;
    border-radius: 5px;
    text-align: center;
}

.options ul li a:hover {
    background-color: #d6005f; /* Darker pink on hover */
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
    padding: 10px;
   
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
    <div class="dashboard-container">
        <div class="profile-info">
            <div class="profile-pic">
                <!-- Placeholder for profile picture -->
                <img src="1.jpg" alt="Profile Picture">
            </div>
            <div class="user-info">
                <h2>Admin</h2>
                <p>99999999</p>
            </div>
        </div>
        <div class="balance-info">
            <h2>Balance: 1000 TK</h2>
        </div>
        <div class="options">
            <ul>
                <li><a href="insert_money.php">Add Money</a></li>
                <li><a href="insert_mobile_recharge.php">Recharge</a></li>
                <li><a href="registration.php">Add Member</a></li>
                <li><a href="search.php">Customer Details </a></li>
                <li><a href="search2.php">Admin Details </a></li>
                <li><a href="update_pin.php">Change PIN</a></li>
                <li><a href="report.php">Report</a></li>
            </ul>
        </div>
        <div class="logout">
            <a href="logIn.php">Logout</a>
        </div>
    </div>


    <footer>
    <div class="footer-top">
    <div class="footer-logo">
        <img src="1.jpg" alt="Mini Logo">
    </div>
    <div class="footer-menu">
        <ul>
        <li><h3>Menu</h3></li>
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="insert_mobile_recharge.php">Recharge</a></li>
            <li><a href="search2.php">Admin Details</a></li>
            <li><a href="search.php">Customer Details</a></li>
        </ul>
    </div>
    <div class="welcome-text">
       <h1>WELCOME to RMS</h1> 
    </div>
    </div>
    <div class="copyright">
       Copyright &copy; 2024
    </div>
    
</footer>

</body>
</html>