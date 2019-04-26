<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
if($_SESSION["permission"]=="1"){
    echo("<h1>Ты дурак, какая регистрация, ты одмен</h1><br>");
    ?><img src="https://cs.pikabu.ru/images/big_size_comm/2013-02_1/1359705436774.jpeg"><br><br>
    <font size="6"><a href="/">Вернуться</a></font><?php die();
} ?>
<?php
if($_SESSION["name"]){
    echo("<h1>Ты дурак, какая регистрация, ты авторизован</h1><br>"); 
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
            <h1>Создать учётную запись</h1><br>
            <form method="POST" action="/server.php">
                <span>Логин</span><br><input class="field" type="text" name="name"><br>
                <span>E-mail</span><br><input class="field" type="email" name="email"><br>
                <span>Пароль</span><br><input class="field" type="password" name="password"><br>
				<span>Город</span><br><input class="field" type="text" name="city"><br>
                <span>Ваша любимая игра</span><br>
				<select name="game_fav">
    <option label="Шахматы" value="1" selected>Шахматы</option>
	<option label="Нарды" value="2" selected>Нарды</option>
	<option label="Шашки" value="3" selected>Шашки</option>
	<option label="Бильярд" value="4" selected>Бильярд</option>
	<option label="Монополия" value="5" selected>Монополия</option>
    <option label="Фыфывфывфывф" value="6" selected>Фыфывфывфывф</option>
	<option label="Затрудняюсь ответить" value="0" selected></option> </select> <br> <br>
	<input type="hidden" name="query" value='insert'>    
    <input type="hidden" name="admin" value='0'>
    <input type="hidden" name="table" value="user">
    <input type="hidden" name="kavo" value="reg">
    <input type="hidden" name="fields" value="name,email,password,city,game_fav,birth_date,about,signup_date,admin">
				<span>Дата рождения</span><br><input class="field" type="date" name="birth_date"><br>
				<span>Расскажите о себе</span><textarea cols="40" rows="5" name="about"></textarea><br><br>
                <p><input type="submit" id="buttonreg" value="Продолжить"></p>
            </form>
</div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
