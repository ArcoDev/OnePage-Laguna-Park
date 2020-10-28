<?php  
    session_start(); 
    require 'opcionesLenguaje.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icons/LagunaPark.png" type="image/x-icon">
    <title>Laguna Industrial Park</title>
    <!--css bootsrap-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!--font family-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <!--css personales-->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <!--librerias-->
    <link rel="stylesheet" href="css/normalize.css">
</head>

<body>
    <header id="header">
        <div class="div-logo">
            <img src="./img/logo.png" alt="Laguna Industrial Park Logo">
        </div>
        <div class="div-links">
            <ul>
                <li class="active"><?php echo $home ?></li>
                <li><?php echo $about ?></li>
                <li><?php echo $location ?></li>
                <li><?php echo $infraestructure ?></li>
                <li><?php echo $benefits ?></li>
                <li><?php echo $contact ?></li>
            </ul>
            <div class="dropdown">
                <button class="btnIdioma btn dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $cambiarIdioma ?>
                </button>
                <div class="lisIdioma dropdown-menu text-center" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="detectarLenguaje.php?languaje=en"><?php echo $ingles ?></a>
                    <a class="dropdown-item" href="detectarLenguaje.php?languaje=es"><?php echo $español ?></a>
                    <a class="dropdown-item" href="detectarLenguaje.php?languaje=ch"><?php echo $chino ?></a>
                </div>
            </div>
        </div>
        <div class="div-tel">
            <a href="tel:524441419138"><i class="fas fa-phone-alt"></i> +52 (444) 141-9138</a>
        </div>

    </header>

    <!--nav bar movil-->
    <div class="row">
        <div class="col-lg-12 menu">
            <nav id="fondoNav" class="navbar navbar-light light-blue lighten-4 fixed-top">

                <!-- Navbar brand -->
                <img id="iconMov1" src="icons/iconMov.png" alt="">
                <img id="iconMov2" src="icons/iconMov2.png" alt="">
                <img class="iconTel" src="icons/telefono.png" alt="">

                <!-- Collapse button -->
                <button id="abrir" class="navbar-toggler toggler-example" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false"
                    aria-label="Toggle navigation" onclick="cambiarFondo();">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button id="cerrar" class="navbar-toggler toggler-example" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false"
                    aria-label="Toggle navigation" onclick="fondoOriginal();">
                    <span id="btnClose" class="navbar-toggler-icon">X</span>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent1">

                    <div class="div-links">
                        <ul class="linkMovil">
                            <li class="active"><?php echo $home ?></li>
                            <li><?php echo $about ?></li>
                            <li><?php echo $location ?></li>
                            <li><?php echo $infraestructure ?></li>
                            <li><?php echo $benefits ?></li>
                            <li><?php echo $contact ?></li>
                        </ul>
                    </div>
                    <div class="idioma">
                        <a class="dropdown-item" href="detectarLenguaje.php?languaje=en"><?php echo $ingles ?></a>
                        <a class="dropdown-item" href="detectarLenguaje.php?languaje=es"><?php echo $español ?></a>
                        <a class="dropdown-item" href="detectarLenguaje.php?languaje=ch"><?php echo $chino ?></a>
                    </div>

                </div>
                

            </nav>
            <!--/.Navbar-->
        </div>
    </div>


    <!----------------------- Fin header -------------------------------->
    <!--Carousel Hero-->
    <div id="home" class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-caption d-none d-md-block">
                <h1>LAGUNA INDUSTRIAL PARK</h1>
                <p><?php echo $parrafo ?></p>
                <div class="button-container">
                    <a href="#contact"><button class="btnContact"><?php echo $btnContact ?></button></a>
                    <a href="#lots"><button class="btnContactTransparent"><?php echo $btnView ?></button></a>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/header.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/Slider1.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!----------------------------------cajas azules---------------------------------->
    <div class="row text-center cajasAzul contenedor">
        <div class="col-md-4 caja">
            <img src="icons/cuadro.png" alt="">
            <h1>30+</h1>
            <p><?php echo $hectareas ?></p>
        </div>
        <div class="col-md-4 caja">
            <img src="icons/usa.png" alt="">
            <h1>332 miles</h1>
            <p><?php echo $laredo ?>r</p>
        </div>
        <div class="col-md-4 caja">
            <img src="icons/desarrollo.png" alt="">
            <h1>40+</h1>
            <p><?php echo $desarrollo ?></p>
        </div>
    </div>
    <!----------------------------------fin cajas azules---------------------------------->

    <!----------------------------------columnas about------------------------------------>
    <div class="row contenedor">
        <div class="col-md-6 text-center cajaAbout">
            <img class="imgAbout" src="img/LIP.png" alt="">
        </div>
        <div class="col-md-6 cajaAbout">
            <div class="titulo">
                <img class="rectangulo" src="img/rectangulo.png" alt="">
                <p class="txtTit"><?php echo $aboutLag ?></p>
            </div>
            <h1 class="txtUni"><?php echo $txtAbout ?></h1>
            <p class="txtDesc"><?php echo $desAbout ?></p>
            <ul class="txtLista">
                <li><?php echo $lista1 ?></li>
                <li><?php echo $lista2 ?></li>
                <li><?php echo $lista3 ?></li>
                <li><?php echo $lista4 ?></li>
                <li><?php echo $lista5 ?></li>
                <li><?php echo $lista6 ?></li>
            </ul>
        </div>
    </div>
    <!----------------------------------fin columnas about------------------------------------------->

    <!--------------------------------columnas proyect galery---------------------------------------->
    <section class="colProy">
        <div class="row contenedor">
            <div class="col-lg-3 cajProy">
                <div class="titulo infoProy">
                    <img class="rectangulo" src="img/rectangulo.png" alt="">
                    <p class="txtTit"><?php echo $photo ?></p>
                </div>
                <h1><?php echo $txtProy ?></h1>
                <p><?php echo $desProy1 ?> <br><br> <?php echo $desProy2 ?> </p>
            </div>
            <div class="col-lg-9 imgProject">
                <div class="row justify-content-around">
                    <div class="col-3">
                        <img src="img/gal3.png" alt="" class="imgProy" onclick="openModal();currentSlide(1)">
                    </div>
                    <div class="col-3">
                        <img src="img/gal2.png" alt="" class="imgProy"" onclick=" openModal();currentSlide(2)">
                    </div>
                    <div class=" col-3">
                        <img src="img/gal1.png" alt="" class="imgProy" onclick="openModal();currentSlide(3)">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cajaSliderMov">
        <div class="row contenedor">
            <!--slider movil-->
            <!--<div class="col-md-12 border slMovil" style="overflow: hidden; height: 400px; display: none;">
            <div id="sliderMov" class="sliderMov">
                <div class="wrapper" id="prev next">
                    <div id="items" class="items">
                        <div class="slideMov indu">
                        </div>
                        <div class="slideMov imgBts">
                        </div>
                        <div class="slideMov imgBuldi">
                        </div>
                        <a id="prev" class="control prev" draggable="false"></a> <a id="next" class="control next"
                            draggable="false"></a>
                    </div>
                </div>
            </div>
        </div>-->
            <!--fin slider movil-->
        </div>
    </section>

    <!-----------------------------------modal de imagenes----------------------------------------------------->
    <div id="myModal" class="modalGalery">
        <span class="cerrar cursor" onclick="closeModal()" title="cerrar">&times;</span>
        <div class="modalCuerpo">
            <div class="slideImg">
                <img src="img/1.png" style="width:100%">
            </div>

            <div class="slideImg">
                <img src="img/2.png" style="width:100%">
            </div>

            <div class="slideImg">
                <img src="img/3.png" style="width:100%">
            </div>

            <div class="slideImg">
                <img src="img/4.png" style="width:100%">
            </div>
            <div class="slideImg">
                <img src="img/5.png" style="width:100%">
            </div>

            <a class="anterior" onclick="plusSlides(-1)">&#x2190;</a>
            <a class="siguiente" onclick="plusSlides(1)">&#x2192;</a>

            <div class="columna">
                <img class="demo cursor" src="img/2.png" style="width:100%" onclick="currentSlide(2)" alt="Snow">
            </div>
            <div class="columna">
                <img class="demo cursor" src="img/3.png" style="width:100%" onclick="currentSlide(3)"
                    alt="Mountains and fjords">
            </div>
            <div class="columna">
                <img class="demo cursor" src="img/4.png" style="width:100%" onclick="currentSlide(4)"
                    alt="Northern Lights">
            </div>
            <div class="columna">
                <img class="demo cursor" src="img/5.png" style="width:100%" onclick="currentSlide(5)"
                    alt="Northern Lights">
            </div>
        </div>
    </div>
    <!-----------------------------------modal de imagenes------------------------------------------->
    <!--------------------------------fin columnas proyect galery------------------------------------>

    <!--------------------------------columnas our model---------------------------------------->
    <div class="row contenedor">
        <div class="col-md-12 text-center ourModel">
            <h1><?php echo $txtOur ?></h1>
            <p><?php echo $descOur ?></p>
        </div>
    </div>

    <div class="row contenedor " style="margin-bottom: 100px;">
        <div class="col-lg-4 text-center imgFases">
            <img src="img/fases.png" alt="" height="350px" style="border: 3px solid #eee; padding: 35px">
        </div>
        <div class="col-lg-8 text-center " id="colLotes">
            <svg id="lotes" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 587">
                <g id="Group_3" data-name="Group 3" transform="translate(951 -900)">
                    <g id="base">
                        <path id="base-2" data-name="base"
                            d="M1000,620,0,389V372.237L37,380,80,77H0V60L1000,33V53.394l-47.761,1.254L874.2,571.06,1000,599.6V620ZM101.467,76.991l-45,308.57,798.4,181.112,77.3-511.5Z"
                            transform="translate(-951 867)" fill="#f2f5f6" />
                        <path id="Path_97" data-name="Path 97"
                            d="M248.736,241.544a9.884,9.884,0,0,1,4.818-19.172l221.274,55.609a9.884,9.884,0,0,1-4.818,19.172Z"
                            transform="translate(-954 898.999)" fill="#f2f5f6" />
                        <path id="Path_98" data-name="Path 98"
                            d="M519.722,309.284a9.884,9.884,0,0,1,4.841-19.167l240.77,60.81a9.884,9.884,0,0,1-4.84,19.166Z"
                            transform="translate(-954 898.999)" fill="#f2f5f6" />
                        <rect id="Rectangle_12" data-name="Rectangle 12" width="2" height="507"
                            transform="translate(27.229 930.833) rotate(8.092)" fill="#f2f5f6" />
                        <rect id="Rectangle_13" data-name="Rectangle 13" width="15" height="2"
                            transform="translate(14.359 929.003) rotate(8.092)" fill="#f2f5f6" />
                        <rect id="Rectangle_14" data-name="Rectangle 14" width="15" height="2"
                            transform="translate(-56.724 1428.974) rotate(8.092)" fill="#f2f5f6" />
                        <rect id="Rectangle_15" data-name="Rectangle 15" width="2" height="288"
                            transform="translate(-896.49 950.306) rotate(7.76)" fill="#f2f5f6" />
                        <rect id="Rectangle_16" data-name="Rectangle 16" width="15" height="2"
                            transform="translate(-896.49 950.306) rotate(7.76)" fill="#f2f5f6" />
                        <rect id="Rectangle_17" data-name="Rectangle 17" width="15" height="2"
                            transform="translate(-935.105 1233.686) rotate(7.76)" fill="#f2f5f6" />
                    </g>
                    <g id="_01" data-name="01" class="lotShape" onclick="lote01();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 01</desc>
                        <path title="View Lot" id="Path_58" class="lot" data-name="Path 58"
                            d="M.129-.673,117.116-4.738l1.828,92.186L7.261,89.282Z"
                            transform="translate(-877.48 1162.313) rotate(14)" />
                        <path id="_01-2" class="number" data-name="01"
                            d="M116.624,322.1a4.063,4.063,0,0,1-2.32-.688,4.6,4.6,0,0,1-1.584-1.968,7.622,7.622,0,0,1-.56-3.04,7.5,7.5,0,0,1,.56-3.024,4.579,4.579,0,0,1,1.584-1.984,4.063,4.063,0,0,1,2.32-.688,3.987,3.987,0,0,1,2.3.688,4.532,4.532,0,0,1,1.6,1.984,7.317,7.317,0,0,1,.576,3.024,7.431,7.431,0,0,1-.576,3.04,4.547,4.547,0,0,1-1.6,1.968A3.987,3.987,0,0,1,116.624,322.1Zm0-1.056a2.8,2.8,0,0,0,1.712-.544,3.5,3.5,0,0,0,1.168-1.584,7.792,7.792,0,0,0,0-5.024,3.5,3.5,0,0,0-1.168-1.584,2.8,2.8,0,0,0-1.712-.544,2.869,2.869,0,0,0-1.728.544,3.542,3.542,0,0,0-1.152,1.584,7.792,7.792,0,0,0,0,5.024A3.542,3.542,0,0,0,114.9,320.5,2.869,2.869,0,0,0,116.624,321.041Zm9.2-10.24V322h-1.152V311.825h-2.64V310.8Z"
                            transform="translate(-950 901.999)" fill="#00394c" />
                    </g>
                    <g id="_02" data-name="02" class="lotShape" onclick="lote02();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 02</desc>
                        <path id="Path_56" class="lot" data-name="Path 56"
                            d="M1.212.728l127.22-1.1-.94,88.53L10.2,92.66Z"
                            transform="translate(-864.48 1067.313) rotate(14)" />
                        <path id="_02-2" class="number" data-name="02"
                            d="M132.468,232.1a4.063,4.063,0,0,1-2.32-.688,4.6,4.6,0,0,1-1.584-1.968,7.622,7.622,0,0,1-.56-3.04,7.5,7.5,0,0,1,.56-3.024,4.579,4.579,0,0,1,1.584-1.984,4.063,4.063,0,0,1,2.32-.688,3.987,3.987,0,0,1,2.3.688,4.532,4.532,0,0,1,1.6,1.984,7.317,7.317,0,0,1,.576,3.024,7.431,7.431,0,0,1-.576,3.04,4.547,4.547,0,0,1-1.6,1.968A3.987,3.987,0,0,1,132.468,232.1Zm0-1.056a2.8,2.8,0,0,0,1.712-.544,3.5,3.5,0,0,0,1.168-1.584,7.792,7.792,0,0,0,0-5.024,3.5,3.5,0,0,0-1.168-1.584,2.8,2.8,0,0,0-1.712-.544,2.869,2.869,0,0,0-1.728.544,3.542,3.542,0,0,0-1.152,1.584,7.792,7.792,0,0,0,0,5.024,3.542,3.542,0,0,0,1.152,1.584A2.869,2.869,0,0,0,132.468,231.041Zm13.746-.064V232h-7.856v-.816l4.656-4.56a5.893,5.893,0,0,0,1.184-1.488,2.831,2.831,0,0,0,.32-1.28,1.845,1.845,0,0,0-.688-1.536,2.952,2.952,0,0,0-1.936-.56,3.839,3.839,0,0,0-3.056,1.248l-.816-.7a4.309,4.309,0,0,1,1.664-1.184,6.082,6.082,0,0,1,2.3-.416,4.13,4.13,0,0,1,2.7.816,2.662,2.662,0,0,1,1.008,2.208,3.8,3.8,0,0,1-.384,1.664,6.97,6.97,0,0,1-1.456,1.84l-3.808,3.744Z"
                            transform="translate(-950 901.999)" fill="#00394c" />
                    </g>
                    <g id="_03" data-name="03" class="lotShape" onclick="lote03();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 03</desc>
                        <path id="Path_96" class="lot" data-name="Path 96"
                            d="M-863.4,1066.058-846.958,946.5l145.3-2.8-37.728,152.695Z" />
                        <path id="_03-2" class="number" data-name="03"
                            d="M156.562,116.1a4.06,4.06,0,0,1-2.32-.688,4.6,4.6,0,0,1-1.584-1.968,7.6,7.6,0,0,1-.56-3.04,7.487,7.487,0,0,1,.56-3.024,4.579,4.579,0,0,1,1.584-1.984,4.06,4.06,0,0,1,2.32-.688,3.987,3.987,0,0,1,2.3.688,4.539,4.539,0,0,1,1.6,1.984,7.317,7.317,0,0,1,.576,3.024,7.431,7.431,0,0,1-.576,3.04,4.554,4.554,0,0,1-1.6,1.968A3.987,3.987,0,0,1,156.562,116.1Zm0-1.056a2.8,2.8,0,0,0,1.712-.544,3.5,3.5,0,0,0,1.168-1.584,7.792,7.792,0,0,0,0-5.024,3.5,3.5,0,0,0-1.168-1.584,2.8,2.8,0,0,0-1.712-.544,2.869,2.869,0,0,0-1.728.544,3.542,3.542,0,0,0-1.152,1.584,7.792,7.792,0,0,0,0,5.024,3.542,3.542,0,0,0,1.152,1.584A2.869,2.869,0,0,0,156.562,115.041Zm9.781-5.44a4.086,4.086,0,0,1,2.672.96,2.869,2.869,0,0,1,.928,2.224,3.016,3.016,0,0,1-1.84,2.88,5.167,5.167,0,0,1-2.224.432,6.869,6.869,0,0,1-2.3-.384,4.754,4.754,0,0,1-1.728-1.056l.56-.912a4.188,4.188,0,0,0,1.488.944,5.541,5.541,0,0,0,1.984.352,3.366,3.366,0,0,0,2.128-.592,2.025,2.025,0,0,0,.752-1.664,1.964,1.964,0,0,0-.752-1.632,3.635,3.635,0,0,0-2.272-.592h-.8v-.848l3.1-3.888h-5.728V104.8h7.2v.816Z"
                            transform="translate(-950 901.999)" fill="#00394c" />
                    </g>
                    <g id="_04" data-name="04" class="lotShape" onclick="lote04();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 04</desc>
                        <path id="Path_93" class="lot" data-name="Path 93"
                            d="M309.141,92.4l-65.01-16.209L215.1,192.63l65.01,16.209Z"
                            transform="translate(-951 899.999)" />
                        <path id="_04-2" class="number" data-name="04"
                            d="M253.71,147.1a4.063,4.063,0,0,1-2.32-.688,4.6,4.6,0,0,1-1.584-1.968,7.622,7.622,0,0,1-.56-3.04,7.5,7.5,0,0,1,.56-3.024,4.579,4.579,0,0,1,1.584-1.984,4.063,4.063,0,0,1,2.32-.688,3.987,3.987,0,0,1,2.3.688,4.532,4.532,0,0,1,1.6,1.984,7.317,7.317,0,0,1,.576,3.024,7.431,7.431,0,0,1-.576,3.04,4.547,4.547,0,0,1-1.6,1.968A3.987,3.987,0,0,1,253.71,147.1Zm0-1.056a2.8,2.8,0,0,0,1.712-.544,3.5,3.5,0,0,0,1.168-1.584,7.792,7.792,0,0,0,0-5.024,3.5,3.5,0,0,0-1.168-1.584,2.8,2.8,0,0,0-1.712-.544,2.869,2.869,0,0,0-1.728.544,3.542,3.542,0,0,0-1.152,1.584,7.792,7.792,0,0,0,0,5.024,3.542,3.542,0,0,0,1.152,1.584A2.869,2.869,0,0,0,253.71,146.041Zm15.65-1.984h-2.24V147h-1.152v-2.944h-6.32v-.832l5.936-7.424h1.28l-5.728,7.232H266v-2.592h1.12v2.592h2.24Z"
                            transform="translate(-950 905.999)" fill="#00394c" />
                    </g>
                    <g id="_05" data-name="05" class="lotShape" onclick="lote05();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 05</desc>
                        <path id="Path_92" class="lot" data-name="Path 92"
                            d="M377.141,109.4l-65.01-16.209L283.1,209.63l65.01,16.209Z"
                            transform="translate(-951 899.999)" />
                        <path id="_05-2" class="number" data-name="05"
                            d="M323.468,161.1a4.063,4.063,0,0,1-2.32-.688,4.6,4.6,0,0,1-1.584-1.968,7.622,7.622,0,0,1-.56-3.04,7.5,7.5,0,0,1,.56-3.024,4.579,4.579,0,0,1,1.584-1.984,4.063,4.063,0,0,1,2.32-.688,3.987,3.987,0,0,1,2.3.688,4.532,4.532,0,0,1,1.6,1.984,7.317,7.317,0,0,1,.576,3.024,7.431,7.431,0,0,1-.576,3.04,4.547,4.547,0,0,1-1.6,1.968A3.987,3.987,0,0,1,323.468,161.1Zm0-1.056a2.8,2.8,0,0,0,1.712-.544,3.494,3.494,0,0,0,1.168-1.584,7.792,7.792,0,0,0,0-5.024,3.494,3.494,0,0,0-1.168-1.584,2.8,2.8,0,0,0-1.712-.544,2.869,2.869,0,0,0-1.728.544,3.542,3.542,0,0,0-1.152,1.584,7.792,7.792,0,0,0,0,5.024,3.541,3.541,0,0,0,1.152,1.584A2.869,2.869,0,0,0,323.468,160.041Zm9.074-5.648a5.68,5.68,0,0,1,3.536.88,2.9,2.9,0,0,1,1.12,2.432,3.308,3.308,0,0,1-.464,1.744,3.106,3.106,0,0,1-1.36,1.216,5.211,5.211,0,0,1-2.24.432,6.822,6.822,0,0,1-2.288-.384,4.754,4.754,0,0,1-1.728-1.056l.56-.912a4.214,4.214,0,0,0,1.472.944,5.412,5.412,0,0,0,1.968.352,3.274,3.274,0,0,0,2.144-.624,2.036,2.036,0,0,0,.768-1.664,1.979,1.979,0,0,0-.864-1.744,5.226,5.226,0,0,0-2.88-.592H329.9l.576-5.616h6.128v1.024h-5.12l-.384,3.568Z"
                            transform="translate(-950 905.999)" fill="#00394c" />
                    </g>
                    <g id="_06" data-name="06" class="lotShape" onclick="lote06();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 06</desc>
                        <path id="Path_91" class="lot" data-name="Path 91"
                            d="M445.141,125.4l-65.01-16.209L350.858,226.6l65.01,16.209Z"
                            transform="translate(-951 899.999)" />
                        <path id="_06-2" class="number" data-name="06"
                            d="M392.624,175.1a4.063,4.063,0,0,1-2.32-.688,4.6,4.6,0,0,1-1.584-1.968,7.622,7.622,0,0,1-.56-3.04,7.5,7.5,0,0,1,.56-3.024,4.579,4.579,0,0,1,1.584-1.984,4.063,4.063,0,0,1,2.32-.688,3.987,3.987,0,0,1,2.3.688,4.532,4.532,0,0,1,1.6,1.984,7.317,7.317,0,0,1,.576,3.024,7.431,7.431,0,0,1-.576,3.04,4.547,4.547,0,0,1-1.6,1.968A3.987,3.987,0,0,1,392.624,175.1Zm0-1.056a2.8,2.8,0,0,0,1.712-.544,3.5,3.5,0,0,0,1.168-1.584,7.792,7.792,0,0,0,0-5.024,3.5,3.5,0,0,0-1.168-1.584,2.8,2.8,0,0,0-1.712-.544,2.869,2.869,0,0,0-1.728.544,3.542,3.542,0,0,0-1.152,1.584,7.793,7.793,0,0,0,0,5.024A3.542,3.542,0,0,0,390.9,173.5,2.869,2.869,0,0,0,392.624,174.041Zm10.77-5.744a4.382,4.382,0,0,1,1.952.416,3.159,3.159,0,0,1,1.344,1.184,3.2,3.2,0,0,1,.48,1.76,3.248,3.248,0,0,1-1.872,3.024,4.449,4.449,0,0,1-1.952.416,4.137,4.137,0,0,1-3.408-1.456,6.456,6.456,0,0,1-1.184-4.144,7.1,7.1,0,0,1,.64-3.168,4.433,4.433,0,0,1,1.792-1.952,5.238,5.238,0,0,1,2.688-.672,5.051,5.051,0,0,1,2.656.608l-.464.928a3.909,3.909,0,0,0-2.176-.528,3.7,3.7,0,0,0-2.912,1.184,4.922,4.922,0,0,0-1.056,3.408q0,.4.048.912a2.979,2.979,0,0,1,1.328-1.408A4.213,4.213,0,0,1,403.394,168.3Zm-.1,5.824a2.886,2.886,0,0,0,1.968-.656,2.244,2.244,0,0,0,.768-1.776,2.2,2.2,0,0,0-.768-1.76,3.009,3.009,0,0,0-2.048-.656,3.393,3.393,0,0,0-1.5.32,2.529,2.529,0,0,0-1.008.88,2.278,2.278,0,0,0-.032,2.432,2.53,2.53,0,0,0,1.024.88A3.54,3.54,0,0,0,403.3,174.121Z"
                            transform="translate(-950 905.999)" fill="#00394c" />
                    </g>
                    <g id="_07" data-name="07" class="lotShape" onclick="lote07();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 07</desc>
                        <path id="Path_52" class="lot" data-name="Path 52" d="M0,0H78V131a25,25,0,0,1-25,25H0Z"
                            transform="translate(-495.199 992.731) rotate(14)" />
                        <path id="_07-2" class="number" data-name="07"
                            d="M465.351,189.1a4.06,4.06,0,0,1-2.32-.688,4.6,4.6,0,0,1-1.584-1.968,7.6,7.6,0,0,1-.56-3.04,7.488,7.488,0,0,1,.56-3.024,4.579,4.579,0,0,1,1.584-1.984,4.06,4.06,0,0,1,2.32-.688,3.987,3.987,0,0,1,2.3.688,4.539,4.539,0,0,1,1.6,1.984,7.317,7.317,0,0,1,.576,3.024,7.431,7.431,0,0,1-.576,3.04,4.554,4.554,0,0,1-1.6,1.968A3.987,3.987,0,0,1,465.351,189.1Zm0-1.056a2.8,2.8,0,0,0,1.712-.544,3.5,3.5,0,0,0,1.168-1.584,7.792,7.792,0,0,0,0-5.024,3.5,3.5,0,0,0-1.168-1.584,2.8,2.8,0,0,0-1.712-.544,2.869,2.869,0,0,0-1.728.544,3.542,3.542,0,0,0-1.152,1.584,7.792,7.792,0,0,0,0,5.024,3.541,3.541,0,0,0,1.152,1.584A2.869,2.869,0,0,0,465.351,188.041Zm13.908-10.24v.816L474.571,189h-1.248l4.608-10.176h-5.76v2.1h-1.136V177.8Z"
                            transform="translate(-950 905.999)" fill="#00394c" />
                    </g>
                    <g id="_01b" data-name="01b" class="lotShape" onclick="lote01_2();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 01</desc>
                        <path id="Path_66" class="lot" data-name="Path 66"
                            d="M-4.312,3.226,75.068.518,77,107a25,25,0,0,1-25,25H0Z"
                            transform="translate(-680.547 1302.091) rotate(-164.991)" />
                        <path id="_01-3" class="number" data-name="01"
                            d="M248.624,329.1a4.063,4.063,0,0,1-2.32-.688,4.6,4.6,0,0,1-1.584-1.968,7.622,7.622,0,0,1-.56-3.04,7.5,7.5,0,0,1,.56-3.024,4.579,4.579,0,0,1,1.584-1.984,4.063,4.063,0,0,1,2.32-.688,3.987,3.987,0,0,1,2.3.688,4.532,4.532,0,0,1,1.6,1.984,7.317,7.317,0,0,1,.576,3.024,7.431,7.431,0,0,1-.576,3.04,4.547,4.547,0,0,1-1.6,1.968A3.987,3.987,0,0,1,248.624,329.1Zm0-1.056a2.8,2.8,0,0,0,1.712-.544,3.5,3.5,0,0,0,1.168-1.584,7.792,7.792,0,0,0,0-5.024,3.5,3.5,0,0,0-1.168-1.584,2.8,2.8,0,0,0-1.712-.544,2.869,2.869,0,0,0-1.728.544,3.542,3.542,0,0,0-1.152,1.584,7.792,7.792,0,0,0,0,5.024A3.542,3.542,0,0,0,246.9,327.5,2.869,2.869,0,0,0,248.624,328.041Zm9.2-10.24V329h-1.152V318.825h-2.64V317.8Z"
                            transform="translate(-951 899.999)" fill="#00394c" />
                    </g>
                    <g id="_02b" data-name="02b" class="lotShape" onclick="lote02_2();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 02</desc>
                        <path id="Path_68" class="lot" data-name="Path 68"
                            d="M-.168-.274,77.452,0l2.483,126.61-78.7,1.934Z"
                            transform="translate(-644.233 1175.587) rotate(14)" />
                        <path id="_02-3" class="number" data-name="02"
                            d="M324.468,349.1a4.062,4.062,0,0,1-2.32-.688,4.6,4.6,0,0,1-1.584-1.968,7.622,7.622,0,0,1-.56-3.04,7.5,7.5,0,0,1,.56-3.024,4.579,4.579,0,0,1,1.584-1.984,4.063,4.063,0,0,1,2.32-.688,3.987,3.987,0,0,1,2.3.688,4.532,4.532,0,0,1,1.6,1.984,7.317,7.317,0,0,1,.576,3.024,7.431,7.431,0,0,1-.576,3.04,4.547,4.547,0,0,1-1.6,1.968A3.987,3.987,0,0,1,324.468,349.1Zm0-1.056a2.8,2.8,0,0,0,1.712-.544,3.5,3.5,0,0,0,1.168-1.584,7.792,7.792,0,0,0,0-5.024,3.5,3.5,0,0,0-1.168-1.584,2.8,2.8,0,0,0-1.712-.544,2.869,2.869,0,0,0-1.728.544,3.542,3.542,0,0,0-1.152,1.584,7.792,7.792,0,0,0,0,5.024,3.542,3.542,0,0,0,1.152,1.584A2.869,2.869,0,0,0,324.468,348.041Zm13.746-.064V349h-7.856v-.816l4.656-4.56a5.892,5.892,0,0,0,1.184-1.488,2.832,2.832,0,0,0,.32-1.28,1.845,1.845,0,0,0-.688-1.536,2.951,2.951,0,0,0-1.936-.56,3.839,3.839,0,0,0-3.056,1.248l-.816-.7a4.309,4.309,0,0,1,1.664-1.184,6.082,6.082,0,0,1,2.3-.416,4.13,4.13,0,0,1,2.7.816,2.662,2.662,0,0,1,1.008,2.208,3.8,3.8,0,0,1-.384,1.664,6.97,6.97,0,0,1-1.456,1.84l-3.808,3.744Z"
                            transform="translate(-951 899.999)" fill="#00394c" />
                    </g>
                    <g id="_03b" data-name="03b" class="lotShape" onclick="lote03_2();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 03</desc>
                        <path id="Path_70" class="lot" data-name="Path 70"
                            d="M-.177,1.106,77.452,0l2.483,126.61-77.2,1.181Z"
                            transform="translate(-567.233 1193.587) rotate(14)" />
                        <path id="_03-3" class="number" data-name="03"
                            d="M400.562,368.1a4.06,4.06,0,0,1-2.32-.688,4.6,4.6,0,0,1-1.584-1.968,7.6,7.6,0,0,1-.56-3.04,7.488,7.488,0,0,1,.56-3.024,4.579,4.579,0,0,1,1.584-1.984,4.06,4.06,0,0,1,2.32-.688,3.987,3.987,0,0,1,2.3.688,4.539,4.539,0,0,1,1.6,1.984,7.317,7.317,0,0,1,.576,3.024,7.431,7.431,0,0,1-.576,3.04,4.554,4.554,0,0,1-1.6,1.968A3.987,3.987,0,0,1,400.562,368.1Zm0-1.056a2.8,2.8,0,0,0,1.712-.544,3.5,3.5,0,0,0,1.168-1.584,7.792,7.792,0,0,0,0-5.024,3.5,3.5,0,0,0-1.168-1.584,2.8,2.8,0,0,0-1.712-.544,2.869,2.869,0,0,0-1.728.544,3.542,3.542,0,0,0-1.152,1.584,7.792,7.792,0,0,0,0,5.024,3.542,3.542,0,0,0,1.152,1.584A2.869,2.869,0,0,0,400.562,367.041Zm9.781-5.44a4.086,4.086,0,0,1,2.672.96,2.87,2.87,0,0,1,.928,2.224,3.016,3.016,0,0,1-1.84,2.88,5.167,5.167,0,0,1-2.224.432,6.869,6.869,0,0,1-2.3-.384,4.754,4.754,0,0,1-1.728-1.056l.56-.912a4.188,4.188,0,0,0,1.488.944,5.541,5.541,0,0,0,1.984.352,3.366,3.366,0,0,0,2.128-.592,2.025,2.025,0,0,0,.752-1.664,1.964,1.964,0,0,0-.752-1.632,3.635,3.635,0,0,0-2.272-.592h-.8v-.848l3.1-3.888h-5.728V356.8h7.2v.816Z"
                            transform="translate(-951 899.999)" fill="#00394c" />
                    </g>
                    <g id="_04b" data-name="04b" class="lotShape" onclick="lote04_2();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 04</desc>
                        <path id="Path_72" class="lot" data-name="Path 72"
                            d="M-.165.18,63.36,0l2.221,125.6L2.544,126.738Z"
                            transform="translate(-490.233 1212.587) rotate(14)" />
                        <path id="_04-3" class="number" data-name="04"
                            d="M470.71,385.1a4.062,4.062,0,0,1-2.32-.688,4.6,4.6,0,0,1-1.584-1.968,7.622,7.622,0,0,1-.56-3.04,7.5,7.5,0,0,1,.56-3.024,4.579,4.579,0,0,1,1.584-1.984,4.063,4.063,0,0,1,2.32-.688,3.987,3.987,0,0,1,2.3.688,4.532,4.532,0,0,1,1.6,1.984,7.317,7.317,0,0,1,.576,3.024,7.431,7.431,0,0,1-.576,3.04,4.547,4.547,0,0,1-1.6,1.968A3.987,3.987,0,0,1,470.71,385.1Zm0-1.056a2.8,2.8,0,0,0,1.712-.544,3.5,3.5,0,0,0,1.168-1.584,7.792,7.792,0,0,0,0-5.024,3.5,3.5,0,0,0-1.168-1.584,2.8,2.8,0,0,0-1.712-.544,2.869,2.869,0,0,0-1.728.544,3.542,3.542,0,0,0-1.152,1.584,7.793,7.793,0,0,0,0,5.024,3.542,3.542,0,0,0,1.152,1.584A2.869,2.869,0,0,0,470.71,384.041Zm15.65-1.984h-2.24V385h-1.152v-2.944h-6.32v-.832l5.936-7.424h1.28l-5.728,7.232H483v-2.592h1.12v2.592h2.24Z"
                            transform="translate(-951 899.999)" fill="#00394c" />
                    </g>
                    <g id="_05b" data-name="05b" class="lotShape" onclick="lote05_2();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 05</desc>
                        <path id="Path_74" class="lot" data-name="Path 74" d="M0,0H86.529L90.05,123.112l-87.25,2.1Z"
                            transform="translate(-427.233 1228.587) rotate(14)" />
                        <path id="_05-3" class="number" data-name="05"
                            d="M546.468,403.1a4.063,4.063,0,0,1-2.32-.688,4.6,4.6,0,0,1-1.584-1.968,7.621,7.621,0,0,1-.56-3.04,7.5,7.5,0,0,1,.56-3.024,4.579,4.579,0,0,1,1.584-1.984,4.063,4.063,0,0,1,2.32-.688,3.987,3.987,0,0,1,2.3.688,4.532,4.532,0,0,1,1.6,1.984,7.317,7.317,0,0,1,.576,3.024,7.431,7.431,0,0,1-.576,3.04,4.547,4.547,0,0,1-1.6,1.968A3.987,3.987,0,0,1,546.468,403.1Zm0-1.056a2.8,2.8,0,0,0,1.712-.544,3.5,3.5,0,0,0,1.168-1.584,7.793,7.793,0,0,0,0-5.024,3.5,3.5,0,0,0-1.168-1.584,2.8,2.8,0,0,0-1.712-.544,2.869,2.869,0,0,0-1.728.544,3.542,3.542,0,0,0-1.152,1.584,7.792,7.792,0,0,0,0,5.024,3.542,3.542,0,0,0,1.152,1.584A2.869,2.869,0,0,0,546.468,402.041Zm9.074-5.648a5.68,5.68,0,0,1,3.536.88,2.9,2.9,0,0,1,1.12,2.432,3.308,3.308,0,0,1-.464,1.744,3.106,3.106,0,0,1-1.36,1.216,5.212,5.212,0,0,1-2.24.432,6.822,6.822,0,0,1-2.288-.384,4.754,4.754,0,0,1-1.728-1.056l.56-.912a4.214,4.214,0,0,0,1.472.944,5.411,5.411,0,0,0,1.968.352,3.274,3.274,0,0,0,2.144-.624,2.036,2.036,0,0,0,.768-1.664,1.979,1.979,0,0,0-.864-1.744,5.226,5.226,0,0,0-2.88-.592H552.9l.576-5.616h6.128v1.024h-5.12l-.384,3.568Z"
                            transform="translate(-951 899.999)" fill="#00394c" />
                    </g>
                    <g id="_06b" data-name="06b" class="lotShape" onclick="lote06_2();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 06</desc>
                        <path id="Path_76" class="lot" data-name="Path 76"
                            d="M-.165.439,86.529,0,89.3,121.712,3.39,123.577Z"
                            transform="translate(-341.233 1249.587) rotate(14)" />
                        <path id="_06-3" class="number" data-name="06"
                            d="M631.624,424.1a4.063,4.063,0,0,1-2.32-.688,4.6,4.6,0,0,1-1.584-1.968,7.622,7.622,0,0,1-.56-3.04,7.5,7.5,0,0,1,.56-3.024,4.58,4.58,0,0,1,1.584-1.984,4.063,4.063,0,0,1,2.32-.688,3.987,3.987,0,0,1,2.3.688,4.532,4.532,0,0,1,1.6,1.984,7.317,7.317,0,0,1,.576,3.024,7.431,7.431,0,0,1-.576,3.04,4.547,4.547,0,0,1-1.6,1.968A3.987,3.987,0,0,1,631.624,424.1Zm0-1.056a2.8,2.8,0,0,0,1.712-.544,3.5,3.5,0,0,0,1.168-1.584,7.793,7.793,0,0,0,0-5.024,3.5,3.5,0,0,0-1.168-1.584,2.8,2.8,0,0,0-1.712-.544,2.869,2.869,0,0,0-1.728.544,3.542,3.542,0,0,0-1.152,1.584,7.792,7.792,0,0,0,0,5.024A3.542,3.542,0,0,0,629.9,422.5,2.869,2.869,0,0,0,631.624,423.041Zm10.77-5.744a4.382,4.382,0,0,1,1.952.416,3.159,3.159,0,0,1,1.344,1.184,3.2,3.2,0,0,1,.48,1.76,3.248,3.248,0,0,1-1.872,3.024,4.449,4.449,0,0,1-1.952.416,4.137,4.137,0,0,1-3.408-1.456,6.456,6.456,0,0,1-1.184-4.144,7.1,7.1,0,0,1,.64-3.168,4.434,4.434,0,0,1,1.792-1.952,5.238,5.238,0,0,1,2.688-.672,5.051,5.051,0,0,1,2.656.608l-.464.928a3.909,3.909,0,0,0-2.176-.528,3.7,3.7,0,0,0-2.912,1.184,4.922,4.922,0,0,0-1.056,3.408q0,.4.048.912a2.979,2.979,0,0,1,1.328-1.408A4.213,4.213,0,0,1,642.394,417.3Zm-.1,5.824a2.886,2.886,0,0,0,1.968-.656,2.244,2.244,0,0,0,.768-1.776,2.2,2.2,0,0,0-.768-1.76,3.01,3.01,0,0,0-2.048-.656,3.394,3.394,0,0,0-1.5.32,2.529,2.529,0,0,0-1.008.88,2.278,2.278,0,0,0-.032,2.432,2.53,2.53,0,0,0,1.024.88A3.54,3.54,0,0,0,642.3,423.121Z"
                            transform="translate(-951 899.999)" fill="#00394c" />
                    </g>
                    <g id="_07b" data-name="07b" class="lotShape" onclick="lote07_2();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 07</desc>
                        <path id="Path_78" class="lot" data-name="Path 78"
                            d="M.644.343,90.858,0l2.913,119.961L3.559,121.8Z"
                            transform="translate(-256.233 1270.587) rotate(14)" />
                        <path id="_07-3" class="number" data-name="07"
                            d="M719.351,445.1a4.06,4.06,0,0,1-2.32-.688,4.6,4.6,0,0,1-1.584-1.968,7.6,7.6,0,0,1-.56-3.04,7.487,7.487,0,0,1,.56-3.024,4.579,4.579,0,0,1,1.584-1.984,4.06,4.06,0,0,1,2.32-.688,3.987,3.987,0,0,1,2.3.688,4.539,4.539,0,0,1,1.6,1.984,7.317,7.317,0,0,1,.576,3.024,7.431,7.431,0,0,1-.576,3.04,4.555,4.555,0,0,1-1.6,1.968A3.987,3.987,0,0,1,719.351,445.1Zm0-1.056a2.8,2.8,0,0,0,1.712-.544,3.5,3.5,0,0,0,1.168-1.584,7.793,7.793,0,0,0,0-5.024,3.5,3.5,0,0,0-1.168-1.584,2.8,2.8,0,0,0-1.712-.544,2.869,2.869,0,0,0-1.728.544,3.542,3.542,0,0,0-1.152,1.584,7.792,7.792,0,0,0,0,5.024,3.542,3.542,0,0,0,1.152,1.584A2.869,2.869,0,0,0,719.351,444.041Zm13.908-10.24v.816L728.571,445h-1.248l4.608-10.176h-5.76v2.1h-1.136V433.8Z"
                            transform="translate(-951 899.999)" fill="#00394c" />
                    </g>
                    <g id="_08b" data-name="08b" class="lotShape" onclick="lote08_2();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 08</desc>
                        <path id="Path_80" class="lot" data-name="Path 80"
                            d="M.248,1.686l84.458-.224,16.341,168.056-97.232,1.97Z"
                            transform="translate(-155.233 1242.587) rotate(14)" />
                        <path id="_08" class="number" data-name="08"
                            d="M814.4,445.1a4.06,4.06,0,0,1-2.32-.688,4.6,4.6,0,0,1-1.584-1.968,7.6,7.6,0,0,1-.56-3.04,7.487,7.487,0,0,1,.56-3.024,4.579,4.579,0,0,1,1.584-1.984,4.06,4.06,0,0,1,2.32-.688,3.987,3.987,0,0,1,2.3.688,4.539,4.539,0,0,1,1.6,1.984,7.317,7.317,0,0,1,.576,3.024,7.431,7.431,0,0,1-.576,3.04,4.554,4.554,0,0,1-1.6,1.968A3.987,3.987,0,0,1,814.4,445.1Zm0-1.056a2.8,2.8,0,0,0,1.712-.544,3.5,3.5,0,0,0,1.168-1.584,7.793,7.793,0,0,0,0-5.024,3.5,3.5,0,0,0-1.168-1.584,2.8,2.8,0,0,0-1.712-.544,2.869,2.869,0,0,0-1.728.544,3.542,3.542,0,0,0-1.152,1.584,7.792,7.792,0,0,0,0,5.024,3.542,3.542,0,0,0,1.152,1.584A2.869,2.869,0,0,0,814.4,444.041Zm12.545-4.912a3.356,3.356,0,0,1,1.616,1.056,2.593,2.593,0,0,1,.576,1.7,2.86,2.86,0,0,1-.528,1.712,3.4,3.4,0,0,1-1.52,1.12,6.275,6.275,0,0,1-2.3.384,5.174,5.174,0,0,1-3.168-.864,2.783,2.783,0,0,1-1.152-2.352,2.654,2.654,0,0,1,.544-1.7,3.36,3.36,0,0,1,1.616-1.056,2.819,2.819,0,0,1-1.312-.96,2.741,2.741,0,0,1,.608-3.664,4.682,4.682,0,0,1,2.864-.8,5.325,5.325,0,0,1,2.064.368,3.071,3.071,0,0,1,1.392,1.024,2.567,2.567,0,0,1,.5,1.568,2.49,2.49,0,0,1-.464,1.5A2.921,2.921,0,0,1,826.943,439.129Zm-4.928-2.432a1.737,1.737,0,0,0,.736,1.472,4.067,4.067,0,0,0,4.064,0,1.708,1.708,0,0,0,.752-1.456,1.728,1.728,0,0,0-.768-1.488,4.037,4.037,0,0,0-4.048,0A1.737,1.737,0,0,0,822.015,436.7Zm2.768,7.424a3.871,3.871,0,0,0,2.32-.608,1.922,1.922,0,0,0,.848-1.648,1.883,1.883,0,0,0-.848-1.632,3.871,3.871,0,0,0-2.32-.608,3.919,3.919,0,0,0-2.32.608,1.9,1.9,0,0,0-.832,1.632,1.951,1.951,0,0,0,.832,1.664A3.947,3.947,0,0,0,824.783,444.121Z"
                            transform="translate(-951 899.999)" fill="#00394c" />
                    </g>
                    <g id="_11" data-name="11" class="lotShape" onclick="lote11();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 11</desc>
                        <path id="Path_60" class="lot" data-name="Path 60"
                            d="M0,0H63C85.176-.184,87.173,14.119,87.173,21.045L88,87.29.776,88.743Z"
                            transform="translate(-349.616 1192.188) rotate(-164.991)" />
                        <path id="_11-2" class="number" data-name="11"
                            d="M569.155,229.8V241H568V230.825h-2.64V229.8Zm5.781,0V241h-1.152V230.825h-2.64V229.8Z"
                            transform="translate(-952 896.999)" fill="#00394c" />
                    </g>
                    <g id="_12" data-name="12" class="lotShape" onclick="lote12();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 12</desc>
                        <path id="Path_86" class="lot" data-name="Path 86"
                            d="M.578-.187c76.807,0,80.015-2.149,86.989-1.225l.174,84.472L.776,85.425Z"
                            transform="translate(-325.941 1103.832) rotate(-164.991)" />
                        <path id="_12-2" class="number" data-name="12"
                            d="M590,149.8V161h-1.152V150.825h-2.64V149.8Zm10.325,10.176V161h-7.856v-.816l4.656-4.56a5.939,5.939,0,0,0,1.184-1.488,2.844,2.844,0,0,0,.32-1.28,1.848,1.848,0,0,0-.688-1.536,2.953,2.953,0,0,0-1.936-.56,3.838,3.838,0,0,0-3.056,1.248l-.816-.7a4.3,4.3,0,0,1,1.664-1.184,6.075,6.075,0,0,1,2.3-.416,4.133,4.133,0,0,1,2.7.816,2.662,2.662,0,0,1,1.008,2.208,3.8,3.8,0,0,1-.384,1.664,6.991,6.991,0,0,1-1.456,1.84l-3.808,3.744Z"
                            transform="translate(-952 896.999)" fill="#00394c" />
                    </g>
                    <g id="_10" data-name="10" class="lotShape" onclick="lote10();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 10</desc>
                        <path id="Path_62" class="lot" data-name="Path 62" d="M2.636,1.24,116.247-.032,112.982,178H0Z"
                            transform="translate(-304.685 1020.25) rotate(14)" />
                        <path id="_10-2" class="number" data-name="10"
                            d="M674.249,211.8V223H673.1V212.825h-2.64V211.8Zm7.141,11.3a4.06,4.06,0,0,1-2.32-.688,4.6,4.6,0,0,1-1.584-1.968,7.6,7.6,0,0,1-.56-3.04,7.487,7.487,0,0,1,.56-3.024,4.579,4.579,0,0,1,1.584-1.984,4.06,4.06,0,0,1,2.32-.688,3.987,3.987,0,0,1,2.3.688,4.539,4.539,0,0,1,1.6,1.984,7.317,7.317,0,0,1,.576,3.024,7.431,7.431,0,0,1-.576,3.04,4.554,4.554,0,0,1-1.6,1.968A3.987,3.987,0,0,1,681.39,223.1Zm0-1.056a2.8,2.8,0,0,0,1.712-.544,3.5,3.5,0,0,0,1.168-1.584,7.793,7.793,0,0,0,0-5.024A3.5,3.5,0,0,0,683.1,213.3a2.8,2.8,0,0,0-1.712-.544,2.869,2.869,0,0,0-1.728.544,3.542,3.542,0,0,0-1.152,1.584,7.792,7.792,0,0,0,0,5.024,3.542,3.542,0,0,0,1.152,1.584A2.869,2.869,0,0,0,681.39,222.041Z"
                            transform="translate(-952 896.999)" fill="#00394c" />
                    </g>
                    <g id="_09b" data-name="09b" class="lotShape" onclick="lote09_2();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 09</desc>
                        <path id="Path_64" class="lot" data-name="Path 64"
                            d="M3.871-.175,151-.484l17.4,178.255L.72,178.053Z"
                            transform="translate(-193.685 1048.25) rotate(14)" />
                        <path id="_09" class="number" data-name="09"
                            d="M810.624,255.1a4.063,4.063,0,0,1-2.32-.688,4.6,4.6,0,0,1-1.584-1.968,7.622,7.622,0,0,1-.56-3.04,7.5,7.5,0,0,1,.56-3.024,4.58,4.58,0,0,1,1.584-1.984,4.063,4.063,0,0,1,2.32-.688,3.987,3.987,0,0,1,2.3.688,4.532,4.532,0,0,1,1.6,1.984,7.317,7.317,0,0,1,.576,3.024,7.431,7.431,0,0,1-.576,3.04,4.547,4.547,0,0,1-1.6,1.968A3.987,3.987,0,0,1,810.624,255.1Zm0-1.056a2.8,2.8,0,0,0,1.712-.544,3.5,3.5,0,0,0,1.168-1.584,7.793,7.793,0,0,0,0-5.024,3.5,3.5,0,0,0-1.168-1.584,2.8,2.8,0,0,0-1.712-.544,2.869,2.869,0,0,0-1.728.544,3.542,3.542,0,0,0-1.152,1.584,7.792,7.792,0,0,0,0,5.024A3.542,3.542,0,0,0,808.9,253.5,2.869,2.869,0,0,0,810.624,254.041Zm9.618-10.336a4.119,4.119,0,0,1,3.408,1.472,6.389,6.389,0,0,1,1.184,4.128,7.1,7.1,0,0,1-.64,3.168,4.534,4.534,0,0,1-1.792,1.968,5.342,5.342,0,0,1-2.688.656,5.051,5.051,0,0,1-2.656-.608l.464-.928a3.909,3.909,0,0,0,2.176.528,3.726,3.726,0,0,0,2.912-1.168,4.984,4.984,0,0,0,1.056-3.424q0-.415-.048-.912a3.058,3.058,0,0,1-1.328,1.424,4.314,4.314,0,0,1-2.1.5,4.486,4.486,0,0,1-1.968-.416,3.221,3.221,0,0,1-1.328-1.168,3.535,3.535,0,0,1,.016-3.584,3.229,3.229,0,0,1,1.36-1.2A4.408,4.408,0,0,1,820.242,243.705Zm.128,5.824a3.293,3.293,0,0,0,1.488-.32,2.51,2.51,0,0,0,1.024-.88,2.225,2.225,0,0,0,.368-1.248,2.134,2.134,0,0,0-.352-1.184,2.411,2.411,0,0,0-1.008-.88,3.54,3.54,0,0,0-1.6-.336,2.9,2.9,0,0,0-1.984.672,2.436,2.436,0,0,0,0,3.52A3.073,3.073,0,0,0,820.37,249.529Z"
                            transform="translate(-952 896.999)" fill="#00394c" />
                    </g>
                    <g id="_14" data-name="14" class="lotShape" onclick="lote14();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 14</desc>
                        <path id="Path_84" class="lot" data-name="Path 84"
                            d="M842.886,400.713l16.743-67.8,336.409-8.347-23.93,156.425Z"
                            transform="translate(-1219 601)" />
                        <path id="_14-2" class="number" data-name="14"
                            d="M761.256,77.8V89H760.1V78.825h-2.64V77.8Zm12.2,8.256h-2.24V89h-1.152V86.057h-6.32v-.832l5.936-7.424h1.28l-5.728,7.232h4.864V82.441h1.12v2.592h2.24Z"
                            transform="translate(-952 896.999)" fill="#00394c" />
                    </g>
                    <g id="_08-2" data-name="08" class="lotShape" onclick="lote08_2();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 08</desc>
                        <path id="Path_82" class="lot" data-name="Path 82"
                            d="M.484,1.941,53.392-12.4l1,54.556,23.623.14L78,58H0Z"
                            transform="translate(-480.683 934.514) rotate(14)" />
                        <path id="_08-3" class="number" data-name="08"
                            d="M488.4,72.1a4.063,4.063,0,0,1-2.32-.688,4.592,4.592,0,0,1-1.584-1.968,7.606,7.606,0,0,1-.56-3.04,7.49,7.49,0,0,1,.56-3.024,4.577,4.577,0,0,1,1.584-1.984,4.063,4.063,0,0,1,2.32-.688,3.989,3.989,0,0,1,2.3.688,4.536,4.536,0,0,1,1.6,1.984,7.319,7.319,0,0,1,.576,3.024,7.432,7.432,0,0,1-.576,3.04,4.551,4.551,0,0,1-1.6,1.968A3.99,3.99,0,0,1,488.4,72.1Zm0-1.056a2.8,2.8,0,0,0,1.712-.544,3.5,3.5,0,0,0,1.168-1.584,7.793,7.793,0,0,0,0-5.024,3.5,3.5,0,0,0-1.168-1.584,2.8,2.8,0,0,0-1.712-.544,2.871,2.871,0,0,0-1.728.544,3.537,3.537,0,0,0-1.152,1.584,7.792,7.792,0,0,0,0,5.024A3.538,3.538,0,0,0,486.67,70.5,2.871,2.871,0,0,0,488.4,71.041Zm12.545-4.912a3.35,3.35,0,0,1,1.616,1.056,2.592,2.592,0,0,1,.576,1.7,2.861,2.861,0,0,1-.528,1.712,3.4,3.4,0,0,1-1.52,1.12,6.274,6.274,0,0,1-2.3.384,5.173,5.173,0,0,1-3.168-.864,2.783,2.783,0,0,1-1.152-2.352,2.653,2.653,0,0,1,.544-1.7,3.355,3.355,0,0,1,1.616-1.056,2.819,2.819,0,0,1-1.312-.96,2.741,2.741,0,0,1,.608-3.664,4.679,4.679,0,0,1,2.864-.8,5.317,5.317,0,0,1,2.064.368,3.068,3.068,0,0,1,1.392,1.024,2.567,2.567,0,0,1,.5,1.568,2.489,2.489,0,0,1-.464,1.5A2.921,2.921,0,0,1,500.943,66.129ZM496.015,63.7a1.737,1.737,0,0,0,.736,1.472,4.067,4.067,0,0,0,4.064,0,1.707,1.707,0,0,0,.752-1.456,1.727,1.727,0,0,0-.768-1.488,4.037,4.037,0,0,0-4.048,0A1.737,1.737,0,0,0,496.015,63.7Zm2.768,7.424a3.869,3.869,0,0,0,2.32-.608,1.922,1.922,0,0,0,.848-1.648,1.882,1.882,0,0,0-.848-1.632,3.868,3.868,0,0,0-2.32-.608,3.916,3.916,0,0,0-2.32.608,1.9,1.9,0,0,0-.832,1.632,1.952,1.952,0,0,0,.832,1.664A3.95,3.95,0,0,0,498.783,71.121Z"
                            transform="translate(-951 902.999)" fill="#00394c" />
                    </g>
                    <g id="_13" data-name="13" class="lotShape" onclick="lote13();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 13</desc>
                        <path id="Path_85" class="lot" data-name="Path 85"
                            d="M840.4,400.171l-10.056-2.256,15.828-65.036H857Z" transform="translate(-1219 601)" />
                        <path id="_13-2" data-name="13"
                            d="M557.03,54.8V66h-1.152V55.825h-2.64V54.8Zm6.485,4.8a4.086,4.086,0,0,1,2.672.96,2.869,2.869,0,0,1,.928,2.224,3.016,3.016,0,0,1-1.84,2.88,5.167,5.167,0,0,1-2.224.432,6.869,6.869,0,0,1-2.3-.384,4.746,4.746,0,0,1-1.728-1.056l.56-.912a4.194,4.194,0,0,0,1.488.944,5.55,5.55,0,0,0,1.984.352,3.369,3.369,0,0,0,2.128-.592,2.025,2.025,0,0,0,.752-1.664,1.963,1.963,0,0,0-.752-1.632,3.637,3.637,0,0,0-2.272-.592h-.8v-.848l3.1-3.888h-5.728V54.8h7.2v.816Z"
                            transform="translate(-951 902.999)" fill="#00394c" />
                    </g>
                    <g id="_09-2" data-name="09" class="lotShape" onclick="lote09();" data-toggle="modal"
                        data-target="#miModal">
                        <desc>Lote 09</desc>
                        <path id="Path_88" class="lot" data-name="Path 88"
                            d="M-.756-12.876l22.838-6.339-.05,59.891L.026,40.422Z"
                            transform="translate(-426.341 948.063) rotate(14)" />
                        <path id="_09-3" class="number" data-name="09"
                            d="M526.624,66.1a4.066,4.066,0,0,1-2.32-.688,4.592,4.592,0,0,1-1.584-1.968,7.624,7.624,0,0,1-.56-3.04,7.507,7.507,0,0,1,.56-3.024,4.577,4.577,0,0,1,1.584-1.984,4.065,4.065,0,0,1,2.32-.688,3.989,3.989,0,0,1,2.3.688,4.53,4.53,0,0,1,1.6,1.984A7.319,7.319,0,0,1,531.1,60.4a7.433,7.433,0,0,1-.576,3.04,4.544,4.544,0,0,1-1.6,1.968A3.99,3.99,0,0,1,526.624,66.1Zm0-1.056a2.8,2.8,0,0,0,1.712-.544,3.492,3.492,0,0,0,1.168-1.584,7.793,7.793,0,0,0,0-5.024,3.491,3.491,0,0,0-1.168-1.584,2.8,2.8,0,0,0-1.712-.544,2.871,2.871,0,0,0-1.728.544,3.537,3.537,0,0,0-1.152,1.584,7.792,7.792,0,0,0,0,5.024A3.538,3.538,0,0,0,524.9,64.5,2.871,2.871,0,0,0,526.624,65.041Zm9.618-10.336a4.118,4.118,0,0,1,3.408,1.472,6.388,6.388,0,0,1,1.184,4.128,7.1,7.1,0,0,1-.64,3.168,4.534,4.534,0,0,1-1.792,1.968,5.339,5.339,0,0,1-2.688.656,5.048,5.048,0,0,1-2.656-.608l.464-.928a3.909,3.909,0,0,0,2.176.528,3.727,3.727,0,0,0,2.912-1.168,4.984,4.984,0,0,0,1.056-3.424q0-.416-.048-.912a3.06,3.06,0,0,1-1.328,1.424,4.319,4.319,0,0,1-2.1.5,4.482,4.482,0,0,1-1.968-.416,3.221,3.221,0,0,1-1.328-1.168,3.535,3.535,0,0,1,.016-3.584,3.233,3.233,0,0,1,1.36-1.2A4.408,4.408,0,0,1,536.242,54.705Zm.128,5.824a3.289,3.289,0,0,0,1.488-.32,2.511,2.511,0,0,0,1.024-.88,2.226,2.226,0,0,0,.368-1.248A2.134,2.134,0,0,0,538.9,56.9a2.413,2.413,0,0,0-1.008-.88,3.54,3.54,0,0,0-1.6-.336,2.9,2.9,0,0,0-1.984.672,2.436,2.436,0,0,0,0,3.52A3.071,3.071,0,0,0,536.37,60.529Z"
                            transform="translate(-951 902.999)" fill="#00394c" />
                    </g>
                </g>
            </svg>
            <button class="btnView">VIEW LOTS & DESCRIPTION</button>
        </div>
        <!-- fin mapa de lotes para escriotrio -->
        <!--modal lotes + informacion de pies-->
        <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row contenedoraMap">
                            <div class="col-lg-8 colMap">

                                <img id="imgModal" class="d-block w-100" src="img/map.png" alt="">
                            </div>
                            <div class="col-lg-4 infoLote">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h1 id="txtLotes">Lotes</h1>
                                <p id="piesLotes">175</p>
                                <a href="downloads/LAGUNAINDUSTRIALPARK-PRESENTATION.pptx" download>
                                    <button class="btnLote"><?php echo $btnModal ?></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--fin modal lotes + informacion de pies-->
    </div>
    <!----------------------------------fin columnas our model---------------------------------->

    <!----------------------------------columnas download information--------------------------->
    <section class="cajaDown">
        <div class="row contenedor">
            <div class="cajaImg col-md-12">
                <div class="col-md-4 industrial">
                    <div class="info">
                        <img src="img/rec.png" alt="">
                        <h1><?php echo $txtIndu ?><br> <?php echo $txtIndu2 ?></h1>
                        <p style="width: 85%;"><?php echo $desIndu ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 bts">
                    <div class="info">
                        <img src="img/rec.png" alt="">
                        <h1><?php echo $txtBts ?> <br> <?php echo $txtBts2 ?></h1>
                        <p style="width: 95%;"><?php echo $desBts ?></p>
                    </div>
                </div>
                <div class="col-md-4 buldi">
                    <div class="info">
                        <img src="img/rec.png" alt="">
                        <h1><?php echo $txtBuldi ?> <br> <?php echo $txtBuldi2 ?></h1>
                        <p style="width: 90%;"><?php echo $desBuldi ?></p>
                    </div>
                </div>
            </div>
            <!--slider movil-->
            <div class="col-md-12 border slMovil" style="overflow: hidden; height: 400px; display: none;">
                <div id="sliderMov" class="sliderMov">
                    <div class="wrapper" id="prev next">
                        <div id="items" class="items">
                            <div class="slideMov indu">
                                <div class="info">
                                    <img src="img/rec.png" alt="">
                                    <h1>Industrial Lots <br> for Sale</h1>
                                    <p style="width: 85%;">We sell fully developed Industrial Lots ranging from 1.1
                                        hectares.</p>
                                </div>
                            </div>
                            <div class="slideMov imgBts">
                                <div class="info">
                                    <img src="img/rec.png" alt="">
                                    <h1>BTS <br> for Lease/Sale</h1>
                                    <p style="width: 95%;">We build Industrial Warehouses according to the client's
                                        needs, with the
                                        flexibility that they can be for lease/sale.</p>
                                </div>
                            </div>
                            <div class="slideMov imgBuldi">
                                <div class="info">
                                    <img src="img/rec.png" alt="">
                                    <h1>Inventory Buildings <br> for Lease/Sale</h1>
                                    <p style="width: 90%;">We will have class A inventory ships ready for immediate
                                        occupation,
                                        which can be for lease/sale.</p>
                                </div>
                            </div>
                            <a id="prev" class="control prev" draggable="false"></a> <a id="next" class="control next"
                                draggable="false"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--fin slider movil-->
    </section>
    <!--Slider tarjetas download information-->
    <!------------------------------Download information + button------------------------------>
    <div class="row contenedor subir">
        <div class="col-md-6">
            <div class="cajaInfo">
                <img src="icons/libro.png" alt="">
                <h1><?php echo $txtDown ?><br>
                    <p><?php echo $desDown ?></p>
                </h1>
            </div>
        </div>
        <div class="col-md-6 text-center">
            <div class="btnDownload">
                <a href="downloads/LAGUNAINDUSTRIALPARK-PRESENTATION.pptx"
                    download><button><?php echo $btnDown ?></button></a>
            </div>

        </div>
    </div>
    <!------------------------------columnas strategic location------------------------------->
    <div class="row contenedor">
        <div class="col-md-6 text-center cajaAbout">
            <img class="imgAbout" src="img/ubicacion.png" alt="">
        </div>
        <div class="col-md-6 cajaAbout">
            <div class="titulo">
                <img class="rectangulo" src="img/rectangulo.png" alt="">
                <p class="txtTit"><?php echo $loc ?></p>
            </div>
            <h1 class="txtUni">A<?php echo $txtLoc ?></h1>
            <p class="txtDesc"><?php echo $desLoc ?></p>
            <ul class="txtLista">
                <li><?php echo $lis1 ?></li>
                <li><?php echo $lis2 ?></li>
                <li><?php echo $lis3 ?></li>
                <li><?php echo $lis4 ?></li>
                <li><?php echo $lis5 ?></li>
                <li><?php echo $lis6 ?></li>
            </ul>
            <a href="#contacto"><button class="btnContact"><?php echo $btnLoc ?></button></a>
        </div>
    </div>
    <!------------------------------fin columnas strategic location--------------------------->

    <!------------------------------columnas population around------------------------------->
    <center>
        <h1 class="txtPop"><?php echo $txtPop ?></h1>
    </center>
    <div class="row contenedor cajaPop">
        <div class="col-lg-7 col-md-12 col-sm-7 col-xs-12 imgPop">
            <img src="img/circulo.png" alt="" style="width: 90%; margin-top: 25px;">
        </div>
        <div class="col-lg-5 col-md-12 col-sm-5 col-xs-12 imgList">
            <img src="img/List.png" alt="" style="width: 85%;">
        </div>
    </div>
    <!------------------------------fin columnas population around------------------------------->

    <!------------------------------columnas key benefits------------------------------------>
    <div class="row cajaKey">
        <div class="col-md-12 text-center ourModel">
            <h1><?php echo $txtKey ?></h1>
            <p class="txtBenefit"><?php echo $desKey ?></p>
        </div>
        <div class="col-lg-4">
            <div class="infoKey">
                <img src="icons/maletin.png" alt="">
                <h1><?php echo $txtKey1 ?><br>
                    <p><?php echo $txtKey2 ?></p>
                </h1>
            </div>

        </div>
        <div class="col-lg-4">
            <div class="infoKey">
                <img src="icons/gorro.png" alt="">
                <h1><?php echo $txtKey3 ?><br>
                    <p><?php echo $txtKey4 ?></p>
                </h1>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="infoKey">
                <img src="icons/qualiti.png" alt="">
                <h1><?php echo $txtKey5 ?><br>
                    <p><?php echo $txtKey6 ?></p>
                </h1>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="infoKey">
                <img src="icons/seguridad.png" alt="">
                <h1><?php echo $txtKey7 ?><br>
                    <p><?php echo $txtKey8 ?></p>
                </h1>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="infoKey">
                <img src="icons/avion.png" alt="">
                <h1><?php echo $txtKey9 ?><br>
                    <p><?php echo $txtKey10 ?></p>
                </h1>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="infoKey">
                <img src="icons/tren.png" alt="">
                <h1><?php echo $txtKey11 ?><br>
                    <p><?php echo $txtKey12 ?></p>
                </h1>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="infoKey">
                <img src="icons/ubi.png" alt="">
                <h1><?php echo $txtKey13 ?><br>
                    <p><?php echo $txtKey14 ?></p>
                </h1>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="infoKey">
                <img src="icons/ubi.png" alt="">
                <h1><?php echo $txtKey15 ?><br>
                    <p><?php echo $txtKey16 ?></p>
                </h1>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="infoKey">
                <img src="icons/ubi.png" alt="">
                <h1><?php echo $txtKey17 ?><br>
                    <p><?php echo $txtKey18 ?></p>
                </h1>
            </div>
        </div>
    </div>
    <!------------------------------fin columnas key benefits--------------------------------------->

    <!------------------------------columnas solid infrastructure----------------------------------->
    <div class="row cajaSolid">
        <div class="col-lg-4 cajaFlotante">
            <div class="titulo">
                <img class="rectangulo imgLocation" src="img/rectangulo.png" alt="">
                <p class="txtTit txtLocation" style="font-weight: 900; font-size: 15px;"><?php echo $solid ?></p>
            </div>
            <h1><?php echo $txtSolid ?></h1>
            <p><?php echo $desSolid ?></p>
            <button><?php echo $btnSolid ?></button>
        </div>
        <div class="col-lg-4 col-md-8 colInfo1">
            <div class="infoSolid" style="margin-bottom: 20px;">
                <img src="icons/icon-global.png" alt="">
                <h1><?php echo $txtSol1 ?><br>
                    <p><?php echo $txtSol2 ?></p>
                </h1>
            </div>
            <div class="infoSolid">
                <img src="icons/icon-telecomunicaciones.png" alt="">
                <h1><?php echo $txtSol3 ?><br>
                    <p><?php echo $txtSol4 ?></p>
                </h1>
            </div>
            <div class="infoSolid">
                <img src="icons/icon-cam.png" alt="">
                <h1><?php echo $txtSol5 ?><br>
                    <p><?php echo $txtSol6 ?></p>
                </h1>
            </div>
        </div>
        <div class="col-lg-4 col-md-8 colInfo2">
            <div class="infoSolid">
                <img src="icons/icon-agua.png" alt="">
                <h1><?php echo $txtSol7 ?><br>
                    <p><?php echo $txtSol8 ?></p>
                </h1>
            </div>
            <div class="infoSolid">
                <img src="icons/icon-parque.png" alt="">
                <h1><?php echo $txtSol9 ?><br>
                    <p><?php echo $txtSol10 ?></p>
                </h1>
            </div>
            <div class="infoSolid">
                <img src="icons/icon-energy.png" alt="">
                <h1><?php echo $txtSol11 ?><br>
                    <p><?php echo $txtSol12 ?></p>
                </h1>
            </div>

        </div>
    </div>
    <!------------------------------fin columnas solid infrastructure------------------------------->
    <!------------------------------columnas metro bus---------------------------------------------->
    <div class="cajaContenedora">
        <div class="row cajaMetro contenedor">
            <div class="col-lg-6 infoBus">
                <div class="titulo">
                    <img class="rectangulo" src="img/rectangulo.png" alt="">
                    <p class="txtTit"><?php echo $titMetro ?></p>
                </div>
                <h1><?php echo $txtMetro ?></h1>
                <h3><?php echo $desMetro ?></h3>
            </div>
            <div class="col-md-6 text-center cajaAbout">
                <img class="imgBus" src="img/metroBus.png" alt="">
            </div>
        </div>
    </div>

    <!------------------------------fin columnas metro bus------------------------------->

    <!------------------------------columnas get to know----------------------------------->
    <div class="row cajaVideo">
        <div class="col-lg-6 infoVideo">
            <img src="img/rec.png" alt="" style="position: relative;">
            <h1><?php echo $titGet ?> <br> <?php echo $titGet2 ?> </h1>
            <p><?php echo $txtGet ?></p>
            <button><?php echo $btnViewTour ?></button>
        </div>
        <div class="col-lg-6 infoVideo">
            <img src="img/rec.png" alt="" style="position: relative;">
            <h1>Get to know Lagunassss <br> Industrial Park</h1>
            <p>Get to know Laguna Industrial Park</p>
            <button>VIEW VIRTUAL TOUR</button>
        </div>
    </div>
    <!------------------------------columnas get to know----------------------------------->

    <!------------------------------columnas empresas----------------------------------->
    <div class="txtFinal text-center">
        <h1><?php echo $titEmp ?><br> <?php echo $titEmp2 ?></h1>
        <p><?php echo $txtEmp ?><br> <?php echo $txtEmp2 ?> </p>
    </div>
    <div class="row contenedor justify-content-center text-center imgEscritorio" style="margin-bottom: 25px;">
        <div class="col-lg-2 imgEmpresas"><img src="img/image1.png" alt=""></div>
        <div class="col-lg-2 imgEmpresas"><img src="img/image2.png" alt=""></div>
        <div class="col-lg-2 imgEmpresas"><img src="img/image3.png" alt=""></div>
        <div class="col-lg-2 imgEmpresas"><img src="img/image4.png" alt=""></div>
        <div class="col-lg-2 imgEmpresas"><img src="img/image5.png" alt=""></div>
    </div>
    <div class="row contenedor justify-content-center text-center imgEscritorio" style="margin-bottom: 25px;">
        <div class="col-lg-2 imgEmpresas"><img src="img/image6.png" alt=""></div>
        <div class="col-lg-2 imgEmpresas"><img src="img/image7.png" alt=""></div>
        <div class="col-lg-2 imgEmpresas"><img src="img/image8.png" alt=""></div>
        <div class="col-lg-2 imgEmpresas"><img src="img/image9.png" alt=""></div>
        <div class="col-lg-2 imgEmpresas"><img src="img/image10.png" alt=""></div>
    </div>
    <div class="row contenedor justify-content-center text-center imgEscritorio" style="margin-bottom: 25px;">
        <div class="col-lg-2"><img src="img/image11.png" alt=""></div>
        <div class="col-lg-2 imgEmpresas"><img src="img/image12.png" alt=""></div>
        <div class="col-lg-2 imgEmpresas"><img src="img/image13.png" alt=""></div>
        <div class="col-lg-2 imgEmpresas"><img src="img/image14.png" alt=""></div>
        <div class="col-lg-2 imgEmpresas"><img src="img/image15.png" alt=""></div>
    </div>
    <div class="row contenedor justify-content-center imgEscritorio">
        <div class="col-lg-2 imgEmpresas"><img src="img/image16.png" alt=""></div>
    </div>
    <!--imagenes movil-->
    <div class="contenedor empresasMovil">
        <div class="row justify-content-between" style="margin-top: 35px;">
            <div class="col-xs-4">
                <img src="img/image1.png" alt="" width="100">
            </div>
            <div class="col-xs-4">
                <img src="img/image2.png" alt="" width="100">
            </div>
            <div class="col-xs-4">
                <img src="img/image3.png" alt="" width="100">
            </div>
        </div>
        <div class="row justify-content-between" style="margin-top: 35px;">
            <div class="col-xs-4">
                <img src="img/image4.png" alt="" width="100">
            </div>
            <div class="col-xs-4">
                <img src="img/image5.png" alt="" width="100">
            </div>
            <div class="col-xs-4">
                <img src="img/image6.png" alt="" width="100">
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 35px;">
            <div class="col-xs-12 btnView">
                <button>VIEW ALL COMPANIES</button>
            </div>
        </div>
    </div>
    <!------------------------------fin columnas empresas-------------------------------------->
    <!------------------------------contacto--------------------------------------------------->
    <!--<section id="contact" class="contact-section">
        <div class="contact-container">
            <div class="left-section">
                <p><?php echo $titCon ?> <br> <?php echo $titCon2 ?></p>
                <p><?php echo $txtMore ?></p>
                <div class="contact-icons">
                    <a href=""><i class="fas fa-envelope"></i></a>
                    <a href=""><i class="fas fa-phone-alt"></i></a>
                    <a href=""><i class="fab fa-whatsapp"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="right-section">
                <form action="./mail.php" method="post">
                    <div class="contact-row">
                        <div class="contact-name">
                            <label for="fname"><?php echo $txtMore ?></label>
                            <input id="fname" type="text" name="fname" placeholder="John Doe">
                        </div>
                        <div class="contact-mail">
                            <label for="mail"><?php echo $txtEmail ?></label>
                            <input id="mail" type="email" name="mail" placeholder="mail@example.com">
                        </div>
                    </div>
                    <label for=""><?php echo $txtMessage ?></label>
                    <textarea id="message" name="message" rows="5" cols="50"
                        placeholder="Hello, I’m interested in..."></textarea><br>
                    <input type="submit" class="btnSend" value="<?php echo $btnSend ?>">
                </form>
            </div>
        </div>
    </section>-->
    <!------------------------------fin contacto--------------------------------------------------->
    <!------------------------------footer--------------------------------------------------------->
    <!--<footer>
        <div class="footer">
            <div class="footer-logos">
                <img src="img/LIPFL.png" alt="Laguna Industrial Park">
                <img src="img/AREFL.png" alt="ARE Desarrollos">
            </div>
            <div class="footer-contact">
                <p class="footer-title">Un desarrollo de Are Desarrollos</p>
                <a href="tel:4441419138">Celular / Mobile +52 (444) 141-9138</a>
                <a href="tel:8717600297">Oficina / Office +52 (871) 760 0297, 98 y 99 extensión 112</a>
                <a href="mailto:bernardo@lagunaIndustrialpark.com">bernardo@lagunaIndustrialpark.com</a>
            </div>
            <div class="footer-links">
                <p class="footer-title">Laguna Industrial Park</p>
                <div class="footer-links-container">
                    <a href="#home">Home</a>
                    <a href="#infra">Infrastructure</a>
                    <a href="#location">Location</a>
                    <a href="#benefits">Benefits</a>
                    <a href="#gallery"><?php echo $galery ?></a>
                    <a href="#contact">Contact</a>
                </div>
            </div>
        </div>
        <div class="last-footer">
            <div>2020 Laguna Park. All rights reserved. Terms and Conditions.</div>
            <div>Website by <a href="https://ingenieriadigital.mx">Ingeniería Digital MX.</a></div>
        </div>
    </footer>-->
    <!------------------------------fin fotter----------------------------------------------------->
    <!--google translate-->
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <!--jquery y librerias-->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    <!--bootstrap-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!--personales-->
    <script src="js/lightbox.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/header.js"></script>
    <script src="js/lotes.js"></script>

</body>

</html>