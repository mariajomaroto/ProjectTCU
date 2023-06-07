<?php require_once("Views/Includes/headerAdmin.php");?>

<body>

    <section id="page-hero" class="section section__inverse justify-content-center pt-6 pb-4 pb-lg-5 pb-xl-6">
        <div class="bg bg-img position-absolute" data-bg-img=".img"><img loading="lazy"
                src="Views/img/events_wallpaper.jpg" class="img" alt="Image" /></div>
        <!-- /.bg bg-img position-absolute -->

        <div class="container-xl position-relative section-content text-center py-4">

            <h2 class="display-5 text-white mt-3 mt-lg-4">Proximos eventos</h2>

            <p class="lead mb-4 mb-lg-5">Comparte con nosotros!</p>
        </div>
        <!-- /.container-xl position-relative -->
    </section>
    <!-- #page-hero.section section__inverse justify-content-center pt-6 pb-4 pb-lg-5 pb-xl-6 -->

    <section id="news-1" class="section pb-6 mt-4 mt-lg-n5 mt-xl-n6">
        <div class="bg bg-img position-absolute" data-bg-img=".img"></div>
        <!-- /.bg bg-img position-absolute -->

        <div class="container-xl position-relative">



            <div class="row g-4 mt-6">

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                    <a data-bs-toggle="modal" data-bs-target="#new_event"
                        class="btn btn-success  shadow-none me-2 px-4 fw-bold " href="#" id="btn_insert_event"><i
                            class="fas fa-plus"></i> Insertar evento</a>

                </div>

                <div class="row g-4 mb-5" id=bodyEvents>




                </div>



            </div>
        </div>
        <!-- /.container-xl -->
    </section>
    <!-- #news-1.section pb-6 mt-n4 mt-lg-n5 mt-xl-n6 -->
    <div class="modal fade" id="new_event" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <button class="btn-close btn-close-menu position-absolute top-0 start-100 translate-middle"
                    type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span class="btn-close-icon"></span>
                </button>

                <div class="modal-body p-4">
                    <form action="" method="post">
                        <h6 class="mb-4" style="text-align: center;">Insertar Evento</h6>

                        <div class="mb-3 ">
                            <label for="event_managerName" class="form-label fs-sm fw-bold">Nombre del encargado</label>
                            <input type="text" class="form-control shadow-none" id="txt_event_managerName" />
                            <p id="txt_managerName"></p>
                        </div>

                        <div class="mb-3">
                            <label for="event_name" class="form-label fs-sm fw-bold">Nombre del evento</label>
                            <input type="text" class="form-control shadow-none" id="txt_event_name" />
                            <p id="txt_eventname"></p>
                        </div>

                        <div class="mb-3">
                            <label for="event_desc" class="form-label fs-sm fw-bold">Descripci&oacute;n</label>
                            <textarea class="form-control shadow-none" id="txt_event_desc" cols="35"
                                rows="2"></textarea>
                            <p id="txt_desc"></p>
                        </div>

                        <div class="mb-3">
                            <label for="event_date" class="form-label fs-sm fw-bold">Fecha del evento</label>
                            <input type="date" class="form-control shadow-none" id="txt_event_date" />
                            <p id="txt_eventdate"></p>
                        </div>

                        <div class="mb-3">
                            <label for="event_time" class="form-label fs-sm fw-bold">Hora</label>
                            <input type="time" class="form-control shadow-none" id="txt_event_time" />
                            <p id="txt_eventtime"></p>
                        </div>

                        <div class="mb-3">
                            <label for="event_image_file" class="form-label fs-sm fw-bold">Insertar nombre de la
                                Imagen</label>
                            <input type="file" class="form-control shadow-none" id="event_image_file" />
                            <p id="txt_eventimg"></p>
                        </div>

                        <!-- <img style="width: 289px; height: 200px;" src="Views/Views/Views/../Users/XPC/Pictures/image_01.jpg" class="card-img-top" alt="..."> -->

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100 text-uppercase fw-bold"
                                id="btn_add">Agregar</button>
                        </div>
                    </form>

                </div>
                <!-- /.modal-body -->
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- modal-dialog modal-dialog-centered -->
    </div>
    <!-- #new_event -->
    <?php require_once("Views/Includes/footerAdmin.php");?>