<?php
  $whichMus = $_POST["pickaorder"];
  if($whichMus == "AP"){
  $query = "SELECT * FROM products ORDER BY CAST(cost AS UNSIGNED) ASC";
  $result = mysqli_query($connection, $query); 
  if (!$result) {
    die("databases query on art pieces failed. "); }
  echo "<ul>"; 
  while($row = mysqli_fetch_assoc($result)){
    echo "<li>" .$row["productid"]. "   " .$row["description"]. "   " .$row["cost"]. "   " .$row["quantity"]. "</li>";
  }
  echo "</ul>";   
  mysqli_free_result($result);
  } elseif($whichMus == "DP"){
  $query = "SELECT * FROM products ORDER BY CAST(cost AS UNSIGNED) DESC";
  $result = mysqli_query($connection, $query); 
  if (!$result) {
    die("databases query on art pieces failed. "); }
  echo "<ul>"; 
  while($row = mysqli_fetch_assoc($result)){
    echo "<li>" .$row["productid"]. "   " .$row["description"]. "   " .$row["cost"]. "   " .$row["quantity"]. "</li>";
  }
  echo "</ul>";   
  mysqli_free_result($result);
  } elseif($whichMus == "AD"){
  $query = "SELECT * FROM products ORDER BY description ASC";
  $result = mysqli_query($connection, $query); 
  if (!$result) {
    die("databases query on art pieces failed. "); }
  echo "<ul>"; 
  while($row = mysqli_fetch_assoc($result)){
  echo "<li>" .$row["productid"]. "   " .$row["description"]. "   " .$row["cost"]. "   " .$row["quantity"]. "</li>";  }
  echo "</ul>";  
  mysqli_free_result($result);
  } else{
  $query = "SELECT * FROM products ORDER BY description DESC";
  $result = mysqli_query($connection, $query); 
  if (!$result) {
    die("databases query on art pieces failed. "); }
  echo "<ul>"; 
  while($row = mysqli_fetch_assoc($result)){
  echo "<li>" .$row["productid"]. "   " .$row["description"]. "   " .$row["cost"]. "   " .$row["quantity"]. "</li>";  }
  echo "</ul>";   
  mysqli_free_result($result);
  } 
  //
?>