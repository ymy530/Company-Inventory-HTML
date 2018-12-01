<?php
$query = "SELECT * FROM customers INNER JOIN purchased ON purchased.customerid = customers.customerid INNER JOIN products ON purchased.productid = products.productid WHERE purchasequantity > quantity";
$result = mysqli_query($connection,$query); 
if (!$result) {
  die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) { 
  echo "<option value='";
  echo $row["customerid"] ."'>";
  echo $row["firstname"];
  echo $row["lastname"];
  echo "</option>";
}
mysqli_free_result($result);
?>