<!DOCTYPE html>
<html>
<head>
    <style>
        table { border-collapse: collapse; }
        td { width: 40px; height: 40px; text-align: center; border: 1px solid black; font-weight: bold; }
        .yellow { background-color: lightblue; }
        .red { background-color: lightgreen; }

    </style>
</head>
<body>

    <h2>Multiplication Table</h2>
    <table>
        <?php
        for ($row = 0; $row <= 10; $row++) {
            echo "<tr>";
            for ($col = 0; $col <= 10; $col++) {
                $result = $row * $col;
                
                $colorClass = ($row + $col) % 2 == 0 ? "yellow" : "red";
                
                echo "<td class='$colorClass'>$result</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>