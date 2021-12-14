<?php

require 'functions.php';

// cek tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    if (insertOrder($_POST) > 0) {
        echo "
                <script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'index.php';
                </script>";
    } else {
        // die(mysqli_error($db));
        echo    "
                <script>
                    alert('Data gagal ditambahkan!');
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
    <title>Insert &bullet; Order Item</title>
    <link rel="stylesheet" href="style/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Insert Order Item</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <ul>
                <li class="input-field">
                    <label for="oid">OID</label>
                    <input type="text" name="oid" id="oid">
                </li>
                <li class="input-field">
                    <label for="eid">EID</label>
                    <input type="text" name="eid" id="eid">
                </li>
                <li class="input-field">
                    <label for="cid">CID</label>
                    <input type="text" name="cid" id="cid">
                </li>
                <li class="input-field">
                    <label for="type">Type</label>
                    <select name="type" id="type-order">
                        <option value="Dine-in">Dine-in</option>
                        <option value="Take Away">Take Away</option>
                        <option value="Delivery">Delivery</option>
                    </select>
                </li>
                <!-- <li class="input-field">
                    <label for="time">Time</label>
                    <input type="time" step="1" name="time" id="time">
                </li> -->
                <li class="input-field">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date">
                </li>
                <li class="input-field">
                    <label for="amount">Amount</label>
                    <input type="text" name="amount" id="amount">
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