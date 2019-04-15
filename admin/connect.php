<?php
$host="localhost";
$login="root";
$password="";
$database_name="abubakarov";

$mysqli = new mysqli($host,$login,$password,$database_name);

if ($mysqli->connect_error) {
    die("Возникла ошибка".$mysqli->connect_error);
}

?>