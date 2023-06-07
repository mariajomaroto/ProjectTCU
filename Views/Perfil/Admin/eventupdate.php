<?php require_once("Views/Includes/headerAdmin.php");?>

<body>


    <section id="page-hero"
        class="section section__inverse justify-content-center py-5 py-lg-6 mb-n5 vh-350 h-lg-1000px min-h-1000px">
        <div class="bg bg-img position-absolute" data-bg-img=".img">
            <<<<<<< HEAD <img loading="lazy" src="../../img/contact_wallpaper.jpg" class="img" alt="Image" />
            =======
            <img loading="lazy" src="Views/img/contact_wallpaper.jpg" class="img" alt="Image" />
            >>>>>>> main

            <div class="overlay bg-dark position-absolute o-50"></div>
        </div>

        <div class="">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">


                    <div class="modal-body p-4">
                        <form action="" method="post">
                            <h6 class="mb-4" style="text-align: center;"> Actualizar Evento</h6>


                            <div class="mb-3 ">
                                <label for="event_managerName" class="form-label fs-sm fw-bold">Nombre del
                                    encargado</label>
                                <input type="text" class="form-control shadow-none" id="txt_Name" />
                                <p id="txt_name"></p>
                            </div>

                            <div class="mb-3">
                                <label for="event_name" class="form-label fs-sm fw-bold">Nombre del evento</label>
                                <input type="text" class="form-control shadow-none" id="txt_Eventname" />
                                <p id="txt_eventname"></p>
                            </div>

                            <div class="mb-3">
                                <label for="event_desc" class="form-label fs-sm fw-bold">Descripci&oacute;n</label>
                                <textarea class="form-control shadow-none" id="txt_Desc" cols="35" rows="2"></textarea>
                                <p id="txt_desc"></p>
                            </div>

                            <div class="mb-3">
                                <label for="event_date" class="form-label fs-sm fw-bold">Fecha del evento</label>
                                <input type="date" class="form-control shadow-none" id="txt_Eventdate" />
                                <p id="txt_eventdate"></p>
                            </div>

                            <div class="mb-3">
                                <label for="event_time" class="form-label fs-sm fw-bold">Hora</label>
                                <input type="time" class="form-control shadow-none" id="txt_Eventtime" />
                                <p id="txt_eventtime"></p>
                            </div>

                            <div class="mb-3">
                                <label for="txt_Eventimg" class="form-label fs-sm fw-bold">Insertar nombre de la
                                    Imagen</label>
                                <input type="file" class="form-control shadow-none" id="txt_Eventimg" />
                                <p id="txt_eventimg"></p>
                            </div>

                            <input type="hidden" class="form-control shadow-none" id="txt_Id" />



                            <!-- <img style="width: 289px; height: 200px;" src="Views/Views/Views/../Users/XPC/Pictures/image_01.jpg" class="card-img-top" alt="..."> -->

                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-success w-100 text-uppercase fw-bold"
                                    id="button_update">Agregar cambios</button>
                                <button type="submit" class="btn btn-danger w-100 text-uppercase fw-bold"
                                    id="button_cancel"><a href="index.php?access=A-207">Cancelar</a></button>

                            </div>


                        </form>

                    </div>
                    <!-- /.modal-body -->
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- modal-dialog modal-dialog-centered -->
        </div>

        <?php require_once("Views/Includes/footerAdmin.php");?>
    </section>