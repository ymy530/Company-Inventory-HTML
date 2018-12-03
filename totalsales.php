<?php
   include 'connectdb.php';
   $whichproduct= $_POST["totalsalesproduct"];//fetch the productid that user select product
   //return the product descrption, total quantity sales and money made from that product correspond to user selection
   $query = 'SELECT description, sum(purchasequantity) AS totalsale, (cost*sum(purchasequantity)) AS money FROM products, purchased WHERE products.productid = purchased.productid AND purchased.productid = "' .$whichproduct. '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';//return the prouct list that sales information
        echo $row["description"];
        echo "&nbsp Sale Quantity: ";
        echo $row["totalsale"];
        echo "&nbsp Revenue: ";
        echo $row["money"];
} 
?>