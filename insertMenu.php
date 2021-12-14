<?php

require 'functions.php';

// cek tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    if (insertMenu($_POST) > 0) {
        echo "
                <script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'menu.php';
                </script>";
    } else {
        // die(mysqli_error($db));
        echo    "
                <script>
                    alert('Data gagal ditambahkan!');
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
    <title>Insert &bullet; Menu</title>
    <link rel="stylesheet" href="style/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container" id="m-container">
        <h1>Insert Menu</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <ul>
                <li class="input-field">
                    <label for="mid">MID</label>
                    <input type="text" name="mid" id="mid">
                </li>
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
                    <input type="text" name="name" id="name">
                </li>
                <li class="input-field">
                    <label for="price">MPrice</label>
                    <input type="text" name="price" id="price">
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