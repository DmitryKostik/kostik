<?php
 $link=false;
function openDB()
{
	global $link;
	$link = mysqli_connect("localhost","root","","user");
	mysqli_query($link, "SET NAMES UTF8");
}

function closeDB()
{
	global $link;
	mysqli_close($link);
}
function getUserByID($id){
	global $link;
	openDB();
	$res = mysqli_query($link,"SELECT * FROM users WHERE ID_user=$id");
	closeDB();
	return mysqli_fetch_assoc($res);
}
function getAllUsers(){
	global $link;
	openDB();
	$res = mysqli_query($link,"SELECT* FROM users");
	closeDB();
	return $res->fetch_all($resultype=MYSQLI_ASSOC);
}

function addUser($nickname, $age){
	global $link;
	openDB();
	$res = mysqli_query($link,"INSERT INTO users(Nickname,Age) VALUES ('$nickname', $age)");

	closeDB();
	return $res;
}

function deleteUser($id){
	global $link;
	openDB();
	$res = mysqli_query($link,"DELETE FROM  users WHERE ID_user=$id");
	closeDB();
	return $res;
}

?>
