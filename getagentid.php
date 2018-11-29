<?php
$query = "SELECT * FROM agents";
$result = mysqli_query($connection,$query); 
if (!$result) {
  die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) { 
  echo "<option value='";
  echo $row["agentid"] ."'>";
  echo $row["firstname"];
  echo "</option>";
}
mysqli_free_result($result);
?>