<?php
	$whichAgent = $_POST["customeragent"];
// Get the customer table order by last name
   $query = 'SELECT  * FROM agents WHERE agentid="' . $whichAgent . '"';
   // run the query
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }  
   while ($row = mysqli_fetch_assoc($result)) {
   //create dropdown menu of product types for users
        echo ' <option value="';
        echo $row["agentid"];
        echo '">' . $row["firstname"] . " " . $row["lastname"] . "</option>" "<br>";
   }
   mysqli_free_result($result);
?>