<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();

if (@$_COOKIE['cookie'] != 1) {

    @$advice = "<div id='advice' style='text-align:center;bottom:0;position:fixed;height:10%;

width:100%;z-index:1000;background-color:#D0D0D0;'>

Este sitio utiliza cookies. <a href='#' onclick='hide()'>[ Acepto ]</a><br>
<a href='avisoCookies.php' >VER POLITICA DE COOKIES</a>
</div>";
}
?>

<html lang="en">

    <head>
        <script language="javascript">

            function hide() {

                document.getElementById("advice").style.visibility = "hidden";

                document.getElementById("advice").innerHTML = "";

                document.cookie = "cookie=1";

            }

        </script>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/principal.css">
        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

        <title>INSPIRE PHOTOGRAPHY</title>
    </head>
    <body>
        <?= @$advice; ?>
        <?php
        include ("header.php");
        ?>  

        <div class="col-sm-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/IMG_20210604_214654-EFFECTS.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/IMG_20180818_135635_400.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/IMG_20201021_123226_539.jpg"alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>           

        <div class="col-sm-12">
            <section id="SobreMi">
                <h1 id="titulo">SOBRE MI</h1>
                <p>Bienvenidos a mi página web,en esta web podreís encontrar toda la información relativa a mis sesiones
                    de fotos Si necesitas fotos para tu web o comercio o simplemente para tu uso personal,no dudes en
                    contactar conmigo.Si además te interesa el mundo de la fotografía,te invito a que sigas visitando la
                    web para ver algunos consejos que te serán útiles.</p>
            </section>
        </div>
        <h1> MI PORTFOLIO</h1>
        <!-- SnapWidget -->

        <div class="row" id="Portfolio">
            <img class="img-ts rounded float-xs-left" src="img/LRM_EXPORT_120466368923032_20190803_214121453.jpeg"
                 id="img1" />
            <img class=" img-ts rounded float-xs-right" src="img/DSC05652.jpg" id="img2" />
            <img class=" img-ts rounded float-xs-right d-block" src="img/DSC05741.JPG" id="img3" />

        </div><br>
        <div class="row">
            <img class="img-ts rounded float-xs-left" src="img/barco.JPG"
                 id="img12" />
            <img class=" img-ts rounded float-xs-right" src="img/pasion1.jpg" id="img22" />
            <img class=" img-ts rounded float-xs-right d-block"
                 src="img/fotocampo.JPG" id="img32" />

        </div><br>
        <div class="row">
            <img class="img-ts rounded float-xs-left" src="img/LRM_EXPORT_120017808399713_20190803_213352893.jpeg"
                 id="img12" />
            <img class=" img-ts rounded float-xs-right" src="img/1603260232601_78369411.jpg" id="img22" />
            <img class=" img-ts rounded float-xs-right d-block"
                 src="img/LRM_EXPORT_267240378774295_20190806_150923443.jpeg" id="img32" />

        </div><br>
        <div class="row">
            <img class="img-ts rounded float-xs-left" src="img/fotoIrene.JPG"
                 id="img12" />
            <img class=" img-ts rounded float-xs-right" src="img/fotoIñi.JPG" id="img22" />
            <img class=" img-ts rounded float-xs-right d-block"
                 src="img/Captura.JPG" id="img32" />

        </div><br>





        <?php
        include('footer.php');
        ?>



    </body>
</html>





