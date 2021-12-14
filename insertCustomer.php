<?php

require 'functions.php';

// cek tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    if (insertCustomer($_POST) > 0) {
        echo "
                <script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'customer.php';
                </script>";
    } else {
        die(mysqli_error($db));
        echo    "
                <script>
                    alert('Data gagal ditambahkan!');
                    document.location.href = 'customer.php';
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
    <title>Insert &bullet; Customer</title>
    <link rel="stylesheet" href="style/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container" id="c-container">
        <h1>Insert Customer</h1>
        <form action="" method="post">
            <ul>
                <li class="input-field">
                    <label for="cid">CID</label>
                    <input type="text" name="cid" id="cid">
                </li>
                <li class="input-field">
                    <label for="name">CName</label>
                    <input type="text" name="name" id="name">
                </li>
                <li class="input-field">
                    <label for="phoneNumber">CPhoneNumber</label>
                    <input type="text" name="phoneNumber" id="phoneNumber">
                </li>
                <li class="input-field">
                    <label for="address">CAddress</label>
                    <input type="text" name="address" id="address">
                </li>
                <li class="input-field">
                    <p></p>
                    <button type="submit" name="submit">Submit</button>
                </li>
            </ul>
        </form>
    </div>

    <script>
        document.getElementById('c-container').style.backgroundColor = "#0136aa";
    </script>
</body>

</html>