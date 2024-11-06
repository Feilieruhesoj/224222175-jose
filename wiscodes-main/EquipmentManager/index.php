<?php
include 'db.php';

$sql = "SELECT * FROM equipment";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="styles.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Equipment Management</title>
</head>
<body>
    <h2>Equipment Management</h2>

    <table border="1">
        <tr>
            <th>Category</th>
            <th>Name</th>
            <th>Serial Number</th>
            <th>Price</th>
            <th>Action</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['category'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['serial_number'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
                echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No equipment</td></tr>";
        }
        ?>

    </table>
    <br>
    <a href="add.php">Add New Equipment</a>
</body>
</html>