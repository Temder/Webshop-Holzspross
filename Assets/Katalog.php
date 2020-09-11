<!-- 
Das ist die Seite "Katalog" 
von Leon Mantey. 
-->

<?php
error_reporting(-1); 
ini_set('display_errors','On');
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Holzspross - Katalog</title>
        <link rel="shortcut icon" href="Bilder\Terraria.ico" />
        <meta charset="Utf-8">
        <link href="styles.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>

    <body class="hintergrund">

        <header class="jumbotron">
            <div class="container">
                <h1 class="kÜs">Holzspross-Katalog</h1>
            </div>            
        </header>

        <h2 style="text-align: center">Hier gibt es unsere Produkte aus Holz.</h2>

        <section class="container" id="products">
            <div class="row">
                <div class="col">
                    <?php include 'produkt.php'?>
                </div>
                <div class="col">
                    <?php include 'produkt.php'?>
                </div>
                <div class="col">
                    <?php include 'produkt.php'?>
                </div>
                <div class="col">
                    <?php include 'produkt.php'?>
                </div>
            </div>
        </section>
        

        <script src="bootstrap.bundle.js"></script>
    </body>
</html>
