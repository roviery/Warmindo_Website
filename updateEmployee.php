<?php

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];
$orderItem = query("SELECT * FROM employee WHERE EID = $id")[0];

// cek tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    if (updateEmployee($_POST) > 0) {
        echo "
                <script>
                    alert('Data berhasil diupdate!');
                    document.location.href = 'employee.php';
                </script>";
    } else {
        var_dump(mysqli_error($db));
        echo "
                <script>
                    alert('Data gagal diupdate!');
                    document.location.href = 'employee.php';
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
    <title>Update &bullet; Employee</title>
    <link rel="stylesheet" href="style/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container" id="e-container">
        <h1>Update Employee</h1>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $orderItem["EID"]; ?>">
            <ul>
                <li class="input-field">
                    <label for="name">EName</label>
                    <input type="text" name="name" id="name" value="<?= $orderItem["EName"]; ?>">
                </li>
                <li class="input-field">
                    <label for="address">EAddress</label>
                    <input type="text" name="address" id="address" value="<?= $orderItem["EAddress"]; ?>">
                </li>
                <li class="input-field">
                    <label for="phoneNumber">EPhoneNumber</label>
                    <input type="text" name="phoneNumber" id="phoneNumber" value="<?= $orderItem["EPhoneNumber"]; ?>">
                </li>
                <li class="input-field">
                    <label for="salary">ESalary</label>
                    <input type="text" name="salary" id="salary" value="<?= $orderItem["ESalary"]; ?>">
                </li>
                <li class="input-field">
                    <label for="dob">EDOB</label>
                    <input type="date" name="dob" id="dob" value="<?= $orderItem["EDOB"]; ?>">
                </li>
                <li class="input-field">
                    <p></p>
                    <button type="submit" name="submit">Submit</button>
                </li>
            </ul>
        </form>
    </div>

    <script>
        document.getElementById('e-container').style.backgroundColor = "#00258b";
    </script>
</body>

</html>