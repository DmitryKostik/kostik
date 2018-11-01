<?php
include "functions.php";
if (!empty($_POST["but_reg"])) {
  $nickname = htmlspecialchars($_POST["nickname"]);
  $age = htmlspecialchars($_POST["age"]);
  $pass = htmlspecialchars($_POST["pass"]);
  $success = addUser($nickname, $age, md5($pass));
  header("Location: View/index.php");
}
?>
