<?php

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];
$orderItem = query("SELECT * FROM orderdetail WHERE NID = $id")[0];

// cek tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    if (updateOrderDetail($_POST) > 0) {
        echo "
                <script>
                    alert('Data berhasil diupdate!');
                    document.location.href = 'orderdetail.php';
                </script>";
    } else {
        var_dump(mysqli_error($db));
        echo "
                <script>
                    alert('Data gagal diupdate!');
                    document.location.href = 'orderdetail.php';
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
    <title>Update &bullet; Order Detail</title>
    <link rel="stylesheet" href="style/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container" id="od-container">
        <h1>Update Order Detail</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $orderItem["NID"]; ?>">
            <ul>
                <li class="input-field">
                    <label for="oid">OID</label>
                    <input type="text" name="oid" id="oid" value="<?= $orderItem["OID"]; ?>">
                </li>
                <li class="input-field">
                    <label for="mid">MID</label>
                    <input type="text" name="mid" id="mid" value="<?= $orderItem["MID"]; ?>">
                </li>
                <li class="input-field">
                    <label for="quantity">NMenuQuantity</label>
                    <input type="text" name="quantity" id="quantity" value="<?= $orderItem["NMenuQuantity"]; ?>">
                </li>
                <li class="input-field">
                    <label for="subtotal">NSubtotalAmount</label>
                    <input type="text" name="subtotal" id="subtotal" value="<?= $orderItem["NSubtotalAmount"]; ?>">
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