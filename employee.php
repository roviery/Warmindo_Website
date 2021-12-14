<?php

require 'functions.php';
$employee = query("SELECT * FROM employee ORDER BY EID DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/employee.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>

    <title>Admin Page &bullet; Employee</title>
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
        <h1>Employee</h1>
    </div>

    <div class="container">
        <!-- Search Bar -->
        <div class="sub-container">
            <form action="" method="post">
                <input type="text" name="search-keyword" placeholder="Search" autocomplete="off" id="keyword-e">
                <select name="search-specifier" id="specifier-e">
                    <option value="EID">EID</option>
                    <option value="EName">EName</option>
                    <option value="EAddress">EAddress</option>
                    <option value="EPhoneNumber">EPhoneNumber</option>
                    <option value="ESalary">ESalary</option>
                    <option value="EDOB">EDOB</option>
                </select>
                <img src="img/loader.gif" alt="loader" class="loader">
            </form>
            <a class="insert" href="insertEmployee.php">Add</a>
        </div>

        <!-- Daftar Employee -->
        <div id="content-container">
            <table class="table-content">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>EID</th>
                        <th>EName</th>
                        <th>EAddress</th>
                        <th>EPhoneNumber</th>
                        <th>ESalary</th>
                        <th>EDOB</th>
                        <th>Edit</th>

                    </tr>
                </thead>


                <?php
                $i = 1;
                foreach ($employee as $row) : ?>
                    <tr class="content">
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row["EID"]; ?></td>
                        <td><?php echo $row["EName"]; ?></td>
                        <td><?php echo $row["EAddress"]; ?></td>
                        <td><?php echo $row["EPhoneNumber"]; ?></td>
                        <td><?php echo $row["ESalary"]; ?></td>
                        <td><?php echo $row["EDOB"]; ?></td>

                        <td>
                            <a class="update" href="updateEmployee.php?id=<?= $row["EID"]; ?>">Update</a> |
                            <a class="delete" href="delete.php?pk=EID&table=employee&id=<?= $row["EID"]; ?>" onclick="return confirm('yakin?')">Delete</a>
                        </td>
                    </tr>
                <?php $i++;
                endforeach; ?>
            </table>
        </div>

    </div>


</body>

</html>