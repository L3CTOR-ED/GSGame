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
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h4>Регистрация</h4>
<form method="POST" action="/server.php">
        Логин: <input name="name" type="text"><br>
        E-mail: <input name="email" type="email"><br>
        Пароль: <input name="password" type="password"><br>
        Город: <input name="city" type="text"><br>
        Ваша любимая игра:
    <select name="game_fav">
    <option label="Шахматы" value="1" selected>Шахматы</option>
	<option label="Нарды" value="2" selected>Нарды</option>
	<option label="Шашки" value="3" selected>Шашки</option>
	<option label="Бильярд" value="4" selected>Бильярд</option>
	<option label="Монополия" value="5" selected>Монополия</option>
    <option label="Фыфывфывфывф" value="6" selected>Фыфывфывфывф</option>
    <input type="hidden" name="query" value='insert'>    
    <input type="hidden" name="admin" value='0'>
    <input type="hidden" name="table" value="user">
    <input type="hidden" name="kavo" value="reg">
    <input type="hidden" name="fields" value="name,email,password,city,game_fav,birth_date,about,signup_date,admin">
    <option label="Затрудняюсь ответить" value="0" selected></option> </select> <br>
        Дата рождения: <input name="birth_date" type="date"><br>
        Расскажите о себе: <textarea cols="40" rows="5" name="about"></textarea><br><br>
        <input type="submit" value="Отправить">
    </form>
 </form><br>
 <font size="5"><a href="/">Вернуться</a></font>
</body>
</html>