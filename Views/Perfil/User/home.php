<?php require_once("Views/Includes/header.php");?>
<section id="we-do-2" class="section bg-dark py-5 py-lg-6">
    <div class="bg bg-img position-absolute " data-bg-img=".img">
        <img loading="lazy" src="Views/img/home.jpg" class="img" alt="Image" />

        <div class="overlay bg-black position-absolute o-50"></div> <!-- on image-->
    </div>
    <!-- /.bg bg-img position-absolute bg-dark -->

    <div class="container-xl position-relative h-100">
        <div class="row py-5 py-lg-6">
            <div class="col-12 col-md-6">
                <h2 class="display-3 mb-4 text-white">
                    ¡Bienvenidos!<br />
                    <span class="" data-js-typing="Iglesia,Cristiana"></span> <span class=""><br>Pacto de Vida</span>
                </h2>

                <p class="lead me-lg-3 text-light mb-5">"Justificados, pues, por la fe, tenemos paz para con Dios por
                    medio de neustro se&ntilde;or Jesucristo". Romanos 5:1</p>

                <p class="text-light">

                    <a class="btn btn-warning rounded-pill shadow-none me-2 px-4 fw-bold " href="index.php?access=U-113"
                        id="btn_login"><i class="fas fa-user"></i> Se parte de nosotros</a>
                </p>


            </div>
            <!-- /.col-12 col-md-6 -->
        </div>
        <!-- /.row  -->
    </div>
    <!-- /.container-xl position-relative -->
</section>
<!-- #we-do-2.section bg-dark py-5 py-lg-6 -->

<!-- <section class="section " id="welcome_video">
   
    <div class="container-xl position-relative">


        <div class="row cities g-4 mb-5 mt-3">
            <iframe width="700" height="700" src="https://www.youtube.com/embed/Lo3RbQw1ics"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
       

    </div>
    
</section> -->
<!-- #cities-grid-2.section py-5 py-lg-6 -->

<section id="galery" class="section py-5 py-lg-6">
    <div class="bg bg-img position-absolute" data-bg-img=".img"></div>
    <!-- /.bg bg-img position-absolute bg-white -->

    <div class="container-xl position-relative">
        <header class="section-header mb-5">
            <h2 class="fs-3 section-title mb-3">Galer&iacute;a de <strong>im&aacute;genes</strong></h2>

            <p class="leadmb-0 o-75">Conoce nuestra Iglesia</p>
        </header>
        <!-- /.section-header mb-5 -->

        <div class="swiper-container with-pagination">
            <div id="listing-swiper-1-expand-swiper" class="swiper expand-w" data-js-swiper="auto">
                <div class="swiper-wrapper" id="tbodyimg">


                </div>
                <!-- /.swiper-wrapper -->
            </div>
            <!-- /#listing-swiper-1-expand-swiper.swiper -->

            <div class="swiper-navigation-container">
                <a href="#listing-swiper-1-expand-swiper"
                    class="swiper-button-next btn btn-primary btn-default shadow-none o-50 o-100-hover"><i
                        class="d-inline-block fas fa-angle-right"></i></a>
                <a href="#listing-swiper-1-expand-swiper"
                    class="swiper-button-prev btn btn-primary btn-default shadow-none o-50 o-100-hover"><i
                        class="d-inline-block fas fa-angle-left"></i></a>
            </div>
            <!-- /.swiper-navigation -->

            <div class="swiper-pagination-container">
                <div class="d-flex flex-row justify-content-start">
                    <div data-swiper-id="#listing-swiper-1-expand-swiper" class="swiper-pagination w-auto bottom-0"
                        data-swiper-pagination-limit="2"></div>

                    <a href="index.php?access=U-105"
                        class="btn btn-link btn-sm btn-more text-uppercase fw-bold shadow-none o-50 o-100-hover ms-3 trans-base px-0">Todas
                        las imagenes<i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
        <!-- /.swiper-container with-pagination -->
    </div>
    <!-- /.container-xl position-relative -->
