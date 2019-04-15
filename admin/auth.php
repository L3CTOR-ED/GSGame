<?php session_start(); ?>
<meta charset="utf-8">
<?php
require_once("connect.php");

$name=$_POST['name'];
$password=$_POST['password'];
$login=$mysqli->query("SELECT name,password,admin FROM user");

while($row = $login->fetch_assoc()) {
    if (($row["name"]==$name) and ($row["password"]==$password) and ($row["admin"]==1)) {
        $admin = 1;
        break;
    } 
}
if($admin){
    echo("Привет, админ. Вы успешно авторизовались!<br>");
    $_SESSION["permission"] = "1";
    $_SESSION["name"] = $name;
    ?><a href="/admin/admin.php">Перейти в админку</a><?php
} else {
    echo("Вы не админ..");
}
?>