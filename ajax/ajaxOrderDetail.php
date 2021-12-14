<?php
usleep(500000);
require '../functions.php';
$specifier = $_GET["specifier"];
$keyword = $_GET["keyword"];
$query = "SELECT * 
            FROM orderdetail 
            WHERE $specifier LIKE '%$keyword%'";
$orderDetail = query($query);
?>

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