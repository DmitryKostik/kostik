<?php
if (!empty($_POST["but_change"])) {
updateUser($_GET['id'], $_POST['nickname'], $_POST['age'], $_POST['role-value']);
header("Location: index.php");
}
?>
