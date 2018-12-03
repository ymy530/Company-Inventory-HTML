<?php
// Get the customer table order by last name
   $query = "SELECT * FROM customers ORDER BY lastname";
   // run the query
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }  
   while ($row = mysqli_fetch_assoc($result)) {
   //create radio buttom of customers for user
        echo '<input type="radio" name="customer" value="';
        echo $row["customerid"];
        echo '">' . $row["customerid"]. " " .$row["firstname"] . " " . $row["lastname"] . "<br>";
   }
   mysqli_free_result($result);
?>