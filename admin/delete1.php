<meta charset="utf-8">
<h4>Удаление пользователей</h4>
<?php

require_once("connect.php");

$results=$mysqli->query("SELECT id,name from user");

while($row = $results->fetch_assoc()) {
    ?>
    <a href="delete.php?id=<?=$row['id']?>">Удалить</a>
    <?php
    echo $row["id"]."\t";
    echo $row["name"]."<br>";
}
?>
