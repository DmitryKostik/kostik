<?php
$link = false;
function opendb(){
  global $link;
  $link = mysqli_connect("localhost", "root", "123456", "shop");
  mysqli_query($link, "SET NAMES UTF8");
}
function closedb(){
  global $link;
  mysqli_close($link);
}
function getTovarbyId($id){
  global $link;
  opendb();
  $tovar = mysqli_query($link, "Select * From изделия Where КодИзделия = $id");
  closedb();
  return mysqli_fetch_assoc($tovar);
}
function getAllTovar(){
  global $link;
  opendb();
  $tovar = mysqli_query($link, "Select * From P1");
  closedb();
  return mysqli_fetch_all($tovar, MYSQLI_ASSOC);
}
 ?>
