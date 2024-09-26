<?

require 'connect.php';


$id = $_GET['id'];
$people = mysqli_query($connect, "SELECT * FROM `peoples` WHERE `id` = '$id'");
$people = mysqli_fetch_assoc($people);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <? require 'inc/head.php' ?>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <h4>обновить карточку</h4>
            <form action="/update-page.php" class="form-control">
                <input type="hidden" name="id" value="<?=$people['id']?>">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="name" name="name" value="<?=$people['name']?>">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="email" name="email" value="<?=$people['email']?>">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="city" name="city" value="<?=$people['city']?>">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="country" name="country" value="<?=$people['country']?>">
                </div>
                <button type="submit" class="btn btn-primary">обновить</button>
                
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>