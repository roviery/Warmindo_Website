<?php
usleep(500000);
require '../functions.php';
$specifier = $_GET["specifier"];
$keyword = $_GET["keyword"];
$query = "SELECT * 
            FROM customer 
            WHERE $specifier LIKE '%$keyword%'";
$customer = query($query);
?>

<table class="table-content">
    <thead>
        <tr>
            <th>No.</th>
            <th>CID</th>
            <th>CName</th>
            <th>CPhoneNumber</th>
            <th>CAddress</th>
            <th>Edit</th>
        </tr>
    </thead>


    <?php
    $i = 1;
    foreach ($customer as $row) : ?>
        <tr class="content">
            <td><?php echo $i; ?></td>
            <td><?php echo $row["CID"]; ?></td>
            <td><?php echo $row["CName"]; ?></td>
            <td><?php echo $row["CPhoneNumber"]; ?></td>
            <td><?php echo $row["CAddress"]; ?></td>

            <td>
                <a class="update" href="updateMenu.php?id=<?= $row["CID"]; ?>">Update</a> |
                <a class="delete" href="delete.php?pk=CID&table=customer&id=<?= $row["CID"]; ?>" onclick="return confirm('yakin?')">Delete</a>
            </td>
        </tr>
    <?php $i++;
    endforeach; ?>
</table>