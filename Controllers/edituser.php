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
echo "<td class='bg-transparent border-white text-center px-0'><a class='text-danger' href='#myModal' data-toggle='modal' data-editid='$id' data-target='#Edit'><i class='far fa-edit'></i></a></td>";
echo "<td class='bg-transparent border-white text-center px-0'><a class='text-danger' href='#myModal' data-toggle='modal' data-deleteid='$id' data-target='#Delete'><i class='fas fa-trash-alt'></i></a></td>";
?>
