<?php
    include 'db.php';

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $category = $_POST['category'];
        $name = $_POST['name'];
        $serial_number = $_POST['serial_number'];
        $price = (float) $_POST['price'];
        
        if (!empty($category) && !empty($name) && !empty($serial_number) && !isset($price)) {
            $sql = "INSERT INTO equipment (category, name, serial_number, price) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssd", $category, $name, $serial_number, $price);

            if ($stmt->execute() === TRUE) {
                echo "New equipment added successfully";
            } else {
                echo "Failed to add new equipment";
            }
        }
        else {
            echo "Please fill in all the required fields";
        }
    }
?>





<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="styles.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Equipment</title>
</head>
<body>
    <h2>Add New Equipment</h2>

    <form method="POST" action="add.php">
        <label>Category:</label><br>
        <input type="text" name="category"><br>
        <label>Name:</label><br>
        <input type="text" name="name"><br>
        <label>Serial Number:</label><br>
        <input type="text" name="serial_number"><br>
        <label>Price:</label><br>
        <input type="number" name="price"><br><br>
        <input type="submit" value="Add Equipment">
    </form>

    <a href="index.php">Back to Equipment List</a>
</body>
</html>