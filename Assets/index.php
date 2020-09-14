<?php
error_reporting(-1);
ini_set('display_errors','On');
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <title>Holzspross</title>
    <link rel="shortcut icon" href="Bilder/Terraria.ico" />
    <meta charset="Utf-8">
    <link type="text/css" href="Assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>

<body class="hintergrund">
    <img id="treeSide" src="Bilder/treeLeft.png">

    <br/><br/>

    <div class="nav">
        <a class="navA1 navAll" href="index.php">START</a>
        <a class="navA2 navAll" href="">KÜCHE</a>
        <a class="navA3 navAll" href="">SCHALEN & TELLER</a>
        <a class="navA4 navAll" href="Katalog.php">KATALOG</a>
    </div>

    <br/><br/><br/><br/><br/><br/>

    <h1 class="sÜs">Holzspross</h1>

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
                <div class="slide-partial slide-left"><img src="Bilder/H3Left.jpg" /></div>
                <div class="slide-partial slide-right"><img src="Bilder/H3Right.jpg" /></div>
                <h1 class="title"><span class="title-text">Holzspross</span></h1>
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

        <!--PLACEHOLDER-->
        <div style="height: 100%;"></div>

        <div class="sÜs">
            Hallo
        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src="Assets/css/bootstrap.min.css"></script>
    <script src="scripts.js"></script>
</body>

</html>