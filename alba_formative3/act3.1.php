<!DOCTYPE html>
<html>
<head>
    <title>BIOGRAPHY</title>
    <style>
        body { font-family: Arial; }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }
    </style>
</head>

<body>

<h2 style="text-align:center;">Phone Directory</h2>

<?php
$students = array(
    array("name"=>"ALBA, AERICK LEE", "img"=>"P3.jpg", "age"=>20, "birthday"=>"August 22, 2005", "contact"=>"09202639948"),
    array("name"=>"CORDERO, JOSE", "img"=>"P9.png", "age"=>20, "birthday"=>"February 19, 2005", "contact"=>"09195550169"),
    array("name"=>"DE GUIA, JONASH", "img"=>"P2.jpg", "age"=>20, "birthday"=>"December 13, 2005", "contact"=>"09325559331"),
    array("name"=>"LISING, ROMAR", "img"=>"P1.jpg", "age"=>19, "birthday"=>"July 24, 2006", "contact"=>"09225555625"),
    array("name"=>"REYES, RAILEY", "img"=>"P4.jpg", "age"=>20, "birthday"=>"June 15, 2005", "contact"=>"09335554397"),
    array("name"=>"DYLAN, MARCUS", "img"=>"P5.jpg", "age"=>20, "birthday"=>"June 6, 2004", "contact"=>"09195551762"),
    array("name"=>"DE JESUS, ANDREW", "img"=>"P7.jpg", "age"=>23, "birthday"=>"July 7, 2003", "contact"=>"09295555959"),
    array("name"=>"SIANGIO, ALFREDO", "img"=>"P10.jpg", "age"=>21, "birthday"=>"August 8, 2005", "contact"=>"09195553600"),
    array("name"=>"COSTINAR, KENNETH", "img"=>"P8.jpg", "age"=>22, "birthday"=>"September 9, 2004", "contact"=>"09195558904"),
    array("name"=>"FLORENDO, MOZZIEL", "img"=>"P6.png", "age"=>20, "birthday"=>"October 10, 2004", "contact"=>"09335556816")
);

// SORT
usort($students, function($a, $b){
    return strcmp($a["name"], $b["name"]);
});
?>

<table>
<tr>
    <th>no.</th>
    <th>name</th>
    <th>image</th>
    <th>age</th>
    <th>birthday</th>
    <th>contact number</th>
</tr>

<?php
$i = 1;
foreach($students as $s){
    echo "<tr>";
    echo "<td>".$i++."</td>";
    echo "<td>".$s["name"]."</td>";

    // ✅ FIXED IMAGE DISPLAY
    echo "<td><img src='".$s["img"]."'></td>";

    echo "<td>".$s["age"]."</td>";
    echo "<td>".$s["birthday"]."</td>";
    echo "<td>".$s["contact"]."</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>