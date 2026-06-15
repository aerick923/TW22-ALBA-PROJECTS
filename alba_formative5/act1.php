<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information Form</title>
</head>

<body style="font-family: Arial; background:#fef9c3; padding:20px;">

<div style="width:400px; margin:50px auto; text-align:center;">

<h2 style="color:#1d4ed8;">Personal Information Form</h2>

<form method="POST" action=""
style="background:#ffffff; padding:20px; border:1px solid #ccc;
border-radius:10px; text-align:left;">

    First Name:<br>
    <input type="text" name="fname"
    style="width:100%; border-radius:6px; padding:5px; border:1px solid #999;"><br><br>

    Middle Name:<br>
    <input type="text" name="mname"
    style="width:100%; border-radius:6px; padding:5px; border:1px solid #999;"><br><br>

    Last Name:<br>
    <input type="text" name="lname"
    style="width:100%; border-radius:6px; padding:5px; border:1px solid #999;"><br><br>

    Date of Birth:<br>
    <input type="text" name="dob"
    style="width:100%; border-radius:6px; padding:5px; border:1px solid #999;"><br><br>

    Address:<br>
    <input type="text" name="address"
    style="width:100%; border-radius:6px; padding:5px; border:1px solid #999;"><br><br>

    <div style="text-align:center;">
        <input type="submit" name="btn_post" value="Submit (POST)"
        style="background:#ef4444; color:white; padding:6px 12px;
        border-radius:6px; border:none;"><br><br>

        <input type="submit" name="btn_get" value="Submit (GET)"
        style="background:#2563eb; color:white; padding:6px 12px;
        border-radius:6px; border:none;">
    </div>

</form>

<hr>

<h2 style="color:#1d4ed8;">Submitted Data</h2>

<div style="text-align:left; background:#ffffff; padding:15px;
border:1px solid #ccc; border-radius:10px;">

<?php

function clean($data) {
    return htmlspecialchars($data ?? '');
}

if (isset($_POST['btn_post'])) {

    echo "<b>Using POST:</b><br>";
    echo "First Name: " . clean($_POST['fname']) . "<br>";
    echo "Middle Name: " . clean($_POST['mname']) . "<br>";
    echo "Last Name: " . clean($_POST['lname']) . "<br>";
    echo "Date of Birth: " . clean($_POST['dob']) . "<br>";
    echo "Address: " . clean($_POST['address']) . "<br>";

}

else if (isset($_POST['btn_get'])) {

    $url = "?fname=" . urlencode($_POST['fname']) .
           "&mname=" . urlencode($_POST['mname']) .
           "&lname=" . urlencode($_POST['lname']) .
           "&dob=" . urlencode($_POST['dob']) .
           "&address=" . urlencode($_POST['address']);

    header("Location: " . $url);
    exit();
}

else if (isset($_GET['fname'])) {

    echo "<b>Using GET:</b><br>";
    echo "First Name: " . clean($_GET['fname']) . "<br>";
    echo "Middle Name: " . clean($_GET['mname']) . "<br>";
    echo "Last Name: " . clean($_GET['lname']) . "<br>";
    echo "Date of Birth: " . clean($_GET['dob']) . "<br>";
    echo "Address: " . clean($_GET['address']) . "<br>";

}

?>

</div>

</div>

</body>
</html>