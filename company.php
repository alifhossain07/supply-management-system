<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>company</title>
</head>
<body class="bg-sky-100">
<?php
     
     include_once ('header.php');
  
     ?>
<main>
  <!-- main container -->
<div class="w-3/4 mx-auto mt-16 mb-16 flex justify-around items-center">
<div>
  <img src="companyimg.png" alt="" class="">
</div>
<div>
  <h1 class="text-3xl mb-4 font-semibold">Company <span class="text-blue-700">Information</span> </h1>
<form action="connectcomin.php" method="POST" class="flex flex-col ">
  <label for="Name" class="mb-2">Name:</label>
  <input type="text" id="Name" name="Name" class="input input-bordered input-info w-full max-w-lg mt-1 h-10" />

  <label for="Brunch" class="mb-2 mt-4">Branch:</label>
  <input type="text" id="Brunch" name="Brunch" class="input input-bordered input-info w-full max-w-lg mt-1 h-10" />

  <label for="OrderID" class="mb-2 mt-4">OrderID:</label>
  <input type="number" id="OrderID" name="OrderID" class="input input-bordered input-info w-full max-w-lg mt-1 h-10" />

  <label for="Quantity" class="mb-2 mt-4">Quantity:</label>
  <input type="number" id="Quantity" name="Quantity" class="input input-bordered input-info w-full max-w-lg mt-1 h-10" />

  <label for="PreviousSells" class="mb-2 mt-4">Previous Sells:</label>
  <input type="number" id="PreviousSells" name="PreviousSells" class="input input-bordered input-info w-full max-w-lg mt-1 h-10" />

  <input type="submit" value="Submit" class="btn btn-primary mt-6">
</form>


</div>
</div>
</main>
<?php
  
     include_once ('footer.php');
  
     ?>
</body>
</html>


