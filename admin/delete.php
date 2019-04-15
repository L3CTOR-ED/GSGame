<?php
header("refresh: 2; url=/admin/admin.php");
?>
<meta charset="utf-8">
<?php
require_once("connect.php");

$id = $_GET['id'];
$results=$mysqli->query("DELETE FROM user WHERE id=$id");
var_dump($results);

?>