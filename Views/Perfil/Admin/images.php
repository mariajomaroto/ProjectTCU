<?php require_once("Views/Includes/headerAdmin.php");?> <section id="page-hero"
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

<?php require("Views/Includes/navBar_Admin_images.php");  ?>
<!-- #page-hero.section section__inverse justify-content-center pt-6 pb-4 pb-lg-5 pb-xl-6 -->
<section id="news-1" class="section pb-6 mt-n4 mt-lg-n5 mt-xl-n6">

    <h1 class="titulo_galeria" style="text-align: center;">Nuestro Pueblo</h1>

    <div class="container-xl position-relative">

        <div class="row g-3 mb-5" id="bodyimgtown">

        </div>
        <!-- /.row g-4 mb-5 -->
    </div>
    <!-- /.container-xl -->
</section>
<!-- #news-1.section pb-6 mt-n4 mt-lg-n5 mt-xl-n6 -->


<section id="news-1" class="section pb-4 mt-n4 mt-lg-n5 mt-xl-n6">
    <h1 class="titulo_galeria mt-5" style="text-align: center;">Nuestros Jóvenes</h1>
    <div class="container-xl position-relative">

        <div class="row g-3 mb-5" id="bodyimgyoung">

        </div>
        <!-- /.row g-4 mb-5 -->
    </div>
    <!-- /.container-xl -->
</section>
<!-- #news-1.section pb-6 mt-n4 mt-lg-n5 mt-xl-n6 -->

<section id="news-1" class="section pb-4 mt-n4 mt-lg-n5 mt-xl-n6">
    <h1 class="titulo_galeria mt-7" style="text-align: center;">Nuestros Ni&ntilde;os</h1>
    <div class="container-xl position-relative">

        <div class="row g-3 mb-5" id="bodyimgChildren">

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
                    <h6 class="mb-4" style="text-align: center;">Insertar nueva imagen</h6>

                    <div class="mb-3 ">
                        <label for="img_file" class="form-label fs-sm fw-bold">Seleccione Imagen</label>
                        <input type="file" class="form-control shadow-none" id="img_file" name="img_file" />
                    </div>
                    <div class="mb-3">
                        <label for="sel_category" class="form-label fs-sm fw-bold">Seleccione categoria</label>
                        <select id="sel_category" name="sel_category" class="form-control">
                            <option value="C-P">Pueblo</option>
                            <option value="C-J">J&oacute;venes</option>
                            <option value="C-N">Ni&ntilde;os</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" id="btn_Insertimg"
                            class="btn btn-primary w-100 text-uppercase fw-bold">Agregar</button>

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