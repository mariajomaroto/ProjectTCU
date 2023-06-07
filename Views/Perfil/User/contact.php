<?php require_once("Views/Includes/header.php");?>

<body>
    <section id="page-hero" class="section section__inverse justify-content-center pt-6 pb-4 pb-lg-5 pb-xl-6">
        <div class="bg bg-img position-absolute" data-bg-img=".img">
            <img loading="lazy" src="Views/img/contact_wallpaper.jpg" class="img" alt="Image" />
        </div>
        <!-- /.bg bg-img position-absolute -->
        <div class="container-xl position-relative section-content text-center py-4">
            <h2 class="display-5 text-white mt-3 mt-lg-4">Contáctenos</h2>

            <p class="lead mb-4 mb-lg-5">¡Somos la Iglesia Pacto de Vida!</p>
        </div>
        <!-- /.container-xl position-relative -->
    </section>
    <!-- #page-hero.section section__inverse justify-content-center pt-6 pb-4 pb-lg-5 pb-xl-6 -->


    <section id="see-how-4" class="section py-5 py-lg-6">
        <div class="bg bg-img position-absolute bg-light" data-bg-img=".img"></div>
        <!-- /.bg bg-img position-absolute bg-light -->

        <div class="container-xl position-relative">
            <div class="container">
                <h1 class="text-center mb-5 fs-1 text-dark">Disponibilidad en <span class="text-black">todas</span> las
                    plataformas</h1>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <a href="https://www.facebook.com/pactodevida">
                        <span class="fa-stack fa-4x">
                            <img loading="lazy" src="Views/img/Facebook.png" class="img" alt="Image" width="100" />
                        </span>
                        <h4 class="my-3">Facebook</h4>
                        <p class="text-muted">Iglesia Pacto de vida</p>
                    </a>
                </div>
                <!-- <div class="col-md-3">
                    <a href="">
                        <span class="fa-stack fa-4x">
                            <img src="Views/img/instagram.png" class="img" alt="Image" width="100" />
                        </span>
                        <h4 class="my-3">Instagram</h4>
                        <p class="text-muted">Iglesia Pacto de vida</p>
                    </a>
                </div> -->
                <div class="col-md-4">
                    <a href="https://api.whatsapp.com/send?phone=83195333">
                        <span class="fa-stack fa-4x">
                            <img loading="lazy" src="Views/img/WhatsApp.png" class="img" alt="Image" width="180" />
                        </span>
                        <h4 class="my-3">Whatsapp</h4>
                        <p class="text-muted">88889999</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="https://www.youtube.com/channel/UCjQ7pvR-L9Kh8SGJPBQ0mIw">
                        <span class="fa-stack fa-4x">
                            <img loading="lazy" src="Views/img/Youtube.png" class="img" alt="Image" width="100" />
                        </span>
                        <h4 class="my-3">You Tube</h4>
                        <p class="text-muted">Iglesia Pacto de Vida</p>
                    </a>
                </div>
            </div>
        </div>
        </div>
        <!-- /.container-xl position-relative -->
    </section>
    <!-- #see-how-4.section py-5 py-lg-6 -->

    <section id="searchbox-2" class="section bg-dark py-5 py-lg-6">
        <div class="bg bg-img position-absolute o-75 " data-bg-img=".img">
            <img loading="lazy" src="Views/img/contact_form.jpg" class="img" alt="Image" />

            <div class="overlay bg-dark position-absolute o-25"></div>
        </div>
        <!-- /.bg bg-img position-absolute o-75 bg-dark -->

        <div class="container-xl position-relative h-900">
            <h3 class="visually-hidden">Si deseas realizar una consulta, escribenos</h3>

            <div class="row center gx-0">
                <div id="searchbox-2Searchbox" class="searchbox position-relative col-6 col-lg- pb-5">
                    <!-- <div id="searchbox-2Searchbox" > -->
                    <a class="form-options-backdrop modal-backdrop collapsed" data-bs-toggle="collapse"
                        href="#searchbox-2FormOptionsCollapse" role="button" aria-expanded="false"
                        aria-controls="searchbox-2FormOptionsCollapse"></a>

                    <form action="" class="searchbox-form position-relative w-100">
                        <div class="bg position-absolute bg-white rounded-top shadow-sm"></div>
                        <div class="position-relative pt-4 px-4">
                            <h1 class="fs-3 mb-2 position-relative">Si deseas realizar una consulta, escribenos</h1>

                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light"
                                            placeholder="Your Name" id="txt_name" />
                                        <label>Nombre</label>
                                        <p id="alert_name"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light"
                                            placeholder="Your LastName" id="txt_lastnames" />
                                        <label>Apellidos</label>
                                        <p id="alert_lastnames"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0 bg-light"
                                            placeholder="Your Email" id="txt_gmail" />
                                        <label>Email</label>
                                        <p id="alert_gmail"></p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" placeholder="Subject"
                                            id="txt_subject" />
                                        <label>Asunto</label>
                                        <p id="alert_subject"></p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0 bg-light" placeholder=""
                                            style="height: 150px" id="txt_text"></textarea>
                                        <label>Consulta</label>
                                        <p id="alert_consulta"></p>
                                    </div>
                                </div>

                            </div>


                            <div class="d-flex position-relative flex-column">
                                <button class="btn btn-primary d-block fw-bold" type="submit"
                                    id="btn_query">Enviar</button><br>
                            </div>
                        </div>
                        <!-- /.position-relative -->

                    </form>
                    <!-- <div class="mapouter col-6">
              <div class="gmap_canvas h-900"><iframe width="500" height="500"
                      src="https://maps.google.com/maps?q=V5JM+G7Q,%20Provincia%20de%20Cartago,%20Cervantes&t=&z=13&ie=UTF8&iwloc=&output=embed"
                      frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
              </div>
          </div> -->

                    <!-- /.searchbox-form -->
                </div>
                <!-- /#searchbox-2Searchbox.searchbox -->
            </div>
        </div>
    </section>

    <?php require_once("Views/Includes/footer.php");?>