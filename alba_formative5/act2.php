<?php

if (!isset($_COOKIE['start'])) {
    setcookie("start", time(), time() + 60);
    $start = time();
} else {
    $start = $_COOKIE['start'];
}

$elapsed = time() - $start;

setcookie("fname", "Aerick", time() + 60);
setcookie("mname", "Lee", time() + 60);
setcookie("lname", "Alba", time() + 60);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Activity</title>
</head>

<body style="font-family: Arial; background:#fef9c3; padding:20px;">

<div style="width:400px; margin:50px auto; text-align:center;">

<h2 style="color:#1d4ed8;">Cookie Activity</h2>

<div style="background:white; padding:20px; border-radius:10px;
border:1px solid #ccc; text-align:left;">

<b>Cookie Status:</b><br><br>

<?php


if ($elapsed >= 10) {
    echo "First Name: Aerick<br>";
} else {
    echo "First Name: Not yet available (wait 10 sec)<br>";
}


if ($elapsed >= 20) {
    echo "Middle Name: Lee<br>";
} else {
    echo "Middle Name: Not yet available (wait 20 sec)<br>";
}


if ($elapsed >= 30) {
    echo "Last Name: Alba<br>";
} else {
    echo "Last Name: Not yet available (wait 30 sec)<br>";
}

?>

<br>
<button onclick="location.reload()"
style="padding:6px 12px; background:#2563eb;
color:white; border:none; border-radius:6px;">
Refresh Page
</button>

</div>

</div>

</body>
</html>