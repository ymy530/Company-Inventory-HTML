<?php
  $whichMus = $_POST["pickaorder"];
  //if($whichMus == "1"){
  $query = "select * from products order by cost ASC";
  $result = mysqli_query($connection, $query); 
  if (!$result) {
    die("databases query on art pieces failed. "); }
  echo "<ul>"; //put the artwork in an unordered bulleted list
  while($row = mysqli_fetch_assoc($result)){
    echo "<li>" .$row["productid"]. " Description: " .$row["description"]. "Price: " .$row["cost"]. " Quantity: " .$row["quantity"]. "</li>";
  }
  echo "</ul>";   //end the bulleted list
  mysqli_free_result($result);
  //}
  
 //  else($whichMus == "2"){
//   $query = "select * from products order by cost DESC";
//   $result = mysqli_query($connection, $query); 
//   if (!$result) {
//     die("databases query on art pieces failed. "); }
//   echo "<ul>"; //put the artwork in an unordered bulleted list
//   while($row = mysqli_fetch_assoc($result)){
//     echo "<li>" .$row["productid"]. " Description: " .$row["description"]. "Price: " .$row["cost"]. " Quantity: " .$row["quantity"]. "</li>";
//   }
//   echo "</ul>";   //end the bulleted list
//   mysqli_free_result($result);
//   }
 //  
//   elseif($whichMus == "3"){
//   $query = "select * from products order by description ASC";
//   $result = mysqli_query($connection, $query); 
//   if (!$result) {
//     die("databases query on art pieces failed. "); }
//   echo "<ul>"; //put the artwork in an unordered bulleted list
//   while($row = mysqli_fetch_assoc($result)){
//     echo "<li>" .$row["productid"]. "  Description:  " .$row["description"]. "  Price:  " .$row["cost"]. "  Quantity:  " .$row["quantity"]. "</li>";
//   }
//   echo "</ul>";   //end the bulleted list
//   mysqli_free_result($result);
//   }
//   
//   else($whichMus == "4"){
//   $query = "select * from products order by description DESC";
//   $result = mysqli_query($connection, $query); 
//   if (!$result) {
//     die("databases query on art pieces failed. "); }
//   echo "<ul>"; //put the artwork in an unordered bulleted list
//   while($row = mysqli_fetch_assoc($result)){
//     echo "<li>" .$row["productid"]. "  Description:  " .$row["description"]. "  Price:  " .$row["cost"]. "  Quantity:  " .$row["quantity"]. "</li>";
//   }
//   echo "</ul>";   //end the bulleted list
//   mysqli_free_result($result);
//   }
  
?>