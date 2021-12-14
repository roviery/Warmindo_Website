<?php
usleep(500000);
require '../functions.php';
$specifier = $_GET["specifier"];
$keyword = $_GET["keyword"];
$query = "SELECT * 
            FROM employee 
            WHERE $specifier LIKE '%$keyword%'";
$employee = query($query);
?>

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