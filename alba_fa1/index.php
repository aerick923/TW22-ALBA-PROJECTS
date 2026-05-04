<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alba Resume</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>


<?php
   
    // Personal Information
    $name = "Aerick Lee P. Alba";
    $phoneNum = "(+63) 920-263-9948";
    $email = "apalba@fit.edu.ph";
    $location = "Manila, Philippines";
    $profileImage = "RESUME_PICTURE - Copy.jpg";


   
    // About Me & Objective
   
    $aboutMe = "I am an aspiring software developer with a passion for learning and creating innovative solutions.
    I have experience in various programming languages and a strong foundation in Information Technology principles.
    I am eager to contribute my skills and grow as a professional in the tech industry.";


    $objective = "To obtain a position as a software developer where I can apply my skills in PHP, Java, and Networking to contribute to the success of the organization.";


   
    // Education
    $college = "FEU Institute of Technology | 2024 - Present";
    $shs = "Siena College Quezon City | 2022 - 2024";
    $jhs = "University of the East | 2018 - 2022";
    $elementary = "University of the East | 2012 - 2018";


   
    // Skills
    $programmingSkills = "PHP, Java, Python, C++";
    $webSkills = "HTML, CSS, JavaScript";
    $databaseSkills = "SQL";


    // Soft Skills
    $softSkill1 = "Problem-solving";
    $softSkill2 = "Teamwork";
    $softSkill3 = "Communication";
    $softSkill4 = "Adaptability";
    $softSkill5 = "Attention to Detail";


   
    // Projects
    $project1Title = "Academic Hub";
    $project1Desc = "A C++ terminal-based Learning Management System created to enhance C++ skills.";


    $project2Title = "Convenience Store";
    $project2Desc = "A Java terminal-based Convenience Store created to develop Object-Oriented Programming skills.";


   
    // Certifications
    $cert1 = "Cisco Certified: JavaScript";
    $cert2 = "Cisco Certified: Java Programming";


   
    // References
    $ref1Name = "Christian P. Nicanor";
    $ref1Role = "SCQC SHS Teacher";
    $ref1Address = "Cor 1105, Del Monte Ave, Quezon City, Metro Manila";


    $ref2Name = "Nerry Jane Valiao";
    $ref2Role = "UE JHS Teacher";
    $ref2Address = "2219 Recto Ave, Sampaloc, Manila, Metro Manila";
?>


<div class="container">


    <!-- SIDEBAR -->
    <div class="sidebar">
        <img src="<?= $profileImage ?>" alt="Profile Picture" class="profile-img">


        <h1><?= $name ?></h1>
        <p><?= $email ?></p>
        <p><?= $phoneNum ?></p>
        <p><?= $location ?></p>


        <div class="section">
            <h3>Technical Skills</h3>


            <p><strong>Programming:</strong><br><?= $programmingSkills ?></p>
            <p><strong>Web:</strong><br><?= $webSkills ?></p>
            <p><strong>Databases:</strong><br><?= $databaseSkills ?></p>


            <h3>Soft Skills</h3>
            <ul>
                <li><?= $softSkill1 ?></li>
                <li><?= $softSkill2 ?></li>
                <li><?= $softSkill3 ?></li>
                <li><?= $softSkill4 ?></li>
                <li><?= $softSkill5 ?></li>
            </ul>
        </div>
    </div>


    <!-- MAIN CONTENT -->
    <div class="main">


        <div class="section">
            <h2>About Me</h2>
            <p><?= $aboutMe ?></p>
        </div>


        <div class="section">
            <h2>Career Objective</h2>
            <p><?= $objective ?></p>
        </div>


        <div class="section">
            <h2>Education</h2>
            <p><strong>College:</strong> <?= $college ?></p>
            <p><strong>Senior High School:</strong> <?= $shs ?></p>
            <p><strong>Junior High School:</strong> <?= $jhs ?></p>
            <p><strong>Elementary:</strong> <?= $elementary ?></p>
        </div>


        <div class="section">
            <h2>Projects</h2>
            <p><strong><?= $project1Title ?></strong><br><?= $project1Desc ?></p>
            <p><strong><?= $project2Title ?></strong><br><?= $project2Desc ?></p>
        </div>


        <div class="section">
            <h2>Certifications</h2>
            <p><?= $cert1 ?></p>
            <p><?= $cert2 ?></p>
        </div>


        <div class="section">
            <h2>Reference Persons</h2>


            <p><strong><?= $ref1Name ?></strong></p>
            <p><?= $ref1Role ?></p>
            <p><?= $ref1Address ?></p>


            <br>


            <p><strong><?= $ref2Name ?></strong></p>
            <p><?= $ref2Role ?></p>
            <p><?= $ref2Address ?></p>
        </div>


    </div>


</div>


</body>
</html>