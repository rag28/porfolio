<?php
$pg="inicio";
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

<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
        
        <?php include_once("menu.php");?>

    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center div-cohete">
                <a href="proyectos.html"><img src="img/cohete.svg" alt="logo-cohete" class="cohete"></a>
            </div>

            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                <div class="my-4 input-home">
                    <p class="px-5 py-2"> Bienvenid@ a Informatica28</p>
                </div>
            </div>

            <div class="col-12 text-center pt-3 pb-5">
                <a href="proyectos.html" class="btnn shadow">Conoce mis proyectos</a>
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