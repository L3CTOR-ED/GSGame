<?php
session_start();
if($_SESSION["name"]){
echo("<h2>Hello, " . $_SESSION['name']); }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kavo?</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body bgcolor="white">
    <h3><a href="/auth/" style="color: rgb(255, 72, 0)">Авторизация</a></h3>
    <h3><a href="/reg/" style="color: rgb(255, 72, 0)">Регистрация</a></h3>
    <h3><a href="/admin/" style="color: rgb(255, 72, 0)">Вход в админку</a></h3>
    <h3><a href="/admin/admin.php" style="color: rgb(255, 72, 0)">Сама админка (для админов)</a></h3>
    <h3><a href="/users" style="color: rgb(255, 72, 0)">Пользователи</a></h3>
</body>
</html>