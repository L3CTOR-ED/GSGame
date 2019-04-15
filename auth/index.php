<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
if($_SESSION["permission"]=="1"){
    echo("<h1>Ты дурак, одмен, это для юзеров</h1><br>");
    ?><img src="https://cs.pikabu.ru/images/big_size_comm/2013-02_1/1359705436774.jpeg"><br><br>
    <font size="6"><a href="/">Вернуться</a></font><?php die();
} ?>
<?php
if($_SESSION["name"]){
    echo("<h1>Дурак, ты уже авторизован</h1><br>"); 
    ?><img src="https://cs.pikabu.ru/images/big_size_comm/2013-02_1/1359705436774.jpeg"><br><br>
    <font size="6"><a href="/">Вернуться</a></font><?php die();
} ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h2>Авторизация</h2>
    <form method="POST" action="auth.php">
        Имя: <input name="name" type="text"><br>
        Password: <input name="password" type="password"><br>
        <input type="submit" value="Отправить">
    </form><br>
<font size="5"><a href="/">Вернуться</a></font>
</body>
</html>