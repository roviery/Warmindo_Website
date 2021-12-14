<?php

require 'functions.php';
$orderItem = query("SELECT * FROM orderitem ORDER BY ODate DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/orderitem.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>

    <title>Admin Page &bullet; Order Item</title>
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
        <h1>Order Item</h1>
    </div>

    <div class="container">
        <!-- Search Bar -->
        <div class="sub-container">
            <form action="" method="post">
                <input type="text" name="search-keyword" placeholder="Search" autocomplete="off" id="keyword-oi">
                <select name="search-specifier" id="specifier-oi">
                    <option value="OID">OID</option>
                    <option value="EID">EID</option>
                    <option value="CID">CID</option>
                    <option value="OType">OType</option>
                    <option value="ODate">ODate</option>
                    <option value="OAmount">OAmount</option>
                </select>
                <img src="img/loader.gif" alt="loader" class="loader">
            </form>
            <a class="insert" href="insertOrderItem.php">Add</a>
        </div>

        <!-- Daftar Mahasiswa -->
        <div id="content-container">
            <table class="table-content">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>OID</th>
                        <th>EID</th>
                        <th>CID</th>
                        <th>OType</th>
                        <th>OTime</th>
                        <th>ODate</th>
                        <th>OAmount</th>
                        <th>Edit</th>

                    </tr>
                </thead>


                <?php
                $i = 1;
                foreach ($orderItem as $row) : ?>
                    <tr class="content">
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row["OID"]; ?></td>
                        <td><?php echo $row["EID"]; ?></td>
                        <td><?php echo $row["CID"]; ?></td>
                        <td><?php echo $row["OType"]; ?></td>
                        <td><?php echo $row["OTime"]; ?></td>
                        <td><?php echo $row["ODate"]; ?></td>
                        <td><?php echo $row["OAmount"]; ?></td>

                        <td>
                            <a class="update" href="updateOrderItem.php?id=<?= $row["OID"]; ?>">Update</a> |
                            <a class="delete" href="delete.php?pk=OID&table=orderitem&id=<?= $row["OID"]; ?>" onclick="return confirm('yakin?')">Delete</a>
                        </td>
                    </tr>
                <?php $i++;
                endforeach; ?>
            </table>
        </div>

    </div>


</body>

</html>