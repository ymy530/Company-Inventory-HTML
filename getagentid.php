<?php
$query = "SELECT * FROM agents";
$result = mysqli_query($connection,$query); 
if (!$result) {
  die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) { 
//dropdown menu buttom show agent id and agent name allow user to choose 
// After user select agent, the correspond agent id will be searched in the agents table
  echo "<option value='";
  echo $row["agentid"] ."'>";
  echo $row["agentid"];
  echo " ";
  echo $row["firstname"];
  echo " ";
  echo $row["lastname"];
  echo "</option>";
}
mysqli_free_result($result);
?>