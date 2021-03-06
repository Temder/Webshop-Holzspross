<?php
error_reporting(-1);
ini_set('display_errors','On');
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <title>Holzspross</title>
    <meta charset="Utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link type="text/css" href="Assets/css/bootstrap.min.css">
    <link rel="shortcut icon" href="Bilder/Terraria.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Reem+Kufi">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Background Color, Tree and Headline Picture -->

    <div id="background" class="dark-modeToggle"></div>
    <img id="treeSide" src="Bilder/treeLeft.png">
    <img class="sÜs dark-modeToggle" src="Bilder/Überschrift.png">

    <span class="navVOC" onclick="openNav()">&#9776;</span>


    <!-- slideshow -->

    <div id="container">
        <ul id="slides">
            <li class="slide">
                <div class="slide-partial slide-left"><img src="Bilder/H3Left.jpg" /></div>
                <div class="slide-partial slide-right"><img src="Bilder/H3Right.jpg" /></div>
                <h1 class="title"><span class="title-text">Holzspross</span></h1>
            </li>
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
            <li class="btnSS prev fa fa-arrow-left"></li>
            <li class="selector"></li>
            <li class="selector"></li>
            <li class="selector"></li>
            <li class="selector"></li>
            <li class="selector"></li>
            <li class="btnSS next fa fa-arrow-right"></li>
        </ul>
    </div>


    <!--Placeholder-->

    <div style="height: 75vh;"></div>

    <br/>


    <!-- Navbar Horizontal -->

    <div class="nav dark-modeToggle">
        <a class="navA1 navAll" href="index.php">START</a>
        <a class="navA2 navAll" href="">KÜCHE</a>
        <a class="navA3 navAll" href="">SCHALEN & TELLER</a>
        <a class="navA4 navAll" href="Katalog.php">KATALOG</a>
    </div>


    <!-- Navbar Vertical -->

    <div id="mySidenav" class="sidenav">
        <a class="closebtn dark-modeToggle" href="javascript:void(0)" onclick="closeNav()" style="font-size: 50px;">&times;</a>
        <a class="dark-modeToggle" href="index.php">START</a>
        <a class="dark-modeToggle" href="">KÜCHE</a>
        <a class="dark-modeToggle" href="">SCHALEN & <br/> TELLER</a>
        <a class="dark-modeToggle" href="Katalog.php">KATALOG</a>
    </div>


    <!-- Text and Images -->

    <div class="d-flex flex-column justify-content-center dark-modeToggle" style="position: relative; width: 100%; display: grid; place-items: center;">
        <div class="p-2 klÜs">
            Wir sind Holzspross
        </div>
        <div class="p-2 txGr1">
            <p>In unserem oline-Shop finden Sie Produkte aus Holz, da wir nachhaltige Artikel für die Zukunft verkaufen.</p>
            <p>Holz ist unsere Überzeugung und fühlt sich super an.</p>
            <p>Schau Sie selbst und lassen Sie sich begeistern!</p>
        </div>
        <div class="p-2 klÜs" style="margin-top: 50px;">
            Was Brauchen sie?
        </div>
    </div>

    <div class="d-flex flex-wrap justify-content-center picGr1">
        <div class="p-2 picDiv1">
            <img class="pic1" src="Bilder/Artikel/GroßesHolzBesteckFürSalat1.png">
        </div>
        <div class="p-2 picDiv1">
            <img class="pic1" src="Bilder/Artikel/AbgerundeteAkazienHolzTeller1.png">
        </div>
    </div>


    <!-- Test Section -->

    <div class="d-flex" style="z-index: 10;">
        <div class="p-2">

        </div>
        <div class="p-2">

        </div>
    </div>

    <br/><br/><br/><br/><br/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
</body>

</html>