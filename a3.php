
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dr. Western's Vet Clinic</title>
</head>
<body>
<script src = "a3.js"></script>
<?php
include 'connectdb.php';
?>
<h1>Welcome to the Western Vet Clinic</h1>
<h2>Our Customers</h2>

<form action="getcustomer.php" method="post">
<?php
   echo "Who are you looking up? </br>";
   include 'getdata.php';
?>
<input type="submit" value="Get Customer's Purchased">
</form>

<h3> DROPDOWN </h3>
<form action="" method="post">
      <select name="pickaorder" id = "pickaorder">
     
      <option value="1"> Select Order </option>
      <option value="AP"> Ascending Price </option>
      <option value="DP"> Descending Price </option>
      <option value="AD"> Ascending Description </option>
      <option value="DD"> Descending Description </option>     
	
        </select>
</form>
<hr>
 <?php
    if (isset($_POST['pickaorder'])) { 
      //$whichMus = $_POST['pickaorder'];
      include "connectdb.php"; 
      include "getorders.php";
    } //end of 
?>




<p>
<hr>
<p>
<h4> Insert New Purchase </h4>
<form action="addnewpurchase.php" method="post">
Products: <br>
<input type="radio" name="product" value="Bike">Bike<br>
<input type="radio" name="product" value="Socks">Socks<br>
<input type="radio" name="product" value="Elbow pads">Elbow pads<br>
<input type="radio" name="product" value="Knee Pads">Knee Pads<br>
<input type="radio" name="product" value="Roller Blades">Roller Blades<br>
<input type="radio" name="product" value="head pads">head pads<br>
<input type="radio" name="product" value="Helmet">Helmet<br>
For which customer: <br>
<?php
include 'getdata.php';
?>
Purchase Quantity: <input type="text" name="quantity"><br>
<input type="submit" value="Add New Purchase">
</form>



<?php
mysqli_close($connection);
?> 
</body>
</html> 