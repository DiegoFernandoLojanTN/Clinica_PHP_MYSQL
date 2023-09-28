<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clinica Medic</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="Vistas/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    
    <!-- Theme style -->
    <link rel="stylesheet" href="Vistas/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->

    <?php
    if (isset($_SESSION["Ingresar"]) && $_SESSION["Ingresar"] == true) {
        echo '<div class="wrapper">';

        include "modulos/cabecera.php";

        include "modulos/menu.php";

        $url = array();

        if (isset($_GET["url"])) {
            $url = explode("/", $_GET["url"]);
            if ($url[0] == "inicio") {
                include "modulos/" . $url[0] . ".php";
            }
        } else {
            include "modulos/inicio.php";
        }

        echo '</div>';
    } else if (isset($_GET["url"])) {
        if ($_GET["url"] == "seleccionar") {
            include "modulos/seleccionar.php";
        }
    }

    ?>


    <!-- jQuery -->
    <script src="Vistas/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="Vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="Vistas/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="Vistas/dist/js/demo.js"></script>
</body>

</html>