<?php
//fetch the value that customer select 
  $whichMus = $_POST["pickaorder"];
  //if they select the Ascending Price, the value is AP
  if($whichMus == "AP"){
  // select products order by ascending order
  $query = "SELECT * FROM products ORDER BY CAST(cost AS UNSIGNED) ASC";
  // run query
  $result = mysqli_query($connection, $query); 
  if (!$result) {
    die("databases query on art pieces failed. "); }
  // return unorder list
  echo "<ul>"; 
  while($row = mysqli_fetch_assoc($result)){
  //print the products table row by row
  echo "<li>" .$row["productid"]. "  &nbsp Product:  " .$row["description"]. "  &nbsp Cost:  " .$row["cost"]. "  &nbsp Quantity     " .$row["quantity"]. "</li>";
  }
  echo "</ul>";   
  mysqli_free_result($result);
  } elseif($whichMus == "DP"){//if they select the Descending Price, the value is DP 
    // select products order by descending order 
  $query = "SELECT * FROM products ORDER BY CAST(cost AS UNSIGNED) DESC";
  $result = mysqli_query($connection, $query); 
  if (!$result) {
    die("databases query on art pieces failed. "); }
  echo "<ul>"; // return unorder list
  while($row = mysqli_fetch_assoc($result)){
  //print the products table row by row
  echo "<li>" .$row["productid"]. "  &nbsp Product:  " .$row["description"]. "  &nbsp Cost:  " .$row["cost"]. "  &nbsp Quantity     " .$row["quantity"]. "</li>";
  }
  echo "</ul>";   
  mysqli_free_result($result);
  } elseif($whichMus == "AD"){//if they select the Ascending Description, the value is AD
  $query = "SELECT * FROM products ORDER BY description ASC";
  $result = mysqli_query($connection, $query); 
  if (!$result) {
    die("databases query on art pieces failed. "); }
  echo "<ul>"; 
  while($row = mysqli_fetch_assoc($result)){
   //print the products table row by row
  echo "<li>" .$row["productid"]. "  &nbsp Product:  " .$row["description"]. "  &nbsp Cost:  " .$row["cost"]. "  &nbsp Quantity     " .$row["quantity"]. "</li>";
  echo "</ul>";  
  mysqli_free_result($result);
  } else{
  $query = "SELECT * FROM products ORDER BY description DESC";
  $result = mysqli_query($connection, $query); 
  if (!$result) {
    die("databases query on art pieces failed. "); }
  echo "<ul>"; 
  while($row = mysqli_fetch_assoc($result)){
   //print the products table row by row
  echo "<li>" .$row["productid"]. "  &nbsp Product:  " .$row["description"]. "  &nbsp Cost:  " .$row["cost"]. "  &nbsp Quantity     " .$row["quantity"]. "</li>";
  echo "</ul>";   
  mysqli_free_result($result);
  } 
  //
?>