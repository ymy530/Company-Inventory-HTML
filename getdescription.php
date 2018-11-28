<?php
//get products table
   $query = "SELECT * FROM products";
   // run the query
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }  
   while ($row = mysqli_fetch_assoc($result)) {
   //create radio buttom  of product types for users
       echo '<input type="radio" name="product" value="';
        echo $row["productid"];
        echo '">' .$row["description"].  "<br>";
   }
   mysqli_free_result($result);
?>