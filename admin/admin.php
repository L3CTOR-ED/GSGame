<?php session_start(); ?>
<meta charset="utf-8">
<h2>Админка</h2>
<?php
if ($_SESSION["permission"]!="1"){
    print("Вы не админ!");
    die();
}
require_once("delete1.php");
require_once("add.php"); 
?>
<h3>Добавить игру</h3>
<form method="POST" action="putgame.php">
        Название игры(eng): <input name="name" type="text"><br>
        Описание: <textarea cols="40" rows="5" name="description"></textarea><br><br>
        Лого игры: <input type="file" name="img"><br><br>
<input type="submit" value="Отправить">
</form>
<h3><a href="getgame.php">Узнать список игр</a></h3>