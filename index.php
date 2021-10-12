<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game shop</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fixed.css">

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var switchStatus = false;
            switchStatus = $(this).is(':checked');
            // čia rašomas JQuery kodas
            $('#contentLeft h2').mouseover(function() { // užvedus pelyte
                $(this).css('cursor', 'pointer'); // pakeičiamas pelytės žymeklis
            });

            $('#contentLeft h2').click(function(event) { // paspaudus contentLeft h2 elem.
                $('#contentLeft ul').slideToggle(); // slepiamas/rodomas ul meniu elem.
                switchStatus = $(this).is(':checked');
            });
                $('#home').click(function (event) { // paspaudus contentLeft h2 elem.

                    if (this === event.target && switchStatus === false) {
                        $('#contentLeft ul').slideToggle(); // slepiamas/rodomas ul meniu elem.

                    }
                });
        });
    </script>


</head>

<body data-spy="scroll" data-target="navbarResponsive">

<!------ Namu sekcija -->
<div id="home">

    <!--- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <button class="navbar-toggler" type="buttnon" data-toggle="collapse" data-target="navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <div id="contentLeft">
                    <div class="rightPosition">
                    <h2>Išskleisti</h2>
                    <div/>
                    <ul>
                    <a class="nav-link" href="#home">Pagrindinis puslapis</a>
                    <a class="nav-link" href="telefonas.php">Telefonai</a><a class="nav-link" href="telefonas.php">Įsiminti paieškos rezultatai</a>
                    <a class="nav-link" href="#contact">Kontaktai</a>
                    </ul>
                </div>
            </ul>
        </div>
    </nav>
    <!--- Start Landing page section -->
    <div class="landing">
        <div class="home-wrap">
            <div class="home-inner">
            </div>
        </div>
    </div>

    <div class="caption text-center">
        <h1>Telefonų parduotuvė</h1>
        <h3>Pigiausi telefonai</h3>
    </div>
</div>
<!------ Games sekcija -->
<div id="Games" class="offset">

</div>
<!------ Contact sekcija -->
<div id="contact" class="offset">
    <footer>
        <div class="row justify-content-center">
            <div class="col-md-5 text-center">
                <p>Kilus klausimam, galima susisiekti</p>
                <strong>Informacija</strong>
                <p>863381*45<br>vaidas.lileikis@ktu.edu</p>
                <a href="https://www.instagram.com/vaidasssj/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="https://www.instagram.com/vaidasssj/" target="_blank"><i class="fab fa-twitter-square"></i></a>
                <a href="https://www.instagram.com/vaidasssj/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>

            <hr class="socket">
            @ Vaidas Lileikis karkasai
        </div>
    </footer>
</div>
<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<!--- End of Script Source Files -->
</body>
</html>