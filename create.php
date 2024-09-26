<?

require 'connect.php';
require 'func.php';

$name = $_GET['name'];
$email = $_GET['email'];
$city = $_GET['city'];
$country = $_GET['country'];

$err =[];
if ($name = '' ) {
    // echo '<p style="color: red; font-size: 25px;">не правильно заполнены поля</p>';
    // echo '<a style="display: block; font-size: 30px" href="/">заполнить</a>';
    echo $err['name'] = 'errrrorrrrr';
    
}


    mysqli_query($connect, "INSERT INTO `peoples`(`name`,`email`,`city`,`country`) VALUES ('$name','$email','$city','$country')");

    mysqli_close($connect);
    header('location: /');


// && $city = '' && $email = '' && $country = ''



// debug($_GET);

// header('location: /');