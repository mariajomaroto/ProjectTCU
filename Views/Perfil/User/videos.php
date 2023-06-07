<?php require_once("Views/Includes/header.php");?>
<section id="page-hero"
    class="section section__inverse justify-content-center py-5 py-lg-6 mb-n5 vh-50 h-lg-480px min-h-330px">
    <div class="bg bg-img position-absolute" data-bg-img=".img">
        <img loading="lazy" src="Views/img/videos_wallpaper.jpg" class="img" alt="Image" />

        <div class="overlay bg-dark position-absolute o-50"></div>
    </div>
    <!-- /.bg bg-img position-absolute -->

    <div class="container-xl position-relative section-content text-center py-4">
        <h2 class="display-5 text-white mt-3 mt-lg-4">Videos sobre predicas</h2>

        <p class="lead mb-4 mb-lg-5">Iglesia Pacto de Vida</p>
    </div>
    <!-- /.container-xl position-relative -->
</section>

<section id="listing-1" class="section py-5">
    <div class="bg bg-img position-absolute" data-bg-img=".img"></div>
    <!-- /.bg bg-img position-absolute -->

    <div class="container-xl position-relative">
        <header class="section-header mb-5 visually-hidden">
            <h2 class="fs-3 section-title mb-3">Featured Properties</h2>

            <p class="leadmb-0 o-75">Best properties handpicked professionally by our expert</p>
        </header>
        <!-- /.section-header mb-5 visually-hidden -->

        <div class="section-filter mb-4 mb-lg-5">
            <div class="row g-3">
                <div class="col-12 col-md section-content text-center text-md-start">
                    <br>
                    <p class="mb-0"><strong>80</strong>&nbsp;Results&nbsp;Found</p>
                </div>
                <!-- /.col-12 col-md -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.section-filter -->

        <div class="row properties g-4 mb-6" id="all_videos_user">

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
<?php require_once("Views/Includes/footer.php");?>