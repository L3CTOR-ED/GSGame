<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h4>Добавление пользователя</h4>
<form method="POST" action="/server.php">
        Логин: <input name="name" type="text"><br>
        E-mail: <input name="email" type="email"><br>
        Пароль: <input name="password" type="password"><br>
        Город: <input name="city" type="text"><br>
        Его любимая игра:
    <select name="game_fav">
    <option label="Шахматы" value="1" selected>Шахматы</option>
	<option label="Нарды" value="2" selected>Нарды</option>
	<option label="Шашки" value="3" selected>Шашки</option>
	<option label="Бильярд" value="4" selected>Бильярд</option>
	<option label="Монополия" value="5" selected>Монополия</option>
    <option label="Фыфывфывфывф" value="6" selected>Фыфывфывфывф</option>
    <option label="Затрудняюсь ответить" value="0" selected></option> </select> <br>
    <input type="hidden" name="query" value='insert'>
    <input type="hidden" name="table" value="user">
    <input type="hidden" name="kavo" value="reg">
    <input type="hidden" name="fields" value="name,email,password,city,game_fav,birth_date,about,signup_date,admin">
        Дата рождения: <input name="birth_date" type="date"><br>
        О нём: <textarea cols="40" rows="5" name="about"></textarea><br><br>
    Админ? <select name="admin">
    <option label="Да" value="1" selected>Да</option>
    <option label="Нет" value="0" selected>Нет</option></select><br><br>
    <input type="submit" value="Отправить">
    </form>
 </form>
</body>
</html>