</section>
<!-- #listing-swiper-1-expand.section py-5 py-lg-6 -->

<section id="testimonial" class="section section__inverse py-0">

    <div class="container-xl position-relative">
        <div class="row">
            <div
                class="col-12 col-lg-6 col-xl-6 py-4 py-lg-7 pe-lg-6 d-flex flex-column justify-content-center section-content ">
                <h2 class="fs-1 mb-3 text-bla">Cuentanos tu experiencia</h2>
                <p class="lead mb-4">Comparte un testimonio para que las otras personas puedan conocer tu experiencia
                </p>

                <form action="#" method="post" class="">
                    <div class="input-group mb-3">

                        <textarea type="text" class="form-control form-control-lg" placeholder="Testimonio"
                            id="txt_testimony" aria-label="Recipient's username" aria-describedby="button-addon2"
                            rows="3" cols="10" maxlength="200"></textarea>

                    </div>
                    <p id="alert_testimony"></p>

                    <button class="btn btn-warning btn-lg px-4" type="submit" id="btn_testimony">Subir</button>
                </form>
            </div>
            <!-- /.col-12 col-lg-6 col-xl-6 py-4 py-lg-7 pe-lg-6 d-flex flex-column justify-content-center -->

            <div class="col-12 col-lg-6 col-xl-6">
                <div class="position-relative expand-w h-100 o-75">
                    <div class="bg bg-img position-absolute" data-bg-img=".img">
                        <!-- <video width="800" height="550"
                            src="Views/web/video/Take Heart (MMXX) - Hillsong Worship(1080P_HD).mp4" autoplay muted
                            loop=1>
                            <source type="video/mp4">
                        </video> -->
                        <iframe width="650" height="600"
                            src="https://www.youtube.com/embed/s-SR7Xc0yhM?autoplay=1&mute=1&loop=1&start=50&controls=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                        <div class="overlay bg-dark position-absolute o-25"></div>
                    </div>
                    <!-- /.bg bg-img position-absolute -->
                </div>
            </div>
            <!-- /.col-12 col-lg-6 col-xl-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-xl -->
</section>
<!-- #callout-sell-1.section section__inverse py-0 -->


<section id="testimonials" class="section py-5 py-lg-6 ">


    <div class="container-xl position-relative">
        <header class="section-header mb-5">
            <h2 class="fs-3 section-title mb-3"><strong>Testimonios</strong> sobre la congregaci&oacute;n </h2>
            <p class="leadmb-0 o-75">Lo que nuestra comunidad dice de nosotros</p>
        </header>
        <!-- /.section-header mb-5 -->
    </div>
    <!-- /.container-xl position-relative -->

    <div class="swiper-container with-pagination">
        <div id="testimonials-swiper-1-swiper" class="swiper" data-js-swiper="auto">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container-xl position-relative">
                        <div class="row testimonials g-4" id="tbodytestimonial">






                            <!-- /.col-6 col-md d-flex align-items-stretch -->
                        </div>
                        <!-- /.row testimonials  -->
                    </div>
                    <!-- /.container-xl position-relative -->
                </div>

            </div>
            <!-- /.swiper-wrapper -->
        </div>


        <div class="swiper-pagination-container container-xl">
            <div class="d-flex flex-row justify-content-start">
                <div data-swiper-id="#testimonials-swiper-1-swiper" class="swiper-pagination w-auto bottom-0"
                    data-swiper-pagination-limit="2"></div>

                <a href="index.php?access=U-103" class="btn btn-link btn-sm btn-more text-uppercase fw-bold shadow-none o-50 o-100-hover ms-3
                    trans-base px-0">Todos
                    los testimonios<i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    </div>
    <!-- /.swiper-container with-pagination -->
</section>
<!-- #testimonials-swiper-1.section py-5 py-lg-6 -->

<?php require_once("Views/Includes/footer.php");?>