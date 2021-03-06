<?php
$pg="proyectos";
?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informatica28</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <!--favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="ico/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--termina-->
</head>

<body id="proyectos" class="d-flex flex-column h-100"></body>
<header class="container">
    <?php include_once("menu.php");?>
</header>
<main class="container">
    <div class="row">
        <div class="col-12 mt-3 mb-5">
            <h1>Proyectos</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p>Los siguientes son algunos de los trabajos que he realizado:</p>
        </div>
    </div>

    <div class="row">

        <div class="col-12 col-sm-4 p-4">
            <div class="row border border-secondary pb-5 bg-white">
                <div class="col-12 p-0">
                    <img src="img/abmclientes.png" alt="ABM CLIENTES" class="img-fluid">
                    <h2 class="color-h2 py-3 px-3">ABM CLIENTES</h2>
                    <p class="py-2 px-3 card">Alta, baja y modificaci??n de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                </div>
                <div class="col-6">
                    <a href="#" class="btn-rojos">Ver online</a>
                </div>
                <div class="col-6 text-center">
                    <a href="#" class="link-rojos">C??digo fuente</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-4 p-4">
            <div class="row border border-secondary pb-5 bg-white">
                <div class="col-12 p-0">
                    <img src="img/abmventas.png" alt="ABM CLIENTES" class="img-fluid">
                    <h2 class="color-h2 py-3 px-3">SISTEMA DE GESTI??N DE VENTAS</h2>
                    <p class="py-2 px-3 card">Alta, baja y modificaci??n de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                </div>
                <div class="col-6">
                    <a href="#" class="btn-rojos">Ver online</a>
                </div>
                <div class="col-6 text-center">
                    <a href="#" class="link-rojos">C??digo fuente</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-4 p-4">
            <div class="row border border-secondary pb-5 bg-white">
                <div class="col-12 p-0">
                    <img src="img/proyecto-integrador.png" alt="ABM CLIENTES" class="img-fluid">
                    <h2 class="color-h2 py-3 px-3">PROYECTO INTEGRADOR</h2>
                    <p class="py-2 px-3 card">Sistema de gesti??n de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                </div>

                <div class="col-6">
                    <a href="#" class="btn-rojos">Ver online</a>
                </div>
                <div class="col-6 text-center">
                    <a href="#" class="link-rojos">C??digo fuente</a>
                </div>

            </div>
        </div>
    </div>
</main>

<footer class="container mt-auto pb-4">
    <div class="btn-whatsapp">
        <a href="https://web.whatsapp.com" target="_blank" title="">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-3">
            <a href="https://github.com/rag28" target="_blank" title="Github">
                <i class="fab fa-github"></i>
            </a>
            <a href="#" target="_blank" title="Linkedin">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>

        <div class="col-sm-12 col-md-3">
            Sponsor <a href="https://depcsuite.com">DePC Suite</a>
        </div>

        <div class="col-sm-12 col-md-3">
            <a href="Email: raulgaray@informatica28.com.ar">raulgaray@informatica28.com.ar</a>
        </div>
    </div>

</footer>

</body>

</html>