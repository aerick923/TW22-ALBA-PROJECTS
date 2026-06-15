<?php
session_start();

$_SESSION['color1'] = $_POST['color1'] ?? '';
$_SESSION['color2'] = $_POST['color2'] ?? '';
$_SESSION['color3'] = $_POST['color3'] ?? '';
$_SESSION['color4'] = $_POST['color4'] ?? '';
$_SESSION['color5'] = $_POST['color5'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result Colors</title>
</head>

<body style="font-family: Arial; background:#fef9c3; padding:20px;">

<div style="width:400px; margin:50px auto; text-align:center;">

<h2 style="color:#1d4ed8;">Your Favorite Colors</h2>

<div style="background:white; padding:20px; border-radius:10px;
border:1px solid #ccc; text-align:left;">

<?php

echo "My Favorite Color 1: " . $_SESSION['color1'] . "<br>";
echo "My Favorite Color 2: " . $_SESSION['color2'] . "<br>";
echo "My Favorite Color 3: " . $_SESSION['color3'] . "<br>";
echo "My Favorite Color 4: " . $_SESSION['color4'] . "<br>";
echo "My Favorite Color 5: " . $_SESSION['color5'] . "<br>";

?>

<br>
<a href="FavoriteColor.php"
style="display:inline-block; background:#ef4444; color:white; padding:6px 12px; border-radius:6px; text-decoration:none;">
Go Back
</a>

</div>

</div>

</body>
</html>