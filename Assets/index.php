<?php
error_reporting(-1);
ini_set('display_errors','On');
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <title>Holzspross</title>
    <link rel="shortcut icon" href="\Bilder\cross.ico" />
    <meta charset="Utf-8">
    <link type="text/css" href="Assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
</head>

<body class="hintergrund">
    <img id="treeSide" src="Bilder/treeLeft.png">

    <br/><br/><br/>

    <ul id="nav">
        <li><a href="index.php">START</a></li>
        <li><a href="">KÜCHE</a></li>
        <li><a href="">SCHALEN & TELLER</a></li>
        <li><a href="Katalog.php">KATALOG</a></li>
    </ul>

    <br/><br/><br/><br/><br/>

    <h1 style="font-size: 100px; position: relative; z-index: 3;">Holzspross</h1>

    <br/><br/>

    <div id="container">
        <ul id="slides">
            <li class="slide">
                <div class="slide-partial slide-left"><img src="Bilder/houseSunLeft.jpg" /></div>
                <div class="slide-partial slide-right"><img src="Bilder/houseSunRight.jpg" /></div>
                <h1 class="title"><span class="title-text">House</span></h1>
            </li>
            <li class="slide">
                <div class="slide-partial slide-left"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/mountain-left.jpg" /></div>
                <div class="slide-partial slide-right"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/mountain-right.jpg" /></div>
                <h1 class="title"><span class="title-text">Mountain</span></h1>
            </li>
            <li class="slide">
                <div class="slide-partial slide-left"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/ocean-left.jpg" /></div>
                <div class="slide-partial slide-right"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/ocean-right.jpg" /></div>
                <h1 class="title"><span class="title-text">Ocean</span></h1>
            </li>
            <li class="slide">
                <div class="slide-partial slide-left"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/canyon-left.jpg" /></div>
                <div class="slide-partial slide-right"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/canyon-right.jpg" /></div>
                <h1 class="title"><span class="title-text">Canyon</span></h1>
            </li>
            <li class="slide">
                <div class="slide-partial slide-left"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/lake-left.jpg" /></div>
                <div class="slide-partial slide-right"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/lake-right.jpg" /></div>
                <h1 class="title"><span class="title-text">Lake</span></h1>
            </li>
        </ul>
        <ul id="slide-select">
            <li class="btn prev fa fa-arrow-left"></li>
            <li class="selector"></li>
            <li class="selector"></li>
            <li class="selector"></li>
            <li class="selector"></li>
            <li class="selector"></li>
            <li class="btn next fa fa-arrow-right"></li>
        </ul>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src="Assets/css/bootstrap.min.css"></script>
    <script src="scripts.js"></script>
</body>

</html>