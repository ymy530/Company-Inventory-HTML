<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Company Inventory</title>
<!-- css file change background color and dropdown menu -->
<link rel="stylesheet" type="text/css" href="a3.css">
</head>
<body>
<!-- import the javascript file -->
<script src = "a3.js"></script>
<!-- connect to database -->
<?php
include 'connectdb.php';
?>
<h1>Welcome to Inventory</h1>

<!-- Check what products that customer purchased -->
<h2>Our Customers</h2>
<!-- Get customer list in radio buttom -->
<form action="getcustomer.php" method="post">
<?php
   echo "Who are you looking up? </br>";
   include 'allcustomerinfo.php';
?>
<input type="submit" value="Get Customer's Purchased">
</form>
<hr>
<hr>

<!-- View all the products information by different orders(price and description) -->
<h2> View All The Products  </h2>
<!-- After user click on dropdown menu, the product information show on the same page -->
<form action="" method="post">
      <select name="pickaorder" id = "pickaorder">     
      <option value="1"> Select Here </option>
      <option value="AP"> Ascending Price </option>
      <option value="DP"> Descending Price </option>
      <option value="AD"> Ascending Description </option>
      <option value="DD"> Descending Description </option>     	
      </select>
</form>
<hr>
<!-- Return the products list with correspond order that user selected -->
 <?php
    if (isset($_POST['pickaorder'])) { 
      include "connectdb.php"; 
      include "getorders.php";
    } 
 ?>
<p>
<hr>
<p>

<!-- Insert new purchase information with existing customer and prosucts, just increase the quantity number -->
<h2> Insert New Purchase </h2>
<form action="addnewpurchase.php" method="post">
<!-- Select products that customer purchased -->
<h3>Products:</h3> <br>
<?php
   include 'getdescription.php';
?>
<!-- Select which customer purcahsed by radio buttom -->
<h3>For which customer:</h3> <br>
<?php
include 'getdata.php';
?>
<!-- Insert purchase quantity -->
Purchase Quantity: <input type="number" min="0" name="quantity"><br>
				   <input type="submit" value="Add New Purchase">
</form>

<p>
<hr>
<hr>
<p>

<h2> Add A New Customer </h2>
<form action="addcustomer.php" method="post" >
<!-- Enter new customer information -->
<h3>What is the firstname of the customer:</h3> <input type="text"  name="customerfirstname"><br>
<h3>What is the lastname of the customer: </h3><input type="text" name="customerlastname"><br>
<h3>Customer City: </h3><input type="text" name="customercity"><br>
<!-- Enter new customer phone number, less than 10 digits -->
<h3>Customer Phone Number:</h3> <input type="number" max="9999999999" name = "customerphone"><br>
<!-- Select agent who work for new customer -->
<h3>Agent:</h3> <select name="customeragent"><br>
				<option value="1"> Select Here </option>
		<?php
     	 include "getagentid.php";
		?>

        		</select>
        <br><br>
  <input type="submit" value="Click here to add New Customer">
  <hr>
</form>


<p>
<hr>
<p>
<h2> Update Phone Number </h2>
<form action="updatephone.php" method="post">
<!-- Promp to choose customer that need to update phone number -->
<h3>For which customer:</h3> <br>
	<select name="customername"><br>
	<option value="1"> Select Here </option>
<?php
      include "selectcustomer.php";
?>
	</select>
	<br>
	
<!-- Enter the new phone number -->
<h3>Enter New Phone Number:</h3> 
	<input type="number" max="9999999999" name = "newphone"><br><br><br>   
	<input type="submit" value="Click here to update phone number">
  <hr>
</form>

<p>
<hr>
<p>
<h2> Delete Customer </h2>
<form action="deletecustomer.php" method="post">
<h3>For which customer:</h3> <br>
<!-- Dropdown menu show avaiable customer name to delete -->
	<select name="customerdelete"><br>
	<option value="1"> Select Here </option>
<?php
      include "selectcustomer.php";
?>
	</select><br><br>
  <input type="submit" value="Click here to delete customer">
  <hr>
</form>

<p>
<hr>
<p>
<h2> Customer bought more than given quantity </h2>
<form action="morethangiven.php" method="post">
<!-- Give the quantity number that would like to check -->
<h3>Quantity Check: </h3>
	<input type="number" name="quantitycheck"><br><br><br>
	<input type="submit" value="Click here to check quantity">
  <hr>
</form>

<p>
<hr>
<p>
<h2> Never Purchased </h2>
<?php
      include "neverpurchased.php";
?>
<br><br>
<p>
<hr>
<hr>
<p>

<!-- Insert new purchase information with existing customer and prosucts, just increase the quantity number -->
<h2> Total sales </h2>
<form action="totalsales.php" method="post">
<!-- Select products that user would like to see sales information -->
<h3>For which product:</h3> <br>
	<select name="totalsalesproduct"><br>
	<option value="1"> Select Here </option>
<?php
   include 'getproduct.php';
?>

	<input type="submit" value="Click here to get total sales">
</form>

<?php
mysqli_close($connection);
?> 
</body>
</html> 
