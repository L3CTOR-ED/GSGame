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
  
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>GSGame</title>
</head>
<body>
    <header>
        <img src="../imgs/logo.png" id="logo">
        <p id="logoText">GSGame</p>
        <p id="social_media"><a href="https://vk.com">Вк</a>/<a href="https://instagram.com">Инстаграм</a></p>
        <a href="/auth/index.php" id="auth">Войти</a>
    </header>
    <div id="registration">
        <div id="regform">
            <h1>Войти в учётную запись</h1><br>
            <form  method="POST" action="auth.php">
                <span>электронная почта</span><br><input class="field" type="text" name="name"><br>
                <span>пароль</span><br><input class="field" type="password" name="password"><br>
                <p><input type="submit" id="buttonreg" value="Продолжить"></p>
            </form>
        </div>
    </div>
    <div id="about_us">
        <p id="authors">Разработчики</p>
        <div class="author">
            <img src="../imgs/author1.png">
            <p>Автор Авторов</p>
        </div>
        <div class="author">
            <img src="../imgs/author2.png">
            <p>Автор Авторов</p>
        </div>
        <div class="author">
            <img src="../imgs/author3.png">
            <p>Автор Авторов</p>
        </div>
        <div class="author">
            <img src="../imgs/author4.png">
            <p>Автор Авторов</p>
        </div>
        <div class="author">
            <img src="../imgs/author5.png">
            <p>Автор Авторов</p>
        </div>
    </div>
    <footer>
        <a href="#">Ссылки</a>
        <a href="#">О нас</a>
    </footer>
</body>
</html>
