<?

require 'connect.php';


$id = $_GET['id'];
$name = $_GET['name'];
$email = $_GET['email'];
$city = $_GET['city'];
$country = $_GET['country'];

mysqli_query($connect, "UPDATE `peoples` SET `name` = '$name', `email` = '$email', `city` = '$city', `country` = '$country' WHERE `peoples`.`id` = '$id'");

mysqli_close($connect);
header('location: /');