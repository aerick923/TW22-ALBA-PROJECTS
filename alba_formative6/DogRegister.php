<?php
$conn = new mysqli("localhost", "root", "", "dog_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO dogs (name, breed, age, address, color, height, weight)
    VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";

    if ($conn->query($sql) === TRUE) {
        echo "<p class='success'>Saved successfully!</p>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Register</title>

<style>
body {
    font-family: Arial;
    background-color: #f2f2f2;
}

.container {
    width: 400px;
    margin: 60px auto;
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px gray;
}

h2 {
    text-align: center;
    color: #007bff;
}

input {
    width: 100%;
    padding: 8px;
    margin: 5px 0 15px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
}

button:hover {
    background-color: #218838;
}

a {
    display: block;
    text-align: center;
    margin-top: 15px;
}

.success {
    text-align: center;
    color: green;
}
</style>

</head>

<body>

<div class="container">

<h2>Dog Registration</h2>

<form method="POST">
    Name: <input type="text" name="name" required>
    Breed: <input type="text" name="breed" required>
    Age: <input type="text" name="age" required>
    Address: <input type="text" name="address" required>
    Color: <input type="text" name="color" required>
    Height: <input type="text" name="height" required>
    Weight: <input type="text" name="weight" required>

    <button type="submit" name="submit">Save</button>
</form>

<a href="DogView.php">View All Dogs</a>

</div>

</body>
</html>