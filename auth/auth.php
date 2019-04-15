<?php 
header('Content-Type: text/html; charset=utf-8');
session_start();
require_once("/../admin/connect.php");
$name=$_POST['name'];
$password=$_POST['password'];
$login=$mysqli->query("SELECT name,password FROM user");

while($row = $login->fetch_assoc()) {
    if (($row["name"]==$name) and ($row["password"]==$password)) {
        $auth = 1;
        break;
    } 
}
if($auth){
    echo("Привет, " . $name . ". Вы успешно авторизовались!<br>");
    $_SESSION["permission"] = "0";
    $_SESSION["name"] = $name;
} else {
    echo("Неверный логин или пароль!");
}
?>