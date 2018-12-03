<?php
  $query = "SELECT * FROM products";
  $result = mysqli_query($connection,$query); 
if (!$result) {
  die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) { 
// dropdown menu buttom show product id and description allow user to choose 
// After user select product, the correspond product id will be searched in the product table
  echo "<option value='";
  echo $row["productid"] ."'>";
  echo $row["productid"];
  echo " ";
  echo $row["description"];
  echo "</option>";
}
mysqli_free_result($result);
?>