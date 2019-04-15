<?php
header('Refresh: 0; url=http://abubakarov/admin/admin.php');
require_once("connect.php");
$name = strtolower($_POST["name"]);
$description = $_POST["description"];
$rez=$mysqli->query("INSERT INTO `game` (`id`, `name`, `description`) VALUES (NULL,\"$name\",\"$description\");");
?>