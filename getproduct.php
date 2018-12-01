<?php
$query = "SELECT * FROM products";
$result = mysqli_query($connection,$query); 
if (!$result) {
  die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) { 
  echo "<option value='";
  echo $row["productid"] ."'>";
  echo $row["description"];
  //echo $row["lastname"];
  echo "</option>";
}
mysqli_free_result($result);
?>