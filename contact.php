<?

require 'connect.php';
require 'func.php';


// $peoples = mysqli_query($connect, "SELECT * FROM `peoples`");
// $peoples = mysqli_fetch_all($peoples);

$name = $_GET['name'];
$arrs = mysqli_query($connect, "SELECT * FROM `callback` WHERE `name` = '$name'");

$arrs = mysqli_fetch_all($arrs);

?>

<!DOCTYPE html>
<html lang="en">

<? require 'inc/head.php' ?>

<body>
    <!-- <style>
        th {
            border: 1px solid red;
            border-radius: 5px;
            padding: 10px;
        }

        td {
            border: 1px solid blue;
            border-radius: 5px;
            padding: 10px;
        }
    </style> -->
    <div class="wrapper">
        <header>
            <? require 'inc/header.php' ?>
        </header>
        <main class="container">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success my-4" data-bs-toggle="modal" data-bs-target="#callback">
                отправить номер телефона
            </button>

            <!-- Modal -->
            <div class="modal fade" id="callback" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Заполните форму для связи</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="form-group" action="callback.php">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Ваше имя</label>
                                    <input type="text" class="form-control" id="name" name="name">

                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Номер телефона</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder=" введите 9 цифр">

                                </div>
                                <button class="btn btn-success" type="submit">отправить</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <p>найти телефон по имени</p>
            <form action="">
                <input class="form-control mb-3 w-25"  type="text" name="name">
                <!-- <input type="hidden" name="phone"> -->
                <button type="submit" class="mb-5 btn btn-outline-success">найти</button>
            </form>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                <?
            if (!empty($arrs)) { ?>

                <table class="table table-hover table-warning">
                    <tr>
                        <th>name</th>
                        <th>phone</th>
                    </tr>
                    <? foreach ($arrs as $arr) { ?>
                        <tr>
                            <td>
                                <?= $arr[1] ?>
                            </td>
                            <td>
                                <?= $arr[2] ?>
                            </td>
                        </tr>
                    <? } ?>
                </table>

            <?
            }else {?>
            <div class="alert alert-warning">
                <p>тиких пользователей не найдено</p>
            </div>
            
            <?}
            ?>
                </div>
            </div>



        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>