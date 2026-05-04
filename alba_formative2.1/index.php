<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Two-Digit Combinations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            display: flex;
            justify-content: center;
            padding: 40px;
        }

        .box {
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            max-width: 600px;
        }

        h2 {
            text-align: center;
            margin-bottom: 15px;
        }

        .numbers {
            display: grid;
            grid-template-columns: repeat(10, 1fr);
            gap: 8px;
            text-align: center;
        }

        .number {
            background-color: #e9eef3;
            padding: 6px 0;
            border-radius: 4px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Two-Digit Decimal Combinations</h2>

    <div class="numbers">
        <?php
        for ($i = 0; $i <= 99; $i++) {
            echo '<div class="number">' . str_pad($i, 2, "0", STR_PAD_LEFT) . '</div>';
        }
        ?>
    </div>
</div>

</body>
</html>
