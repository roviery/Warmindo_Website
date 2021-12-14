<?php

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];
$orderItem = query("SELECT * FROM menu WHERE MID = $id")[0];

// cek tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    if (updateMenu($_POST) > 0) {
        echo "
                <script>
                    alert('Data berhasil diupdate!');
                    document.location.href = 'menu.php';
                </script>";
    } else {
        var_dump(mysqli_error($db));
        echo "
                <script>
                    alert('Data gagal diupdate!');
                    document.location.href = 'menu.php';
                </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update &bullet; Menu</title>
    <link rel="stylesheet" href="style/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container" id="m-container">
        <h1>Update Menu</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $orderItem["MID"]; ?>">
            <ul>
                <li class="input-field">
                    <label for="type">Type</label>
                    <select name="type" id="type-order">
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                        <option value="Snack">Snack</option>
                    </select>
                </li>
                <li class="input-field">
                    <label for="name">MName</label>
                    <input type="text" name="name" id="name" value="<?= $orderItem["MName"]; ?>">
                </li>
                <li class="input-field">
                    <label for="price">MPrice</label>
                    <input type="text" name="price" id="price" value="<?= $orderItem["MPrice"]; ?>">
                </li>
                <li class="input-field">
                    <p></p>
                    <button type="submit" name="submit">Submit</button>
                </li>
            </ul>
        </form>
    </div>

    <script>
        document.getElementById('m-container').style.backgroundColor = "#00903e";
    </script>
</body>

</html>