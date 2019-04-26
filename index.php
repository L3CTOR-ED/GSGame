<meta charset="utf-8">
<?php

require_once("../admin/connect.php");

if($_GET['id']){ ?>
	    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style profile.css">
    <title>GSGame</title>
</head>
<body>
        <header>
                <img src="../imgs/logo.png" id="logo">
                <p id="logoText">GSGame</p>
                <p id="social_media"><a href="https://vk.com">Вк</a>/<a href="https://instagram.com">Инстаграм</a></p>
                <a href="#" id="auth">Войти</a>
        </header>
    <div id="wrapper">

        <div id="profile">
            <p class="title"><?php 		
		$userid = $_GET['id'];
	    $results=$mysqli->query("SELECT name,email,game_fav,rating,birth_date,city,about,friendlist FROM `user` WHERE id=$userid");
        while($row = $results->fetch_assoc()) 
{
echo "<h1>".$row["name"]."</h1>"; } ?> </p>
            
            <div id="profile_d">
                <img src="../profile1.jpeg" id="avatar" width="100" height="200" align="left" 
                vspace="5" hspace="5">

                <p class="main-text"><?php 		
		$userid = $_GET['id'];
	    $results=$mysqli->query("SELECT name,email,game_fav,rating,birth_date,city,about,friendlist FROM `user` WHERE id=$userid");
        while($row = $results->fetch_assoc()) 
{
		echo "<h4> "." </h4>";
		echo "E-mail адрес: ".$row["email"]."<br>";
		echo "Любимая игра: ".$row["game_fav"]."<br>";
		echo "Рейтинг пользователя: ".$row["rating"]."<br>";
        echo "Дата рождения: ".$row["birth_date"]."<br>";
		echo "Город: ".$row["city"]."<br>";
		echo "О себе: " . $row["about"]."<br>";
		echo "Друзья: ";
		$friendlist = $row['friendlist'];
		$friendname = $mysqli->query("SELECT name FROM user WHERE id=$friendlist");
		while($row1 = $friendname->fetch_assoc()) 
    {
        ?>
        <a href="?id=<?=$row['friendlist']?>"><?php echo($row1['name']); ?> </a> <?php
    } 
} ?> </p> 
            </div>
        </div>

    <div id="FNE" >
        <div id="events"> 
          <p class="title">События</p>
            
          <div id="events_d"><img src="../profile2.jpg" id="event" width="100" height="200" align="left" 
                vspace="5" hspace="5"> <p class="main-text"> Вероятность крайне Мала </p>
          </div>

        </div>

        <div id="friend-list">
                <p class="title"> Список друзей</p>
                <div class="friend">
                    <img src="../imgs/author1.png">
                    <p class="discription"> Друг Другов</p>
                </div>
                <div class="friend">
                    <img src="../imgs/author2.png">
                    <p class="discription">Друг Другов</p>
                </div>
                <div class="friend">
                    <img src="../imgs/author3.png">
                    <p class="discription">Друг Другов</p>
                </div>
                <div class="friend">
                    <img src="../imgs/author4.png">
                    <p class="discription">Друг Другов</p>
                </div>
                <div class="friend">
                    <img src="../imgs/author5.png">
                    <p class="discription">Автор Авторов</p>
                </div>
            </div>

        



        </div>
        <div id="news">

                <p class="title" align="center">----------- НОВОСТИ -----------</p>
                
                <div id="news_d"><img src="../news.jpg" id="new"  align="right" 
                    vspace="5" hspace="5"> <p class="main-text">  Кодер чуть не задушил дезигнера. </p> 
                </div>
    
            </div>
    
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
<?php
} else 
{
    echo("<h4>Пользователи сайта</h4>");
    $results=$mysqli->query("SELECT id,name FROM user");

    while($row = $results->fetch_assoc()) {
        ?>
        <a href="?id=<?=$row['id']?>">Перейти на его страницу</a>
        <?php
        echo $row["id"]."\t";
        echo $row["name"]."<br>";
    }
}
?>
