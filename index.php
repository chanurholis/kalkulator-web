<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$first_number = 0;
$second_number = 0;
$operations = [
    "+", "-", "*", "/"
];

$result = null;

if (isset($_POST['submit'])) {
    $result = null;

    if (is_numeric($_POST['first_number']) && is_numeric($_POST['second_number'])) {
        $first_number  = $_POST['first_number'];
        $second_number = $_POST['second_number'];
        $operation     = $_POST['operation'];

        $_SESSION['first_number']  = $first_number;
        $_SESSION['second_number'] = $second_number;
        $_SESSION['operation']     = $operation;

        switch ($operation) {
            case '+':
                $result = $first_number + $second_number;
                break;
            case '-':
                $result = $first_number - $second_number;
                break;
            case '*':
                $result = $first_number * $second_number;
                break;
            case '/':
                $result = ($second_number != 0) ? round($first_number / $second_number) : "~";
                break;
            default:
                $result = "Angka";
                break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="">Kalkulator</a>
    </nav>

    <div class="container mt-4">
        <div class="form-group">
            <label for="bilangan-pertama"><strong>Hasil</strong></label>
            <input type="text" class="form-control" disabled id="bilangan-kedua" value="<?= $result ?>" autofocus>
        </div>

        <br>
        <br>

        <form action="" method="post">
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="bilangan-pertama">Bilangan Pertama</label>
                        <input type="number" name="first_number" value="<?= $_SESSION['first_number'] ?>" class="form-control" id="bilangan-kedua" placeholder="Bilangan Pertama..." autofocus>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="bilangan-kedua">Operasi</label>
                        <select name="operation" id="" class="form-control">
                            <?php foreach ($operations as $item) : ?>
                                <option value="<?= $item ?>" <?php ($_SESSION['operation'] == $item) ? "selected" : "" ?>><?= $item ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="bilangan-kedua">Bilangan Kedua</label>
                        <input type="number" name="second_number" value="<?= $_SESSION['second_number'] ?>" class="form-control" id="bilangan-kedua" placeholder="Bilangan Kedua...">
                    </div>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Jalankan</button>
        </form>
    </div>

</body>

</html>