<?php 
                                
    // session_destroy();
    session_start();

    // session_start();
    // $_SESSION['ID_REGISTRO_PERSONA'] = null;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/538d9daa14.js" crossorigin="anonymous"></script>

    <!-- Google-Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;700&family=Rubik:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet" />

    <!-- Flaticons - used for property category icons -->
    <link rel="stylesheet" type="text/css" href="Views/fonts/flaticon.css" />

    <!-- Swiper-CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7.0.6/swiper-bundle.min.css" />

    <!-- CSS bundled with Bootstrap-CSS -->

    <link rel="stylesheet" type="text/css" href="Views/css/discoverize-default.css" />
    <link rel="stylesheet" type="text/css" href="Views/css/style.css" />
    <!-- <script src="Views/js/script.js"></script> -->
    <script src="Views/js/jquery-3.6.0.min.js"></script>
    <script src="Views/js/ajax/call.js"></script>

    <title>Iglesia Pacto de Vida</title>
    <style>

    </style>
</head>

<body id="body">
    <!-- header -->
    <header class=" header is-sticky-inverse is-sticky-bg-o-0 position-absolute" data-spy="scroll" data-scroll="sticky"
        data-sticky-hide="true" data-switch-class="shadow-none|shadow">
        <nav class="navbar navbar-light navbar-default">
            <div class="container-xl justify-content-start">
                <a class="navbar-brand d-flex position-relative mb-1" href="index.php?access=U-101"><img loading="lazy"
                        src="Views/img/LOGO02.png" class="navbar-brand-img" alt="Pacto de Vida"
                        style="width: 35%; border-radius: 100%;" /><img loading="lazy"
                        src="Views/img/Logo_recortado.png" style="width: 100%; " class="navbar-brand-img-light"
                        alt="Pacto de Vida" /></a>

                <div class="ms-auto ps-3 navbar-end d-flex flex-row justify-content-end">

                    <button class="btn btn-link btn-light p-0 ms-3 shadow-none"><a class="fas fa-user"
                            href="index.php?access=U-113"></a></button>


                    <button class="btn-close btn-close-menu collapsed ms-3" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="btn-close-icon"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="navbarMenu">
                    <div class="mt-4 d-lg-none"></div>

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li><a class="nav-link active" href="index.php?access=U-101">Inicio</a></li>



                        <li class="nav-item nav-dropdown dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDocs" role="button"
                                data-bs-toggle="dropdown">Sobre Nosotros</a>
                            <ul class="nav-dropdown-menu dropdown-menu dropdown-menu-end shadow" data-bs-popper>

                                <li><a class="dropdown-item" href="index.php?access=U-102">Iglesia</a>
                                </li>

                                <li><a class="dropdown-item" href="index.php?access=U-103">Testimonios</a></li>


                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDocs" role="button"
                                data-bs-toggle="dropdown">Recursos</a>
                            <ul class="nav-dropdown-menu dropdown-menu dropdown-menu-end shadow" data-bs-popper>
                                <li>
                                    <span class="dropdown-header text-uppercase fw-bold">Galer&iacute;a</span>
                                </li>

                                <li><a class="dropdown-item" href="index.php?access=U-104">Videos</a>
                                </li>

                                <li><a class="dropdown-item" href="index.php?access=U-105">Im&aacute;genes</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>

                                <li>
                                    <span class="dropdown-header text-uppercase fw-bold"><a class=""
                                            href="index.php?access=U-106">En vivos



                                        </a></span>
                                </li>

                                <li>
                                    <span class="dropdown-header text-uppercase fw-bold"><a class=""
                                            href="index.php?access=U-107">Eventos</a></span>

                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDocs" role="button"
                                data-bs-toggle="dropdown">Cuenta</a>
                            <ul class="nav-dropdown-menu dropdown-menu dropdown-menu-end shadow" data-bs-popper>
                                <!-- <?php
                            //    if($_SESSION['ID_REGISTRO_PERSONA'] != null ){

                            //     echo ("diferente a null");

                            //    } 

                               ?> -->

                                <input type="hidden" placeholder="" id="txt_id"
                                    value=<?php echo $_SESSION['ID_REGISTRO_PERSONA']; ?>>

                                <li><a id="btn_profile" class="dropdown-item" href="index.php?access=U-108">Perfil</a>
                                </li>

                                <li><a class="dropdown-item" href="">Cerrar Sesi&oacute;n</a></li>


                            </ul>
                        </li>
                        <li><a class="nav-link" href="index.php?access=U-112">Cont&aacute;ctenos</a></li>



                    </ul>


                    <!-- /.navbar-nav -->
                </div>
                <!-- /.collapse navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <div class="bg header-bg position-absolute trans-base"></div>
    </header>
    <!-- header end-->