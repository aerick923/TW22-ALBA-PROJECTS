<!DOCTYPE html>
<html>
<head>
    <title>My Vegetables</title>

    <style>
        body {
            font-family: Arial;
            background-color: #927e7e;
        }

        table {
            border-collapse: collapse;
            margin: auto;
            width: 90%;
            background: white;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #887474;
        }

        img {
            width: 100px;
            height: 100px;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>My Vegetables</h2>

<?php

$vegetables = array(
    array("name"=>"Carrot", "image"=>"images_act1/carrot.jpg", "desc"=>"Crunchy orange root vegetable", "facts"=>"Carrots are rich in vitamin A and good for eyesight."),
    array("name"=>"Broccoli", "image"=>"images_act1/broccoli.webp", "desc"=>"Green tree-like vegetable", "facts"=>"Broccoli is high in fiber and vitamins."),
    array("name"=>"Spinach", "image"=>"images_act1/spinach.webp", "desc"=>"Leafy green vegetable", "facts"=>"Spinach is rich in iron and helps build strength."),
    array("name"=>"Potato", "image"=>"images_act1/potato.jpg", "desc"=>"Starchy root vegetable", "facts"=>"Potatoes are a major source of carbohydrates."),
    array("name"=>"Tomato", "image"=>"images_act1/tomato.webp", "desc"=>"Red juicy vegetable", "facts"=>"Tomatoes are rich in vitamin C and antioxidants."),
    array("name"=>"Cabbage", "image"=>"images_act1/cabbage.webp", "desc"=>"Leafy round vegetable", "facts"=>"Cabbage is often used in salads and soups."),
    array("name"=>"Eggplant", "image"=>"images_act1/eggplant.jpg", "desc"=>"Purple soft vegetable", "facts"=>"Eggplants are used in many Asian dishes."),
    array("name"=>"Onion", "image"=>"images_act1/onion.webp", "desc"=>"Layered bulb vegetable", "facts"=>"Onions add flavor to almost all dishes."),
    array("name"=>"Pepper", "image"=>"images_act1/pepper.webp", "desc"=>"Colorful crunchy vegetable", "facts"=>"Peppers come in different colors like red, yellow, and green."),
    array("name"=>"Cucumber", "image"=>"images_act1/cucumber.webp", "desc"=>"Green refreshing vegetable", "facts"=>"Cucumbers have high water content and keep the body hydrated.")
);

usort($vegetables, function($a, $b) {
    return strcmp($a["name"], $b["name"]);
});

echo "<table>";
echo "<tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Facts</th>
      </tr>";

foreach ($vegetables as $v) {
    echo "<tr>";
    echo "<td><img src='" . $v["image"] . "'></td>";
    echo "<td>" . $v["name"] . "</td>";
    echo "<td>" . $v["desc"] . "</td>";
    echo "<td>" . $v["facts"] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>
