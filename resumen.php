<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página de resumen del sitio web RealTickets, encargada de mostrar toda la información referente a la reservación realizada por un usurio de un evento específico.">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.min.css">

    <title>RealTickets - Resumen</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row resumen-bg">
            <div class="col">
                <!-- NAV -->
                <nav class="nav fixed-top">
                    <!-- BACK -->
                    <a class="back-icon-display" href="./confirmar.php"><img class="menu-mobile" src="./imgs/vectores/Back.svg"
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
            <div class="col-6 evento-info resumen-text">Ubicación</div>
            <div class="col-6 evento-info resumen-text">Categoría</div>
            <div class="col-6 evento-info resumen-text">Fecha</div>
            <div class="col-6 evento-info resumen-text">Hora</div>
            <div class="col-12">
                <h3 class="evento-info">Facturación</h3>
            </div>
            <div class="col-12 evento-info resumen-text">Nombre completo</div>
            <div class="col-12 evento-info resumen-text">Correo Electrónico</div>
            <div class="col-12 evento-info resumen-text">
                <h3>Entradas reservadas</h3>
            </div>
            <div class="col-6 evento-info align-center">Adulto: 1</div>
            <div class="col-6">
                <p class="registrarse-precio  resumen-text">$100</p>
            </div>
            <div class="col-6 evento-info align-center">Menor: 2</div>
            <div class="col-6">
                <p class="registrarse-precio  resumen-text">$100</p>
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