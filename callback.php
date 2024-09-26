<?

require 'connect.php';

require 'func.php';

$name = $_GET['name'];
$phone = $_GET['phone'];



if ($name  && $phone) {
    mysqli_query($connect, "INSERT INTO `callback` (`name`, `phone`) VALUES ('$name', '$phone')");

    mysqli_close($connect);

    header('location: /contact.php?name=');
} else {
    echo '<p style="font-size: 25px; color: red;">не правильно заполнены поля</p>';
    echo '<a style="font-size: 30px;" href="contact.php?name=">ввести заново</a>';
}
