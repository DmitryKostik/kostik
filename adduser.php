<?php
include "functions.php";
if (!empty($_POST["but_reg"])) {
  $nickname = htmlspecialchars($_POST["nickname"]);
  $age = htmlspecialchars($_POST["age"]);
  $success = addUser($nickname, $age);
  header("Location: index.php");
}
?>
