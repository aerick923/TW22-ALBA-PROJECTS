<!DOCTYPE html>
<html>
<head>
    <title>Measure Conversion Chart - Lengths</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f6fb;
            padding: 25px;
        }

        .container {
            width: 960px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            color: #4f5158;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 28px;
            font-size: 14px;
        }

        th, td {
            border: 1px solid black;
            padding: 7px;
        }

        th.section {
            background-color: #AB8071;
            text-align: center;
            font-weight: bold;
        }

        td.eq {
            width: 30px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>
<div class="container">

<h2>MEASURE CONVERSION CHART – LENGTHS (UK)</h2>

<?php
// ===== METRIC =====
$cm_to_mm = 1 * 10;
$dm_to_cm = 1 * 10;
$m_to_cm  = 1 * 100;
$km_to_m  = 1 * 1000;

// ===== IMPERIAL =====
$ft_to_in = 1 * 12;
$yd_to_ft = 1 * 3;
$ch_to_yd = 1 * 22;
$fur_to_yd = 1 * 220;
$mi_to_yd = 1 * 1760;
$mi_to_fur = 1 * 8;

// ===== METRIC → IMPERIAL =====
$mm_to_in = 1 * 0.03937;
$cm_to_in = 1 * 0.39370;
$m_to_in  = 1 * 39.37008;
$m_to_ft  = 1 * 3.28084;
$m_to_yd  = 1 * 1.09361;
$km_to_yd = 1 * 1093.6133;
$km_to_mi = 1 * 0.62137;

// ===== IMPERIAL → METRIC =====
$in_to_cm = 1 * 2.54;
$ft_to_cm = 1 * 30.48;
$yd_to_cm = 1 * 91.44;
$yd_to_m  = 1 * 0.9144;
$mi_to_m  = 1 * 1609.344;
$mi_to_km = 1 * 1.609344;
?>

<!-- METRIC CONVERSIONS -->
<table>
<tr><th colspan="6" class="section">METRIC CONVERSIONS</th></tr>
<tr>
    <td>1 centimetre</td><td class="eq">=</td><td><?= $cm_to_mm ?> millimetres</td>
    <td>1 cm</td><td class="eq">=</td><td><?= $cm_to_mm ?> mm</td>
</tr>
<tr>
    <td>1 decimetre</td><td class="eq">=</td><td><?= $dm_to_cm ?> centimetres</td>
    <td>1 dm</td><td class="eq">=</td><td><?= $dm_to_cm ?> cm</td>
</tr>
<tr>
    <td>1 metre</td><td class="eq">=</td><td><?= $m_to_cm ?> centimetres</td>
    <td>1 m</td><td class="eq">=</td><td><?= $m_to_cm ?> cm</td>
</tr>
<tr>
    <td>1 kilometre</td><td class="eq">=</td><td><?= $km_to_m ?> metres</td>
    <td>1 km</td><td class="eq">=</td><td><?= $km_to_m ?> m</td>
</tr>
</table>

<!-- IMPERIAL CONVERSIONS -->
<table>
<tr><th colspan="6" class="section">IMPERIAL CONVERSIONS</th></tr>
<tr>
    <td>1 foot</td><td class="eq">=</td><td><?= $ft_to_in ?> inches</td>
    <td>1 ft</td><td class="eq">=</td><td><?= $ft_to_in ?> in</td>
</tr>
<tr>
    <td>1 yard</td><td class="eq">=</td><td><?= $yd_to_ft ?> feet</td>
    <td>1 yd</td><td class="eq">=</td><td><?= $yd_to_ft ?> ft</td>
</tr>
<tr>
    <td>1 chain</td><td class="eq">=</td><td><?= $ch_to_yd ?> yards</td>
    <td>1 ch</td><td class="eq">=</td><td><?= $ch_to_yd ?> yd</td>
</tr>
<tr>
    <td>1 furlong</td><td class="eq">=</td><td><?= $fur_to_yd ?> yards (or 10 chains)</td>
    <td>1 fur</td><td class="eq">=</td><td><?= $fur_to_yd ?> yd</td>
</tr>
<tr>
    <td>1 mile</td><td class="eq">=</td><td><?= $mi_to_yd ?> yards (or <?= $mi_to_fur ?> furlongs)</td>
    <td>1 mi</td><td class="eq">=</td><td><?= $mi_to_yd ?> yd</td>
</tr>
</table>

<!-- METRIC TO IMPERIAL -->
<table>
<tr><th colspan="6" class="section">METRIC → IMPERIAL CONVERSIONS</th></tr>
<tr>
    <td>1 millimetre</td><td class="eq">=</td><td><?= $mm_to_in ?> inches</td>
    <td>1 mm</td><td class="eq">=</td><td><?= $mm_to_in ?> in</td>
</tr>
<tr>
    <td>1 centimetre</td><td class="eq">=</td><td><?= $cm_to_in ?> inches</td>
    <td>1 cm</td><td class="eq">=</td><td><?= $cm_to_in ?> in</td>
</tr>
<tr>
    <td>1 metre</td><td class="eq">=</td><td><?= $m_to_in ?> inches</td>
    <td>1 m</td><td class="eq">=</td><td><?= $m_to_in ?> in</td>
</tr>
<tr>
    <td>1 metre</td><td class="eq">=</td><td><?= $m_to_ft ?> feet</td>
    <td>1 m</td><td class="eq">=</td><td><?= $m_to_ft ?> ft</td>
</tr>
<tr>
    <td>1 metre</td><td class="eq">=</td><td><?= $m_to_yd ?> yards</td>
    <td>1 m</td><td class="eq">=</td><td><?= $m_to_yd ?> yd</td>
</tr>
<tr>
    <td>1 kilometre</td><td class="eq">=</td><td><?= $km_to_yd ?> yards</td>
    <td>1 km</td><td class="eq">=</td><td><?= $km_to_yd ?> yd</td>
</tr>
<tr>
    <td>1 kilometre</td><td class="eq">=</td><td><?= $km_to_mi ?> miles</td>
    <td>1 km</td><td class="eq">=</td><td><?= $km_to_mi ?> mi</td>
</tr>
</table>

<!-- IMPERIAL TO METRIC -->
<table>
<tr><th colspan="6" class="section">IMPERIAL → METRIC CONVERSIONS</th></tr>
<tr>
    <td>1 inch</td><td class="eq">=</td><td><?= $in_to_cm ?> centimetres</td>
    <td>1 in</td><td class="eq">=</td><td><?= $in_to_cm ?> cm</td>
</tr>
<tr>
    <td>1 foot</td><td class="eq">=</td><td><?= $ft_to_cm ?> centimetres</td>
    <td>1 ft</td><td class="eq">=</td><td><?= $ft_to_cm ?> cm</td>
</tr>
<tr>
    <td>1 yard</td><td class="eq">=</td><td><?= $yd_to_cm ?> centimetres</td>
    <td>1 yd</td><td class="eq">=</td><td><?= $yd_to_cm ?> cm</td>
</tr>
<tr>
    <td>1 yard</td><td class="eq">=</td><td><?= $yd_to_m ?> metres</td>
    <td>1 yd</td><td class="eq">=</td><td><?= $yd_to_m ?> m</td>
</tr>
<tr>
    <td>1 mile</td><td class="eq">=</td><td><?= $mi_to_m ?> metres</td>
    <td>1 mi</td><td class="eq">=</td><td><?= $mi_to_m ?> m</td>
</tr>
<tr>
    <td>1 mile</td><td class="eq">=</td><td><?= $mi_to_km ?> kilometres</td>
    <td>1 mi</td><td class="eq">=</td><td><?= $mi_to_km ?> km</td>
</tr>
</table>

</div>
</body>
</html>