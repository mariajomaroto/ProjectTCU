<?php require_once("Views/Includes/header.php");?>

<section id="page-hero"
    class="section section__inverse justify-content-center py-5 py-lg-6 mb-n5 vh-50 h-lg-480px min-h-330px">
    <div class="bg bg-img position-absolute" data-bg-img=".img">
        <img loading="lazy" src="Views/img/image_wallpaper.jpg" class="img" alt="Image" />

        <div class="overlay bg-dark position-absolute o-50"></div>
    </div>
    <!-- /.bg bg-img position-absolute -->

    <div class="container-xl position-relative section-content text-center py-4">
        <h2 class="display-5 text-white mt-3 mt-lg-4">Imagenes Relacionadas</h2>

        <p class="lead mb-4 mb-lg-5">Iglesia Pacto de Vida</p>
    </div>
    <!-- /.container-xl position-relative -->
</section>

<!-- #page-hero.section section__inverse justify-content-center py-5 py-lg-6 mb-n5 vh-50 h-lg-480px min-h-330px -->
<!-- #page-hero.section section__inverse justify-content-center pt-6 pb-4 pb-lg-5 pb-xl-6 -->
<section id="news-1" class="section pb-6 pt-7 mt-7 mt-n4 mt-lg-n5 mt-xl-n6 ">

    <h1 class="titulo_galeria" style="text-align: center;">Nuestro Pueblo</h1>

    <div class="container-xl position-relative">

        <div class="row g-3 mb-5" id="bodyUserimgtown">

        </div>
        <!-- /.row g-4 mb-5 -->
    </div>
    <!-- /.container-xl -->
</section>
<!-- #news-1.section pb-6 mt-n4 mt-lg-n5 mt-xl-n6 -->



<section id="news-1" class="section pb-4 mt-n4 mt-lg-n5 mt-xl-n6">
    <h1 class="titulo_galeria mt-5" style="text-align: center;">Nuestros Jóvenes</h1>
    <div class="container-xl position-relative">

        <div class="row g-3 mb-5" id="bodyUserimgyoung">

        </div>
    </div>
    <!-- /.container-xl -->
</section>
<!-- #news-1.section pb-6 mt-n4 mt-lg-n5 mt-xl-n6 -->

<section id="news-1" class="section pb-4 mt-n4 mt-lg-n5 mt-xl-n6">
    <h1 class="titulo_galeria mt-7" style="text-align: center;">Nuestros Ni&ntilde;os</h1>
    <div class="container-xl position-relative">

        <div class="row g-3 mb-5" id="bodyUserimgChildren">

        </div>
        <!-- /.row g-4 mb-5 -->

    </div>
    <!-- /.container-xl -->
</section>
<!-- #news-1.section pb-6 mt-n4 mt-lg-n5 mt-xl-n6 -->

<div class="modal fade" id="new_image" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
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
                        <label for="video_code" class="form-label fs-sm fw-bold">C&oacute;digo</label>
                        <input type="file" class="form-control shadow-none" id="video_code" />
                    </div>
                    <div class="mb-3">
                        <label for="sel_video_category" class="form-label fs-sm fw-bold">C&oacute;digo</label>
                        <select id="sel_video_category" name="sel_video_category" class="form-control">
                            <option value="">Categor&iacute;a</option>
                            <option value="C-P">Pueblo</option>
                            <option value="C-J">J&oacute;venes</option>
                            <option value="C-N">Ni&ntilde;os</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100 text-uppercase fw-bold">Agregar</button>
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




<?php require_once("Views/Includes/footer.php");?>