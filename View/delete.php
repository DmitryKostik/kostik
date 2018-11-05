<?php
include "../functions.php";
$res = getUserByID($_GET['id']);
if (!empty($_POST["delete"])) {
deleteUser($_GET['id']);
header("Location: index.php");
}
?>
    <p>Вы действительно хотите удалить пользователя <?php echo $res["Nickname"] ?>?</p>
</body>
</html>
