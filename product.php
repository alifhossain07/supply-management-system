<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
  <title>Product</title>
</head>
<body class="bg-sky-100">
<?php
     
     include_once ('header.php');
  
     ?>
<main>

<div class="w-3/4 mx-auto mt-16 mb-16 flex justify-around items-center">
  <div>
    <img src="product.png" alt="" class="w-7/8">
  </div>
  <div>
    <h1 class="text-4xl font-semibold mb-4">Product <span class="text-blue-700">Information</span></h1>
  <form action="/action_page.php" class="flex flex-col ">
  <label for="productID" class="mb-2">Product ID:</label>
  <input type="text" id="productID" name="productID" class="input input-bordered input-info w-full max-w-lg mt-1 h-10" />

  <label for="productName" class="mb-2 mt-4">Product Name:</label>
  <input type="text" id="productName" name="productName" class="input input-bordered input-info w-full max-w-lg mt-1 h-10" />

  <label for="quantity" class="mb-2 mt-4">Quantity:</label>
  <input type="text" id="quantity" name="quantity" class="input input-bordered input-info w-full max-w-lg mt-1 h-10" />

  <label for="price" class="mb-2 mt-4">Price:</label>
  <input type="text" id="price" name="price" class="input input-bordered input-info w-full max-w-lg mt-1 h-10" />

  <label for="inStock" class="mb-2 mt-4">In Stock:</label>
  <input type="text" id="inStock" name="inStock" class="input input-bordered input-info w-full max-w-lg mt-1 h-10" />

  <input type="submit" value="Submit" class="btn btn-primary mt-6 ">
</form>

  </div>

</div>

</main>




<?php
     
        include_once ('footer.php');
     
        ?>
</body>
</html>
<!-- <center>

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

</center> -->
<?php
     
     include_once ('header.php');
  
     ?>

<?php
     
        include_once ('footer.php');
     
        ?>