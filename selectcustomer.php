<?php
$query = "SELECT * FROM customers";
$result = mysqli_query($connection,$query); 
if (!$result) {
  die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) { 
//dropdown menu buttom show customer id and customer name allow user to choose 
// After user select customer, the correspond customer id will be searched in the customer table
  echo "<option value='";
  echo $row["customerid"] ."'>";
  echo $row["customerid"];
  echo " ";
  echo $row["firstname"];
  echo " ";
  echo $row["lastname"];
  echo "</option>";
}
mysqli_free_result($result);
?>