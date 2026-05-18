<!DOCTYPE html>
<html>
<head>
    <title>Story</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            background-color: #855a5a;
        }

        .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 30px;
        }

        .box {
            border: 1px solid #ccc;
            width: 180px;
            height: 260px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-radius: 8px;
            background: white;
            transition: 0.3s;
        }

        .box:hover {
            background-color: #e6e6e6;
            transform: scale(1.05);
        }

        .box img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
        }

        a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        h3 {
            margin-top: 20px;
        }

        img {
            width: 250px;
            height: 180px;
            margin: 10px 0;
            border-radius: 8px;
        }

        .story-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            margin-top: 40px;
        }

        .story-info {
            text-align: left;
            background: white;
            padding: 20px;
            border-radius: 12px;
            width: 300px;
            box-shadow: 0px 5px 15px rgba(0,0,0,0.2);
        }

        .story-info p {
            margin: 10px 0;
        }

        .story-image img {
            width: 220px;
            height: 220px;
            border-radius: 12px;
            object-fit: cover;
            box-shadow: 0px 5px 15px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>
<h2>Biography</h2>