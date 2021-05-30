<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página de evento del sitio web RealTickets, encargada de mostrar la información de un evento específico.">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.min.css">

    <title>RealTickets - Evento</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row evento-header-section">
            <div class="evento-header-opacity">
                <div class="col">
                    <!-- NAV -->
                    <nav class="nav fixed-top">
                        <!-- MENU MOBILE -->
                        <svg onclick="openMenu()" class="menu-mobile" xmlns:dc="http://purl.org/dc/elements/1.1/"
                            xmlns:cc="http://creativecommons.org/ns#"
                            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                            xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                            xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                            xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="5.291667mm"
                            height="5.291667mm" viewBox="0 0 5.291667 5.291667" version="1.1" id="svg8"
                            inkscape:version="1.0.1 (3bc2e813f5, 2020-09-07)" sodipodi:docname="Ham_Menu.svg">
                            <defs id="defs2" />
                            <sodipodi:namedview id="base" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0"
                                inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:zoom="22.4"
                                inkscape:cx="8.0975254" inkscape:cy="9.5804096" inkscape:document-units="mm"
                                inkscape:current-layer="layer1" inkscape:document-rotation="0" showgrid="false"
                                inkscape:window-width="1708" inkscape:window-height="894" inkscape:window-x="2391"
                                inkscape:window-y="-9" inkscape:window-maximized="1" fit-margin-top="0"
                                fit-margin-left="0" fit-margin-right="0" fit-margin-bottom="0" />
                            <metadata id="metadata5">
                                <rdf:RDF>
                                    <cc:Work rdf:about="">
                                        <dc:format>image/svg+xml</dc:format>
                                        <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                                        <dc:title />
                                    </cc:Work>
                                </rdf:RDF>
                            </metadata>
                            <g inkscape:label="Menu" inkscape:groupmode="layer" id="layer1"
                                transform="translate(-16.250552,-6.4446548)">
                                <path id="rect847"
                                    style="fill:currentcolor;fill-opacity:1;stroke:#006452;stroke-width:0.0295976;stroke-dasharray:0.0295976, 0.05919530000000000"
                                    d="M 0.015625 0.015625 L 0.015625 4.0683594 L 19.984375 4.0683594 L 19.984375 0.015625 L 0.015625 0.015625 z M 0.015625 8.0332031 L 0.015625 12.085938 L 19.984375 12.085938 L 19.984375 8.0332031 L 0.015625 8.0332031 z M 0.015625 15.931641 L 0.015625 19.984375 L 19.984375 19.984375 L 19.984375 15.931641 L 0.015625 15.931641 z "
                                    transform="matrix(0.26458333,0,0,0.26458333,16.250552,6.4446548)" />
                            </g>
                        </svg>
                        <!-- MENU MOBILE -->
                        <p id="realtickets"><a class="logo-link" href="./index.php">RealTickets</a></p>
                        <ul class="nav-list">
                            <li class="nav-item"><a href="./eventos.php" class="nav-link">Eventos</a></li>
                            <li class="nav-item"><a href="./categoria.php" class="nav-link">Académico</a></li>
                            <li class="nav-item"><a href="./categoria.php" class="nav-link">Arte</a></li>
                            <li class="nav-item"><a href="./categoria.php" class="nav-link">Cinema</a></li>
                            <li class="nav-item"><a href="./categoria.php" class="nav-link">Conciertos</a></li>
                            <li class="nav-item"><a href="./categoria.php" class="nav-link">Fiestas</a></li>
                            <li class="nav-item"><a href="./categoria.php" class="nav-link">Teatro</a></li>
                        </ul>
                        <!-- SEARCH MOBILE -->
                        <svg onclick="openSearch()" class="search-mobile" xmlns:dc="http://purl.org/dc/elements/1.1/"
                            xmlns:cc="http://creativecommons.org/ns#"
                            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                            xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                            xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                            xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="4.5247326mm"
                            height="5.2846856mm" viewBox="0 0 4.5247326 5.2846856" version="1.1" id="svg8"
                            inkscape:version="1.0.1 (3bc2e813f5, 2020-09-07)" sodipodi:docname="Search.svg">
                            <defs id="defs2" />
                            <sodipodi:namedview id="base" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0"
                                inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:zoom="2.8"
                                inkscape:cx="24.744134" inkscape:cy="9.7211803" inkscape:document-units="mm"
                                inkscape:current-layer="layer1" inkscape:document-rotation="0" showgrid="false"
                                fit-margin-top="0" fit-margin-left="0" fit-margin-right="0" fit-margin-bottom="0"
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
                        <!-- SEARCH MOBILE -->
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
                            <input class="buscar-text" type="text" name="Buscar" id="Buscar" placeholder="Buscar" aria-label="Buscar">
                        </div>
                        <!-- BÚSQUEDA -->
                        <p class="breadcrumbs">Inicio / Eventos / Categoría</p>
                        <h1 class="tittle-line">Nombre Evento</h1>
                    </header>
                </div>
            </div>

        </div>

        <div class="row background-eventos">
            <!-- INFO EVENTO -->
            <div class="row margin-0">
                <div class="col-6">
                    <p class="evento-info evento-pad-top">Ubicación</p>
                </div>
                <div class="col-6">
                    <p class="evento-info evento-pad-top">Categoría</p>
                </div>
            </div>
            <div class="row margin-0">
                <div class="col-6">
                    <p class="evento-info">Fecha</p>
                </div>
                <div class="col-6">
                    <p class="evento-info">Tipo de público</p>
                </div>
            </div>
            <div class="row margin-0">
                <div class="col-12">
                    <p class="evento-info">Hora</p>
                </div>
            </div>
            <div class="row margin-0">
                <div class="col-12">
                    <p class="evento-info">Descripción: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Descripción: Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua.</p>
                </div>
            </div>
            <div class="row margin-0">
                <div class="col-6">
                    <p class="evento-precio">Precio</p>
                </div>
                <div class="col-6">
                    <a class="evento-btn-registrarse" href="./registro.php">Registrarse</a>
                </div>
            </div>
            <!-- INFO EVENTO -->
            <!-- EVENTOS -->
            <div class="row margin-0">
                <h2 class="eventos-tittle">Eventos relacionados</h2>
                <!-- ------------------CADA EVENTO------------------ -->
                <div class="row margin-0 evento-padding">
                    <div class="col-6 padding-right-0 padding-left-0">
                        <div class="fondo-img-evento-eventos height-evento">
                            <img class="img_evento_izq" src="./imgs/Img_Home_Reciente_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-6 padding-bottom-0 height-evento">
                        <div class="row">
                            <div class="fondo-evento-eventos">
                                <h3 class="titulo-evento-eventos">Título Evento</h3>
                                <p class="info-evento-eventos">Ubicación</p>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="info-evento-eventos">Fecha</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="info-evento-eventos">Hora</p>
                                    </div>
                                </div>
                                <p class="info-evento-eventos">Categoría</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row btn-vermas-evento-fondo">
                                <a class="btn-vermas-evento-text" href="./evento.php">
                                    <span>Ver más</span>
                                    <span class="float-right">></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ------------------CADA EVENTO------------------ -->
                <!-- ------------------CADA EVENTO------------------ -->
                <div class="row margin-0 evento-padding">
                    <div class="col-6 padding-right-0 padding-left-0">
                        <div class="fondo-img-evento-eventos height-evento">
                            <img class="img_evento_izq" src="./imgs/Img_Home_Reciente_2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-6 padding-bottom-0 height-evento">
                        <div class="row">
                            <div class="fondo-evento-eventos">
                                <h3 class="titulo-evento-eventos">Título Evento</h3>
                                <p class="info-evento-eventos">Ubicación</p>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="info-evento-eventos">Fecha</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="info-evento-eventos">Hora</p>
                                    </div>
                                </div>
                                <p class="info-evento-eventos">Categoría</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row btn-vermas-evento-fondo">
                                <a class="btn-vermas-evento-text" href="./evento.php">
                                    <span>Ver más</span>
                                    <span class="float-right">></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ------------------CADA EVENTO------------------ -->
                <!-- ------------------CADA EVENTO------------------ -->
                <div class="row margin-0 evento-padding">
                    <div class="col-6 padding-right-0 padding-left-0">
                        <div class="fondo-img-evento-eventos height-evento">
                            <img class="img_evento_izq" src="./imgs/Img_Home_Reciente_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-6 padding-bottom-0 height-evento">
                        <div class="row">
                            <div class="fondo-evento-eventos">
                                <h3 class="titulo-evento-eventos">Título Evento</h3>
                                <p class="info-evento-eventos">Ubicación</p>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="info-evento-eventos">Fecha</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="info-evento-eventos">Hora</p>
                                    </div>
                                </div>
                                <p class="info-evento-eventos">Categoría</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row btn-vermas-evento-fondo">
                                <a class="btn-vermas-evento-text" href="./evento.php">
                                    <span>Ver más</span>
                                    <span class="float-right">></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ------------------CADA EVENTO------------------ -->
                <!-- EVENTOS -->
                <a class="btn-ver-todos" href="#">Ver todos</a>
            </div>
        </div>

        <!-- FOOTER -->
        <div class="row footer-bg">
                <div class="col footer-text">Ⓒ 2021</div>
            </div>
            <!-- FOOTER -->

        <script src="./js/main.js"></script>

</body>

</html>