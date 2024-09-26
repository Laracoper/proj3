<?

require 'connect.php';
require 'func.php';

$name = $_GET['name'];
$arrs = mysqli_query($connect, "SELECT * FROM `callback` WHERE `name` = '$name'");

$arrs = mysqli_fetch_all($arrs);

// debug($arrs[1]);
// debug($arrs);

// foreach ($arrs as $arr){
//     debug($arr);
// }

header('location: /contact.php?name=');

