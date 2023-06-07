<?php require_once("Views/Includes/headerAdmin.php");?>


<section id="page-hero"
    class="section section__inverse justify-content-center py-5 py-lg-6 mb-n5 vh-50 h-lg-480px min-h-330px">
    <div class="bg bg-img position-absolute" data-bg-img=".img">
        <img loading="lazy" src="Views/img/videos_wallpaper.jpg" class="img" alt="Image" />

        <div class="overlay bg-dark position-absolute o-50"></div>
    </div>
    <!-- /.bg bg-img position-absolute -->

    <div class="container-xl position-relative section-content text-center py-4">
        <h2 class="display-5 text-white mt-3 mt-lg-4">Videos sobre predicas</h2>

        <p class="lead mb-4 mb-lg-5 ">Iglesia Pacto de Vida</p>
    </div>
    <!-- /.container-xl position-relative -->
</section>

<section id="listing-1" class="section py-5">
    <div class="bg bg-img position-absolute" data-bg-img=".img"></div>
    <!-- /.bg bg-img position-absolute -->

    <div class="container-xl position-relative">
        <?php require("Views/Includes/navBar_Admin_video.php"); ?>
        <div class="row properties g-7" id="all_videos">
        </div>
        <!-- /.row properties -->

        <footer class="section-footer d-flex justify-content-center">
            <div class="btn-toolbar mb-0 me-3" role="toolbar">
                <div class="btn-group me-2" role="group">
                    <a href="#" class="btn btn-outline-dark btn-default btn-sm px-3">Anterior</a>
                    <a href="#" class="btn btn-outline-dark btn-default btn-sm active px-3">1</a>
                    <a href="#" class="btn btn-outline-dark btn-default btn-sm px-3">2</a>
                    <a href="#" class="btn btn-outline-dark btn-default btn-sm px-3">3</a>
                    <a href="#" class="btn btn-outline-dark btn-default btn-sm px-3">4</a>
                    <a href="#" class="btn btn-outline-dark btn-default btn-sm px-3">5</a>
                    <a href="#" class="btn btn-outline-dark btn-default btn-sm px-3">Siguiente</a>
                </div>
            </div>
        </footer>
        <!-- /.section-footer d-flex justify-content-center -->
    </div>
    <!-- /.container-xl -->
</section>
<!-- #listing-1.section py-5 -->

<div class="modal fade" id="new_video" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <button class="btn-close btn-close-menu position-absolute top-0 start-100 translate-middle" type="button"
                data-bs-dismiss="modal" aria-label="Close">
                <span class="btn-close-icon"></span>
            </button>

            <div class="modal-body p-4">
                <form action="" method="post">
                    <h6 class="mb-4" style="text-align: center;">Ingresar c&oacute;digo del evento</h6>
                    <div class="mb-3 ">
                        <label for="txt_category" id="lb_video_code"
                            class="form-label fs-sm fw-bold">Categor&iacute;a</label>
                        <input type="text" class="form-control shadow-none" id="txt_category" name="txt_category"
                            value="V" disabled />
                    </div>

                    <div class="mb-3 ">
                        <label for="txt_video_code" id="lb_video_code"
                            class="form-label fs-sm fw-bold">C&oacute;digo</label>
                        <input type="text" class="form-control shadow-none" placeholder="Ingrese el c&oacute;digo"
                            id="txt_video_code" name="txt_video_code" />
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100 text-uppercase fw-bold "
                            id="btn_video">Agregar</button>
                    </div>
                </form>

            </div>
            <!-- /.modal-body -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- modal-dialog modal-dialog-centered -->
</div>
<!-- #new_video -->
<?php require_once("Views/Includes/footerAdmin.php");?>