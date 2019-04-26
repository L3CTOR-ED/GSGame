<meta charset="utf-8">
<?php

require_once("../admin/connect.php");

if(!$_GET['id']){
	echo("<h4>Пользователи сайта</h4>");
    $results=$mysqli->query("SELECT id,name FROM user");

    while($row = $results->fetch_assoc()) {
        ?>
        <a href="?id=<?=$row['id']?>">Перейти на его страницу</a>
        <?php
        echo $row["id"]."\t";
        echo $row["name"]."<br>";
    }
} else 
{
	$userid = $_GET['id'];
	$results=$mysqli->query("SELECT name,email,game_fav,rating,birth_date,city,about,friendlist FROM `user` WHERE id=$userid");
    while($row = $results->fetch_assoc()) 
	{
		echo "<h3>".$row["name"]."</h3>";
		echo "E-mail адрес: ".$row["email"]."<br>";
		echo "Любимая игра: ".$row["game_fav"]."<br>";
		echo "Рейтинг пользователя: ".$row["rating"]."<br>";
        echo "Дата рождения: ".$row["birth_date"]."<br>";
		echo "Город: ".$row["city"]."<br>";
		echo "О себе: " . $row["about"]."<br>";
		echo "Друзья: ";
		$friendlist = $row['friendlist'];
		$friendname = $mysqli->query("SELECT name FROM user WHERE id=$friendlist");
		while($row1 = $friendname->fetch_assoc()) {
        ?>
        <a href="?id=<?=$row['friendlist']?>"><?php echo($row1['name']); ?> </a> <?php
        } 
    }
}
?>
