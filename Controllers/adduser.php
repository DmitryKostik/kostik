<?php
include "functions.php";
if (!empty($_POST["but_reg"])) {
  $nickname = htmlspecialchars($_POST["nickname"]);
  $age = htmlspecialchars($_POST["age"]);
  $pass = htmlspecialchars($_POST["pass"]);
  $role_id = htmlspecialchars($_POST["role"]);
  $success = addUser($nickname, $age, md5($pass), $role_id);
  header("Location: ../View/index.php");
}
?>
