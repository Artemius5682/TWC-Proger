<?php
$name_base = "web-cup-prog";
$user_name = "mysql";
$user_password = "";
$host = "localhost";
$mysql = new mysqli($host, $user_name, "", $name_base);
$mysql->query ("set name'utf-8'");

?>