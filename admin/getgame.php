<h3><a href="getgame.php">Узнать список игр</a></h3>
<meta charset="utf-8">
<?php
require_once("connect.php");
$rez=$mysqli->query("SELECT * FROM `game`");
while($row = $rez->fetch_assoc()) { 
    print($row["id"] . " ");
    print($row["name"] . " ");
    print($row["description"] . " ");
    $gamelink = ("https://google.gik-team.com/?q=" . $row["name"] . " game description"); ?>
    <a href="<?php print($gamelink); ?>">Подробнее</a><?php
    print("<br>");
} 
?>