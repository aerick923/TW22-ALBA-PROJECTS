<?php
$conn = new mysqli("localhost", "root", "", "dog_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dogs";
$result = $conn->query($sql);

$counter = 1;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Records</title>

<style>
body {
    font-family: Arial;
    background-color: #f2f2f2;
}

.container {
    width: 90%;
    margin: 50px auto;
}

h2 {
    text-align: center;
    color: #007bff;
}


.card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
}

.card {
    background: white;
    width: 280px;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0px 0px 8px gray;
    border-left: 5px solid #007bff;
}

.card h3 {
    margin-top: 0;
    color: #333;
}

.card p {
    margin: 5px 0;
}

a {
    display: block;
    text-align: center;
    margin-top: 20px;
}
</style>

</head>

<body>

<div class="container">

<h2>Dog Records</h2>

<div class="card-container">

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        echo "<div class='card'>";
        echo "<h3>Dog ".$counter."</h3>";

        echo "<p><strong>Name:</strong> ".$row['name']."</p>";
        echo "<p><strong>Breed:</strong> ".$row['breed']."</p>";
        echo "<p><strong>Age:</strong> ".$row['age']."</p>";
        echo "<p><strong>Address:</strong> ".$row['address']."</p>";
        echo "<p><strong>Color:</strong> ".$row['color']."</p>";
        echo "<p><strong>Height:</strong> ".$row['height']."</p>";
        echo "<p><strong>Weight:</strong> ".$row['weight']."</p>";

        echo "</div>";

        $counter++;
    }
} else {
    echo "<p style='text-align:center;'>No records found</p>";
}
?>

</div>

<a href="DogRegister.php">Back to Register</a>

</div>

</body>
</html>
