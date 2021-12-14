<?php

require 'functions.php';

$pk = $_GET["pk"];
$table = $_GET["table"];
$id = $_GET["id"];

if (delete($table, $pk, $id) > 0) {
    if ($table === "orderitem"){
        echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'index.php';
            </script>";
    }
    else if ($table === "orderdetail"){
        echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'orderdetail.php';
            </script>";
    }
    else if ($table === "menu"){
        echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'menu.php';
            </script>";
    }
    else if ($table === "employee"){
        echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'employee.php';
            </script>";
    }
    else if ($table === "customer"){
        echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'customer.php';
            </script>";
    }
} else {
    // var_dump(mysqli_error($db));
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'index.php';
        </script>";
}
