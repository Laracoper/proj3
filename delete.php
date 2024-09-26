<?
 require 'connect.php';

 $id = $_GET['id'];

 mysqli_query($connect, "DELETE FROM `peoples` WHERE `id` = '$id'");

 header('location: /');