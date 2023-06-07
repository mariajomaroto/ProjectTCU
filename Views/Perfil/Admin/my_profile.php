<?php require_once("Views/Includes/headerAdmin.php");?>

<section id="page-hero"
    class="section section__inverse justify-content-center py-5 py-lg-6 mb-n5 vh-350 h-lg-1000px min-h-1000px">
    <div class="bg bg-img position-absolute" data-bg-img=".img">
        <img loading="lazy" src="Views/img/home.jpg" class="img" alt="Image" />

        <div class="overlay bg-dark position-absolute o-50"></div>
    </div>
    <!-- /.bg bg-img position-absolute -->

    <div class="container-xl position-relative section-content text-center ">
        <strong> <input class="display-5 text-white text-center mt-3 mt-lg-4" id="txt_user"
                style="background-color: transparent;" disabled></strong>

        <br>
        <input class="lead mb-lg-5 text-white text-center" id="txt_rol" style="background-color: transparent;" disabled>


    </div>
    <!-- /.container-xl position-relative -->
    <div class="container-xl position-relative pt-4  mb-7">

        <div class="row">
            <div class="col-12 col-lg-9">

                <div class="accordion mb-4" id="accordionOverview">
                    <div class="accordion-item rounded shadow-sm">
                        <h2 class="accordion-header" id="accordionPropertyDetailsHeading">
                            <button class="accordion-button fs-5" type="button" data-bs-toggle="collapse"
                                data-bs-target="#accordionPropertyDetailsCollapse" aria-expanded="true"
                                aria-controls="accordionPropertyDetailsCollapse">Datos Personales</button>
                        </h2>

                        <div id="accordionPropertyDetailsCollapse" class="accordion-collapse collapse show"
                            aria-labelledby="accordionPropertyDetailsHeading"
                            data-bs-parent="#accordionPropertyDetails">
                            <div class="accordion-body">
                                <div class="row g-2 mb-3">
                                    <dl class="col-6 col-lg-4 my-0">
                                        <dt class="fw-normal fs-sm text-uppercase text-secondary">N&uacute;mero de
                                            identificaci&oacute;n</dt>
                                        <input type="text" class="form-control shadow-none mt-3 mb-3" id="txt_ide"
                                            value="" disabled>
                                    </dl>
                                    <!-- /.col-6 -->

                                    <dl class="col-6 col-lg-4 my-0">
                                        <dt class="fw-normal fs-sm text-uppercase text-secondary">Nombre</dt>
                                        <input type="text" class="form-control shadow-none mt-3 mb-3" id="txt_name"
                                            value="">
                                    </dl>
                                    <!-- /.col-6 -->

                                    <dl class="col-6 col-lg-4 my-0">
                                        <dt class="fw-normal fs-sm text-uppercase text-secondary">Apellidos</dt>
                                        <input type="text" class="form-control shadow-none mt-3 mb-3" id="txt_surname"
                                            value="">
                                    </dl>
                                    <!-- /.col-6 -->

                                    <dl class="col-6 col-lg-4 my-0">
                                        <dt class="fw-normal fs-sm text-uppercase text-secondary">Fecha de
                                            nacimiento
                                        </dt>
                                        <input type="date" class="form-control shadow-none mt-3 mb-3" id="txt_date"
                                            value="">
                                    </dl>
                                    <!-- /.col-6 -->

                                    <dl class="col-6 col-lg-4 my-0">
                                        <dt class="fw-normal fs-sm text-uppercase text-secondary">G&eacute;nero</dt>
                                        <input type="text" class="form-control shadow-none mt-3 mb-3" id="txt_gender"
                                            value="">
                                    </dl>

                                    <dl class="col-6 col-lg-4 my-0">
                                        <dt class="fw-normal fs-sm text-uppercase text-secondary">Correo</dt>
                                        <input type="text" class="form-control shadow-none mt-3 mb-3" id="txt_gmail"
                                            value="">
                                    </dl>

                                    <dl class="col-6 col-lg-4 my-0">
                                        <dt class="fw-normal fs-sm text-uppercase text-secondary">Tel&eacute;fono
                                        </dt>
                                        <input type="text" class="form-control shadow-none mt-3 mb-3" id="txt_phone"
                                            value="">
                                    </dl>
                                    <!-- /.col-6 -->


                                </div>


                                <p class="text-light mt-3 d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a class=" btn btn-warning shadow-none px-4 fw-bold mt-1" href="#"
                                        id="btn_saveData"><i class="fas fa-pen"></i> Guardar cambios</a>
                                </p>
                            </div>
                        </div>
                        <!-- /#accordionPropertyDetailsCollapse.accordion-collapse collapse  show -->
                    </div>

                    <!-- /.accordion-item  rounded shadow-sm -->
                </div>
                <!-- /.accordion  mb-4" id="accordionPropertyDetails -->


                <!-- /.accordion  mb-4" id="accordionPropertyDetails -->

            </div>
            <!-- /.col-12 col-lg-9 -->

            <div class="col-12 col-lg-3">
                <div class="sticky-top pt-6 mt-n6 mb-4 zi-1 ">
                    <ul class="nav nav-tabs " id="contactTab" role="tablist">

                        <p class="nav-link w-100 active shadow-sm border-0 py-3" id="schedulleTab" type="button"
                            role="tab" aria-controls="schedulle" aria-selected="true">Mi perfil</p>

                    </ul>
                    <!-- /.nav nav-tabs -->

                    <div class="tab-content bg-white position-relative shadow-sm zi-20" id="contactTabContent">
                        <div class="tab-pane fade p-3 show active" id="schedulle" role="tabpanel"
                            aria-labelledby="schedulleTab">
                            <form action="#" class="">
                                <div class="btn-group w-100 mb-3" role="group" id="img_profile_A">

                                </div>
                                <!-- /.btn-group -->

                                <div>



                                    <p class="text-light mt-3 text-center">
                                        <a data-bs-toggle="modal" data-bs-target="#new_imageProfile"
                                            class="btn btn-danger rounded-pill  shadow-none me-2 px-4 fw-bold mt-3 "
                                            href="#" id="btn_insert"><i class="fas fa-pen-alt me-2"></i> Cambiar
                                            foto</a>
                                    </p>
                                    <!-- /.text-light -->

                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->


                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
            </div>
            <!-- /.col-12 col-lg-3 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-xl position-relative -->
</section>


<div class="modal fade" id="new_imageProfile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <button class="btn-close btn-close-menu position-absolute top-0 start-100 translate-middle" type="button"
                data-bs-dismiss="modal" aria-label="Close">
                <span class="btn-close-icon"></span>
            </button>

            <div class="modal-body p-4">
                <form action="" method="post">
                    <h6 class="mb-4" style="text-align: center;">Ingresar nueva imagen</h6>

                    <input type="hidden" placeholder="" id="txt_id"
                        value=<?php echo $_SESSION['ID_REGISTRO_PERSONA']; ?>>
                    <div class="mb-3 ">
                        <input type="file" class="form-control shadow-none" id="image_profile" />
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100 text-uppercase fw-bold"
                            id="btn_image">Agregar</button>
                    </div>


                </form>

            </div>
            <!-- /.modal-body -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- modal-dialog modal-dialog-centered -->
</div>
<!-- #new_imageProfile -->



<?php require_once("Views/Includes/footerAdmin.php");?>
</body>

</html>