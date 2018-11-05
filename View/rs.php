<?php
include_once "../functions.php";
$res = getUserByID($_GET['id']);
$name = $res["Nickname"];
echo "<p>$name</p>";
?>
