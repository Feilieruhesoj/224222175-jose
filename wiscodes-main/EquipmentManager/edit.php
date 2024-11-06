<?php
    include "db.php"; 

    if (isset($_GET['id'])){
        $id =$_GET['id'];

        $sql= "SELECT * FROM equipment WHERE  id=$id";
        $result=$conn->query($sql);

        if ($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $category =$row ['category'];
            $name= $row ['name'];
            $serial_number = $row ['serial_number'];
            $price = (float) $row['price'];
        }
        else {
            echo "No equipment found with that id";
        }
    }

   
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $category=$_POST['category'];
    $name=$_POST['name'];
    $serial_number=$_POST['serial_number'];
    $price=(float) $_POST['price'];
    $id=$_POST['id'];


    if (!empty($category) && !empty($name) && !empty($serial_number) && !isset($price)) {
        $sql="UPDATE equipment SET category=?, name=?, serial_number=?, price=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssdf", $category, $name, $serial_number, $price, $id);

        if ($stmt->execute() === TRUE) {
            echo "Equipment successfully updated.";
        } else {
            echo "Error editing record." . $sql . "<br>" . $conn->error;
        }
    } else{
        echo "Please fill in all fields.";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="styles.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Equipment</title>
</head>
<body>
<h2>Edit Equipment</h2>
    <form method="post" action="edit.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Category: <input type="text" name="category" value="<?php echo $category; ?>"><br><br>
        Name: <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
        Serial Number: <input type="text" name="serial_number" value="<?php echo $serial_number; ?>"><br><br>
        Price: <input type="number" name="price" value="<?php echo $price; ?>"><br><br>
        <input type="submit" value="Update Equipment">
    </form>
    <a href="index.php">Back to Equipment List</a>
</body>
</html>