<?php
// return all the product description that never been purchased 
   $query = 'SELECT description FROM products WHERE productid NOT IN (SELECT productid FROM purchased)';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';//return the prouct list that never been purchased
        echo $row["description"];
        echo '</li>';
     }
     mysqli_free_result($result);
?>