<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            background-color: lightgray;
            margin: 20px;
        }

        .container{
            width: 800px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border: 2px solid black;
        }

        h1{
            text-align: center;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        td{
            padding: 8px;
            border: 1px solid black;
        }

        .title{
            background-color: lightgray;
            font-weight: bold;
        }

    </style>
</head>

<body>

<?php

$studentNumber = "202410595";

$firstName = "Aerick Lee";
$middleName = "Puzon";
$lastName = "Alba";

$gender = "Male";

$birthDate = "August 22, 2005";

$address = "Quezon City";

$contactNumber = 9202639948;

$Course = "Bachelor of Science in Information Technology";

$specialization = "Web and Mobile Application Development";

$schoolName = "Siena College Quezon City - 2022 - 2024";


$juniorHigh = "University of the East";
$seniorHigh = "Siena College of Quezon City";
$college = "FEU Institute of Technology";

$fullName = strtoupper($lastName) . ", " .
ucfirst($firstName) . " " .
ucfirst($middleName);

$formattedContact = number_format($contactNumber);

?>

<div class="container">

    <h1>Student Registration Form</h1>

    <table>

        <tr>
            <td class="title" colspan="2">Student Information</td>
        </tr>

        <tr>
            <td>Student Number</td>
            <td><?php echo $studentNumber; ?></td>
        </tr>

        <tr>
            <td>Full Name</td>
            <td><?php echo $fullName; ?></td>
        </tr>

        <tr>
            <td>Gender</td>
            <td><?php echo strtoupper($gender); ?></td>
        </tr>

        <tr>
            <td>Birth Date</td>
            <td><?php echo $birthDate; ?></td>
        </tr>

        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>

        <tr>
            <td>Contact Number</td>
            <td><?php echo $formattedContact; ?></td>
        </tr>

        <tr>
            <td>Course</td>
            <td><?php echo $Course; ?></td>
        </tr>

        <tr>
            <td>Specialization</td>
            <td><?php echo $specialization; ?></td>
        </tr>

        <tr>
            <td>Previous School</td>
            <td><?php echo $schoolName; ?></td>
        </tr>


        <tr>
            <td class="title" colspan="2">Educational Background</td>
        </tr>

        <tr>
            <td>Junior High School</td>
            <td><?php echo $juniorHigh; ?></td>
        </tr>

        <tr>
            <td>Senior High School</td>
            <td><?php echo $seniorHigh; ?></td>
        </tr>

        <tr>
            <td>College</td>
            <td><?php echo $college; ?></td>
        </tr>

    </table>

</div>

</body>
</html>