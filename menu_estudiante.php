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
    <link rel="stylesheet" href="/Styles/munu_estudiante.css">
</head>



<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #5DADE2;">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-building"></i>
                </div><img src="img/epis1.png" width="50" height="50">
                <div class="sidebar-brand-text mx-3">BIBLIOTECA</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-2">
            <!-- S  -->
            <li class="nav-item">
                <a href="catalogo.php" class="nav-link"><img src="img/catalogo.png" width="20" height="20">CATALOGO </a>
                <a href="visualizar_boleta.php" class="nav-link"><img src="img/boleta.png" width="20"
                        height="20">BOLETA</a>
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
                    <ul class="container bg-dark border-top ">
                        <li class=" border-top col-xs-1 ">
                            <br><br><br><br>
                            <div class="circle">
                                <div id="stopwatch" class="stopwatch">00:00</div>
                                <div class="buttons">
                                    <div class="stop" onclick="stop()"></div>
                                    <div id="play-pause" class="paused" onclick="playPause()"></div>
                                </div>
                            </div>
                            <div id="seconds-sphere" class="seconds-sphere"></div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a href="index.php" class="nav-link">Salir</a>
                        </li>
                    </ul>

                </nav>