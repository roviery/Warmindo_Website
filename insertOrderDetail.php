<?php

require 'functions.php';

// cek tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    if (insertOrderDetail($_POST) > 0) {
        echo "
                <script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'orderDetail.php';
                </script>";
    } else {
        // die(mysqli_error($db));
        echo    "
                <script>
                    alert('Data gagal ditambahkan!');
                    document.location.href = 'orderDetail.php';
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
    <title>Insert &bullet; Order Detail</title>
    <link rel="stylesheet" href="style/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container" id="od-container">
        <h1>Insert Order Detail</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <ul>
                <li class="input-field">
                    <label for="nid">NID</label>
                    <input type="text" name="nid" id="nid">
                </li>
                <li class="input-field">
                    <label for="oid">OID</label>
                    <input type="text" name="oid" id="oid">
                </li>
                <li class="input-field">
                    <label for="mid">MID</label>
                    <input type="text" name="mid" id="mid">
                </li>
                <li class="input-field">
                    <label for="quantity">NMenuQuantity</label>
                    <input type="text" name="quantity" id="quantity">
                </li>
                <li class="input-field">
                    <label for="subtotal">NSubtotalAmount</label>
                    <input type="text" name="subtotal" id="subtotal">
                </li>
                <li class="input-field">
                    <p></p>
                    <button type="submit" name="submit">Submit</button>
                </li>
            </ul>
        </form>
    </div>

    <script>
        document.getElementById('od-container').style.backgroundColor = "#c95e29";
    </script>
</body>

</html>