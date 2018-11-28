<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert purchase</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<ol>
<?php
   $whichCustomer = $_POST["customer"];
   //$petName = $_POST["petname"];
   $whichProduct =$_POST["product"];
   $whichQuantity=$_POST["quantity"];
   $query1= 'SELECT * FROM products INNER JOIN purchased ON products.productid = purchased.productid WHERE purchased.productid = "' .$whichProduct. '" AND purchased.customerid = "' .$whichCustomer. '"';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database max query failed.");
   }
   $row=mysqli_fetch_assoc($result);
   if(empty($row)){
   $newkey = intval($whichQuantity);
   $newquantity = (string)$newkey;
   $query = 'INSERT INTO purchased VALUES("' .$whichCustomer. '", "' .$newquantity. '", "' .$whichProduct. '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your purchase was added!";
   mysqli_close($connection);   
   } else{
   $newkey = intval($row["purchasequantity"])+ intval($whichQuantity);
   $newquantity = (string)$newkey;
   $query = 'UPDATE purchased SET purchasequantity = "' .$newquantity. '" WHERE customerid = "' .$whichCustomer. '" AND productid = "' .$whichProduct. '"';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your purchase was added!";
   mysqli_close($connection);   
   }
?>
</ol>
</body>
</html>

