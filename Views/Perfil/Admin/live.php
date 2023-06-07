<?php require_once("Views/Includes/headerAdmin.php");?>

<body>

    <section id="page-hero" class="section section__inverse justify-content-center pt-6 pb-4 pb-lg-5 pb-xl-6">
        <div class="bg bg-img position-absolute" data-bg-img=".img"><img loading="lazy"
                src="Views/img/upcoming_events.jpg" class="img" alt="Image" /></div>
        <!-- /.bg bg-img position-absolute -->

        <div class="container-xl position-relative section-content text-center py-4">
            <h2 class="display-5 text-white mt-3 mt-lg-4">En vivo</h2>

            <strong>
                <p class="lead mb-4 mb-lg-5">Únete y comparte con nosotros en este momento!</p>
            </strong>
            <!-- /.section-filter -->
        </div>
        <!-- /.container-xl position-relative -->
    </section>
    <!-- #page-hero.section section__inverse justify-content-center pt-6 pb-4 pb-lg-5 pb-xl-6 -->

    <section class="section " id="welcome_vide">
        <div class="col col-md-auto text-md-auto ms-md-5">
            <p class="text-light mt-3 " style="text-align: center;">
                <a data-bs-toggle="modal" data-bs-target="#new_live_video"
                    class="btn btn-success rounded-pill shadow-none px-5 fw-bold mt-3 " href="#" id="btn_insert"><i
                        class="fas fa-plus"></i> Insertar Video</a>
            </p>
            <!-- /.text-light -->
            <!-- /.bg bg-img position-absolute -->
            <div class="container-xl position-relative" id="lives_admin">



            </div>
            <!-- /.container-xl -->
        </div>
    </section>
    <!-- #cities-grid-2.section py-5 py-lg-6 -->
    <!-- #news-1.section pb-6 mt-n4 mt-lg-n5 mt-xl-n6 -->

    <div class="modal fade" id="new_live_video" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <button class="btn-close btn-close-menu position-absolute top-0 start-100 translate-middle"
                    type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span class="btn-close-icon"></span>
                </button>

                <div class="modal-body p-4">
                    <form action="" method="post">
                        <h6 class="mb-4" style="text-align: center;">Ingresar c&oacute;digo del evento</h6>
                        <div class="mb-3 ">
                            <label for="txt_category_live" id="lb_video_code_live"
                                class="form-label fs-sm fw-bold">Categor&iacute;a</label>
                            <input type="text" class="form-control shadow-none" id="txt_category_live"
                                name="txt_category_live" value="E" disabled />
                        </div>

                        <div class="mb-3 ">
                            <label for="txt_video_code_live" id="lb_video_code_live"
                                class="form-label fs-sm fw-bold">C&oacute;digo</label>
                            <input type="text" class="form-control shadow-none" placeholder="Ingrese el c&oacute;digo"
                                id="txt_video_code_live" name="txt_video_code_live" />
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100 text-uppercase fw-bold "
                                id="btn_live_video">Agregar</button>
                        </div>
                    </form>

                </div>
                <!-- /.modal-body -->
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- modal-dialog modal-dialog-centered -->
    </div>
    <!-- #new_live_video -->

    <?php require_once("Views/Includes/footer.php");?>