<?php
session_start();
if($_SESSION["permission"]=="1"){
    header('Refresh: 0; url=http://abubakarov/admin/admin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h2>Авторизация админская</h2>
    <form method="POST" action="auth.php">
        Имя: <input name="name" type="text"><br>
        Password: <input name="password" type="password"><br>
        <input type="submit" value="Отправить">
    </form><br>
<font size="5"><a href="/">Вернуться</a></font>
</body>
</html>