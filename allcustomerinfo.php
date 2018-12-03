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
        echo '">' . $row["customerid"]. "  Customer Name: " .$row["firstname"] . " " . $row["lastname"] . "  City: "  .$row["city"]. "  Phone: " .$row["phone"]. " Agent:" .$row["agentid"].  "<br>";
   }
   mysqli_free_result($result);
?>