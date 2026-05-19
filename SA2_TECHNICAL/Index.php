<!DOCTYPE html>
<html>
<head>
    <title>Resume</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #758ebd;
            color: white;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            display: flex;
            border-radius: 15px;
            overflow: hidden;
            
        }

        .left {
            width: 30%;
            background: #55728f;
            text-align: center;
            padding: 30px;
        }

        .left img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid white;
            margin-bottom: 10px;
        }

        .right {
            width: 70%;
            background: white;
            color: black;
            padding: 20px;
        }

        .menu a {
            display: block;
            padding: 10px;
            margin: 10px 0;
            background: #7497be;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        .menu a:hover {
            background: #3d547e;
            transform: translateX(5px);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

<?php require "Header.php"; ?>

<div class="container">

    <div class="left">
        <img src="profile.jpg" alt="Profile Picture">
        <h3>Aerick Lee P. Alba</h3>
        <p>BSIT Student</p>
    </div>

    <div class="right">
        <h2>Resume</h2>

        <div class="menu">
            <a href="personalinfo.php">Personal Information</a>
            <a href="career.php">Career Objective</a>
            <a href="education.php">Educational Attainment</a>
            <a href="skills.php">Skills</a>
            <a href="affiliation.php">Affiliation</a>
            <a href="experience.php">Work Experience</a>
        </div>
    </div>

</div>

<?php include "Footer.php"; ?>

</body>
</html>