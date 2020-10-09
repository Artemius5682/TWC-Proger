<?php
include("config.php");
function printResult ($result) {
while (($row = $result->fetch_assoc()) !=false) {
   $state = $row['technical'];
	}
}
$result = $mysql -> query("SELECT FROM `name-situation`");
printResult ($result);
$mysql->close ();
?>