<?php

require 'functions.php';
$orderDetail = query("SELECT * FROM orderdetail ORDER BY NID DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/orderdetail.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>

    <title>Admin Page &bullet; Order Detail</title>
</head>

<body>
    <div class="nav_parent">
        <nav>
            <div class="title">
                <h4>WARMINDO</h4>
            </div>

            <ul>
                <li><a href="index.php">Order Item</a></li>
                <li><a href="orderDetail.php">Order Detail</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="employee.php">Employee</a></li>
                <li><a href="customer.php">Customer</a></li>
            </ul>

            <div class="menu-toggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </div>

    <div class="table-title">
        <h1>Order Detail</h1>
    </div>

    <div class="container">
        <!-- Search Bar -->
        <div class="sub-container">
            <form action="" method="post">
                <input type="text" name="search-keyword" placeholder="Search" autocomplete="off" id="keyword-od">
                <select name="search-specifier" id="specifier-od">
                    <option value="NID">NID</option>
                    <option value="MID">MID</option>
                    <option value="NMenuQuantity">NMenuQuantity</option>
                    <option value="NSubtotalAmount">NSubtotalAmount</option>
                </select>
                <img src="img/loader.gif" alt="loader" class="loader">
            </form>
            <a class="insert" href="insertOrderDetail.php">Add</a>
        </div>

        <!-- Daftar Mahasiswa -->
        <div id="content-container">
            <table class="table-content">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NID</th>
                        <th>OID</th>
                        <th>MID</th>
                        <th>NMenuQuantity</th>
                        <th>NSubtotalAmount</th>
                        <th>Edit</th>

                    </tr>
                </thead>


                <?php
                $i = 1;
                foreach ($orderDetail as $row) : ?>
                    <tr class="content">
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row["NID"]; ?></td>
                        <td><?php echo $row["OID"]; ?></td>
                        <td><?php echo $row["MID"]; ?></td>
                        <td><?php echo $row["NMenuQuantity"]; ?></td>
                        <td><?php echo $row["NSubtotalAmount"]; ?></td>

                        <td>
                            <a class="update" href="updateOrderDetail.php?id=<?= $row["NID"]; ?>">Update</a> |
                            <a class="delete" href="delete.php?pk=NID&table=orderdetail&id=<?= $row["NID"]; ?>" onclick="return confirm('yakin?')">Delete</a>
                        </td>
                    </tr>
                <?php $i++;
                endforeach; ?>
            </table>
        </div>

    </div>


</body>

</html>