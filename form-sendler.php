<?php
$water = $_POST['water'];
$electric = $_POST['electric'];
$technical = $_POST['technical'];
$mechanic = $_POST['mechanic'];
include"config.php";
$mysql-> query("INSERT INTO `name-situation` (`water`, `electrical`, `technikal`, `mechanic`)
 VALUES ('$water', '$electric', '$technical', '$mechanic')");
 $mysql->close();
header("Location:/");
