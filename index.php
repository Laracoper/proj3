<?

require 'connect.php';
require 'func.php';




$peoples = mysqli_query($connect, "SELECT * FROM `peoples`");
$peoples = mysqli_fetch_all($peoples);



?>

<!DOCTYPE html>
<html lang="en">

<? require 'inc/head.php' ?>

<body>
    <div class="wrapper">
        <header>
            <? require 'inc/header.php' ?>
        </header>
        <main class="container">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#create">
                добавить новую карточку
            </button>

            <!-- Modal -->
            <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">форма добавления</h1>

                        </div>
                        <div class="modal-body">
                            <form action="create.php" class="form-group">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="name" name="name">

                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="city" name="city">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="country" name="country">
                                </div>
                                <button type="submit" class="btn btn-primary">добавить</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">закрыть</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="cards d-flex flex-wrap justify-content-center">
                <? if (!empty($peoples)) { ?>
                    <? foreach ($peoples as $people) { ?>
                        <div class="card mx-1 my-1 bg-light bg-gradient" style="width: 18rem;">
                            <div class="card-body d-flex flex-column">
                                <p class="card-text">имя: <?= $people[1] ?></p>
                                <p class="card-text">почта: <?= $people[2] ?></p>
                                <p class="card-text">город: <?= $people[3] ?></p>
                                <p class="card-text flex-grow-1">страна: <?= $people[4] ?></p>
                                <a class="btn btn-outline-success my-2" href="/update.php?id=<?= $people[0] ?>" class="card-link">обновить</a>
                                <a class="btn btn-outline-danger" href="/delete.php?id=<?= $people[0] ?>" class="card-link">удалить</a>
                            </div>
                        </div>
                    <? } ?>

                <? } else { ?>

                    <div class="alert alert-warning w-100">
                        <p>пока нет карточек</p>
                    </div>
                <? } ?>
            </div>
        </main>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>