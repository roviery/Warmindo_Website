<?php
usleep(500000);
require '../functions.php';
$specifier = $_GET["specifier"];
$keyword = $_GET["keyword"];
$query = "SELECT * 
            FROM menu 
            WHERE $specifier LIKE '%$keyword%'";
$menu = query($query);
?>

<table class="table-content">
    <thead>
        <tr>
            <th>No.</th>
            <th>MID</th>
            <th>MType</th>
            <th>MName</th>
            <th>MPrice</th>
            <th>Edit</th>

        </tr>
    </thead>


    <?php
    $i = 1;
    foreach ($menu as $row) : ?>
        <tr class="content">
            <td><?php echo $i; ?></td>
            <td><?php echo $row["MID"]; ?></td>
            <td><?php echo $row["MType"]; ?></td>
            <td><?php echo $row["MName"]; ?></td>
            <td><?php echo $row["MPrice"]; ?></td>

            <td>
                <a class="update" href="updateMenu.php?id=<?= $row["MID"]; ?>">Update</a> |
                <a class="delete" href="delete.php?pk=MID&table=menu&id=<?= $row["MID"]; ?>" onclick="return confirm('yakin?')">Delete</a>
            </td>
        </tr>
    <?php $i++;
    endforeach; ?>
</table>