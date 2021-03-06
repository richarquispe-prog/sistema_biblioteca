<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>EPIS</title>
    <!--link rel="stylesheet" href="Styles/estilos.css"-->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #5DADE2;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-building"></i>
                </div> <img src="img/epis1.png" width="50" height="50">
                <div class="sidebar-brand-text mx-3">BIBLIOTECA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-2">
            <!-- S  -->
            <li class="nav-item">

                <a href="acervo.php" class="nav-link"><img src="img/libro.png" width="20" height="20">LIBRO </a>
                <a href="boletas_admi.php" class="nav-link"><img src="img/boletaadmi.png" width="20"
                        height="20">BOLETAS</a>
                <a href="lista_usuario.php" class="nav-link"><img src="img/usuario.png" width="20"
                        height="20">USUARIOS</a>
                <a href="es_registro.php" class="nav-link"><img src="img/registrarusuario.png" width="20"
                        height="20">REGISTRAR USUARIO</a>
            </li>




            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>-->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a href="index.php" class="nav-link">Salir</a>
                        </li>
                    </ul>
                </nav>