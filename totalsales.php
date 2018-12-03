<?php
   include 'connectdb.php';
   $whichproduct= $_POST["totalsalesproduct"];//fetch the value that user selected
   //return the product purchased correspond to value
   $query = 'SELECT description, sum(purchasequantity) AS totalsale, (cost*sum(purchasequantity)) AS money FROM products, purchased WHERE products.productid = purchased.productid AND purchased.productid = "' .$whichproduct. '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';//return the prouct list that purchased
        echo $row["description"];
        echo " ";
        echo $row["totalsale"];
        echo " ";
        echo $row["money"];
} 
?>