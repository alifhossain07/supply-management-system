<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Welcome to Supplier Management System</title>
    <link rel="stylesheet" href="header.css">

<!-- <style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #0effff; /* light cyan background */
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
</style> -->
<style>
    .welcome-container 
    {
   background-image: url('images/1.jpg'); /* Replace 'path/to/your/image.jpg' with the actual path to your image */
        background-size: cover; /* This ensures that the background image covers the entire container */
        background-position: center; /* This centers the background image within the container */
    }
</style>

</head>
<body class="w-3/4 mx-auto">
    <div class="mx-auto p-10 space-y-7 welcome-container bg-sky-300 flex items-center justify-center">
        <div class="space-y-7 gap-10">
        <h1 class="text-5xl font-bold">Welcome to <br> <span class="text-pink-600">Supplier Management System<span> </h1>
        <a href="logIn.php" class="inline-block px-6 py-3 mt-4 font-bold bg-yellow-500 text-black rounded hover:bg-blue-600">Login</a>
        </div>
        <div>
        <img src="images/logo1.png" alt="Banner Image"><br><br>
        </div>
    </div>

    <footer class="h-[600px]" >
        <div class="flex justify-center mx-auto items-center mt-20">
            <h1 class="text-4xl font-bold text-black">Services</h1>
        </div>
    
    <div class="flex mx-auto justify-center mt-10 items-center">

    <div>
        <img src="images/2.png" alt="" class="w-[400px]">
    </div>
    
    <div class="mx-auto  mt-10 space-x-10"> 
    
    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mr-2">
    <a href="dash.php">Home</a>
    </button>

    <button class="bg-sky-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mr-2">
        <a href="register.php">Register</a>
    </button>

    <button class="bg-blue-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded mr-2">
        <a href="logIn.php">Log In</a>
    </button>

    <button class="bg-sky-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mr-2">
        <a href="company.php">Company</a>
    </button></div>
    
    <div>
        <img src="images/3.png" alt="" class="w-[400px]">
    </div>

   

    </div>


   
    <div class="copyright mt-10">
       Copyright &copy; 2024
    </div>
    
</footer>
</body>
</html>
<