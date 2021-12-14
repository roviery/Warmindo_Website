<?php

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];
$orderItem = query("SELECT * FROM orderitem WHERE OID = $id")[0];

// cek tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    if (updateOrderItem($_POST) > 0) {
        echo "
                <script>
                    alert('Data berhasil diupdate!');
                    document.location.href = 'index.php';
                </script>";
    } else {
        var_dump(mysqli_error($db));
        echo "
                <script>
                    alert('Data gagal diupdate!');
                    document.location.href = 'index.php';
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
    <title>Update &bullet; Order Item</title>
    <link rel="stylesheet" href="style/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>

<body>
<div class="container">
        <h1>Update Order Item</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $orderItem["OID"]; ?>">
            <ul>
                <li class="input-field">
                    <label for="eid">EID</label>
                    <input type="text" name="eid" id="eid" value="<?= $orderItem["EID"]; ?>">
                </li>
                <li class="input-field">
                    <label for="cid">CID</label>
                    <input type="text" name="cid" id="cid" value="<?= $orderItem["CID"]; ?>">
                </li>
                <li class="input-field">
                    <label for="type">Type</label>
                    <select name="type" id="type-order" value="<?= $orderItem["OType"]; ?>">
                        <option value="Dine-in">Dine-in</option>
                        <option value="Take Away">Take Away</option>
                        <option value="Delivery">Delivery</option>
                    </select>
                </li>
                <li class="input-field">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" value="<?= $orderItem["ODate"]; ?>">
                </li>
                <li class="input-field">
                    <label for="amount">Amount</label>
                    <input type="text" name="amount" id="amount" value="<?= $orderItem["OAmount"]; ?>">
                </li>
                <li class="input-field">
                    <p></p>
                    <button type="submit" name="submit">Submit</button>
                </li>
            </ul>
        </form>
    </div>

</body>

</html>