<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <title>RealTickets - Registro</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row evento-header-section">
            <div class="evento-header-opacity">
                <div class="col">
                    <!-- NAV -->
                    <nav class="nav fixed-top">
                        <!-- BACK -->
                        <a href="./evento.php"><img class="menu-mobile" src="./imgs/vectores/Back.svg"
                                alt="Botón atrás"></a>
                        <!-- BACK -->
                        <p id="realtickets"><a class="logo-link" href="./index.php">RealTickets</a></p>
                    </nav>
                    <!-- NAV -->
                    <!-- HEADER -->
                    <header>
                        <!-- BÚSQUEDA -->
                        <div class="header-buscar searchbar">
                            <svg class="buscar-icon" xmlns:dc="http://purl.org/dc/elements/1.1/"
                                xmlns:cc="http://creativecommons.org/ns#"
                                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                                xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="4.5247326mm"
                                height="5.2846856mm" viewBox="0 0 4.5247326 5.2846856" version="1.1" id="svg8"
                                inkscape:version="1.0.1 (3bc2e813f5, 2020-09-07)" sodipodi:docname="Search.svg">
                                <defs id="defs2" />
                                <sodipodi:namedview id="base" pagecolor="#ffffff" bordercolor="#666666"
                                    borderopacity="1.0" inkscape:pageopacity="0.0" inkscape:pageshadow="2"
                                    inkscape:zoom="2.8" inkscape:cx="24.744134" inkscape:cy="9.7211803"
                                    inkscape:document-units="mm" inkscape:current-layer="layer1"
                                    inkscape:document-rotation="0" showgrid="false" fit-margin-top="0"
                                    fit-margin-left="0" fit-margin-right="0" fit-margin-bottom="0"
                                    inkscape:window-width="1920" inkscape:window-height="1013" inkscape:window-x="-9"
                                    inkscape:window-y="-9" inkscape:window-maximized="1" />
                                <metadata id="metadata5">
                                    <rdf:RDF>
                                        <cc:Work rdf:about="">
                                            <dc:format>image/svg+xml</dc:format>
                                            <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                                            <dc:title />
                                        </cc:Work>
                                    </rdf:RDF>
                                </metadata>
                                <g inkscape:label="Capa 1" inkscape:groupmode="layer" id="layer1"
                                    transform="translate(-4.5343677,-1.8496783)">
                                    <path id="circle849"
                                        style="fill:currentcolor;fill-opacity:1;stroke:#006452;stroke-width:0.0106609;stroke-dasharray:0.0106609, 0.0213221"
                                        d="m 6.4746749,1.855007 a 1.9349714,1.9349714 0 0 0 -1.934975,1.9349751 1.9349714,1.9349714 0 0 0 1.934975,1.9349753 1.9349714,1.9349714 0 0 0 0.882988,-0.2132243 l 1.19878,1.6221223 0.501863,-0.3768481 -1.197627,-1.6168218 A 1.9349714,1.9349714 0 0 0 8.4096319,3.7899821 1.9349714,1.9349714 0 0 0 6.4746749,1.855007 Z m -0.0025,0.5131888 a 1.4217811,1.4217811 0 0 1 0.0025,0 1.4217811,1.4217811 0 0 1 1.421768,1.4217863 1.4217811,1.4217811 0 0 1 -1.421768,1.4217864 1.4217811,1.4217811 0 0 1 -1.421786,-1.4217864 1.4217811,1.4217811 0 0 1 1.419238,-1.4217863 z" />
                                </g>
                            </svg>
                            <input class="buscar-text" type="text" name="Buscar" id="Buscar" placeholder="Buscar">
                        </div>
                        <!-- BÚSQUEDA -->
                        <p class="breadcrumbs">Inicio / Eventos / Categoría / Evento</p>
                        <h1 class="tittle-line">Registro</h1>
                    </header>
                </div>
            </div>

        </div>

        <div class="row background-eventos">
            <!-- INFO EVENTO -->
            <div class="row margin-0">
                <div class="col-12">
                    <p class="evento-pad-top float-right"># campos disponibles</p>
                </div>
            </div>
            <div class="row margin-0">
                <div class="col-3">
                    <p class="registrarse-precio">$100</p>
                </div>
                <div class="col-3">
                    <p class="">Adulto</p>
                </div>
                <div class="col-2">
                    <p class="registrarse-btn-entradas">-</p>
                </div>
                <div class="col-2">
                    <p class="">1</p>
                </div>
                <div class="col-2">
                    <p class="registrarse-btn-entradas">+</p>
                </div>
            </div>
            <div class="row margin-0">
                <div class="col-3">
                    <p class="registrarse-precio">$50</p>
                </div>
                <div class="col-3">
                    <p class="">Menor</p>
                </div>
                <div class="col-2">
                    <p class="registrarse-btn-entradas">-</p>
                </div>
                <div class="col-2">
                    <p class="">2</p>
                </div>
                <div class="col-2">
                    <p class="registrarse-btn-entradas">+</p>
                </div>
            </div>
            <div class="row margin-0 registrarse-line">
                <div class="col-3">
                    <p class="registrarse-precio">$200</p>
                </div>
                <div class="col-3">
                    <p class="">Total</p>
                </div>
                <div class="col-6">
                    <p class="">3 tickets</p>
                </div>
            </div>
            <div class="row margin-0">
                <div class="col-12">
                    <a class="evento-btn-registrarse" href="./confirmar.php">Registrarse</a>
                </div>
            </div>
            <!-- INFO EVENTO -->
            <!-- FOOTER -->
            <div class="row margin-0 footer-bg">
                <div class="col footer-text">Ⓒ 2021</div>
            </div>
            <!-- FOOTER -->


        </div>

        <script src="./js/main.js"></script>

</body>

</html>