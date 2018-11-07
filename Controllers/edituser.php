<?php
include "../Model/functions.php";
$id = $_GET['id'];
$nickname = $_GET['nickname'];
$age = $_GET['age'];
$rolevalue = $_GET['rolevalue'];
updateUser($id, $nickname, $age, $rolevalue);
$role = getAllRoles();
$role_name = $role[$rolevalue-1]["role_name"];
echo "<td>".$id." </td>";
echo "<td>".$nickname." </td>";
echo "<td>".$age." </td>";
echo "<td>".$role_name." </td>";
?>
