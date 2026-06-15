<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Colors</title>
</head>

<body style="font-family: Arial; background:#fef9c3; padding:20px;">

<div style="width:400px; margin:50px auto; text-align:center;">

<h2 style="color:#1d4ed8;">Enter Your Favorite Colors</h2>

<form action="ResultColors.php" method="POST"
style="background:white; padding:20px; border-radius:10px;
border:1px solid #ccc; text-align:left;">

    Favorite Color 1:<br>
    <input type="text" name="color1" style="width:100%; padding:5px; border-radius:6px;"><br><br>

    Favorite Color 2:<br>
    <input type="text" name="color2" style="width:100%; padding:5px; border-radius:6px;"><br><br>

    Favorite Color 3:<br>
    <input type="text" name="color3" style="width:100%; padding:5px; border-radius:6px;"><br><br>

    Favorite Color 4:<br>
    <input type="text" name="color4" style="width:100%; padding:5px; border-radius:6px;"><br><br>

    Favorite Color 5:<br>
    <input type="text" name="color5" style="width:100%; padding:5px; border-radius:6px;"><br><br>

    <div style="text-align:center;">
        <input type="submit" value="Send Colors"
        style="background:#2563eb; color:white; padding:6px 12px; border:none; border-radius:6px;">
    </div>

</form>

</div>

</body>
</html>
