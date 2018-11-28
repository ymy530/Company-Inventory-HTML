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
   $query1= 'SELECT * FROM products INNER JOIN purchased ON products.productid = purchased.productid WHERE description = "' .$whichProduct. '"';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database max query failed.");
   }
   $row=mysqli_fetch_assoc($result);
   $newkey = intval($row["purchasequantity"]) +  intval($whichQuantity);
   $newquantity = (string)$newkey;
   //$productiid = $row["purchased.productid"]
   $query = 'UPDATE purchased SET purchasequantity = "' .$newquantity. '" WHERE customerid = "' .$whichCustomer. '"';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your purchase was added!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>

