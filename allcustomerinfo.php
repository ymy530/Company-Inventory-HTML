<?php
// Get the customer table order by last name
   $query = "SELECT * FROM customers ORDER BY lastname";
   // run the query
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }  
   while ($row = mysqli_fetch_assoc($result)) {
   //create radio buttom of customers for user, display all the customer information
        echo '<input type="radio" name="customer" value="';
        echo $row["customerid"];
        echo '">' . $row["customerid"]. "  &nbsp "  "  Customer Name: " .$row["firstname"] . " " . $row["lastname"] . "  &nbsp " "  City: "  .$row["city"]. "  &nbsp " "Phone: " .$row["phone"]. "  &nbsp " " Agent:" .$row["agent"].  "<br>";
   }
   mysqli_free_result($result);
?>