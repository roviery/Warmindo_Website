<?php
usleep(500000);
require '../functions.php';
$specifier = $_GET["specifier"];
$keyword = $_GET["keyword"];
$query = "SELECT * 
            FROM orderitem 
            WHERE $specifier LIKE '%$keyword%'";
$orderItem = query($query);
?>

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