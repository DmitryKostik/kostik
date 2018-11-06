<?php
include "../Model/functions.php";
$res = getUserByID($_GET['id']);
?>
    <p>Вы действительно хотите удалить пользователя <?php echo $res["Nickname"] ?>?</p>
