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

    <title>RealTickets - Resumen</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row resumen-bg">
            <div class="col">
                <!-- NAV -->
                <nav class="nav fixed-top">
                    <!-- BACK -->
                    <a href="./confirmar.php"><img class="menu-mobile" src="./imgs/vectores/Back.svg"
                            alt="Botón atrás"></a>
                    <!-- BACK -->
                    <p id="realtickets"><a class="logo-link" href="./index.php">RealTickets</a></p>
                </nav>
                <!-- NAV -->
                <!-- HEADER -->
                <header>
                    <p class="breadcrumbs resumen-breadcrumbs">Inicio / ... / Evento / Registro / Confirmación</p>
                    <h1 class="tittle-line">Resumen</h1>
                </header>
            </div>

            <div class="col-12">
                <h2>Nombre Evento</h2>
            </div>
            <div class="col-6 evento-info">Ubicación</div>
            <div class="col-6 evento-info">Categoría</div>
            <div class="col-6 evento-info">Fecha</div>
            <div class="col-6 evento-info">Hora</div>
            <div class="col-12">
                <h3 class="evento-info">Facturación</h3>
            </div>
            <div class="col-12 evento-info">Nombre completo</div>
            <div class="col-12 evento-info">Correo Electrónico</div>
            <div class="col-12 evento-info">
                <h3>Entradas reservadas</h3>
            </div>
            <div class="col-6">Adulto: 1</div>
            <div class="col-6">
                <p class="registrarse-precio">$100</p>
            </div>
            <div class="col-6">Menor: 2</div>
            <div class="col-6">
                <p class="registrarse-precio">$100</p>
            </div>

            <div class="registrarse-line margin-bottom-0"></div>

            <div class="col-6 resumen-total-bold">Total</div>
            <div class="col-6 resumen-total-bold">$200</div>

            <div class="col-12">
                <a class="evento-btn-registrarse resumen-btn-aceptar" href="./index.php">Aceptar</a>
            </div>


        </div>

        <!-- FOOTER -->
    <div class="row footer-bg">
                <div class="col footer-text">Ⓒ 2021</div>
            </div>
            <!-- FOOTER -->
    </div>

    


    <script src="./js/main.js"></script>

</body>

</html>