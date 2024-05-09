<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title> Xeloro - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="MyraStudio" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="plantilla/Admin/vertical/assets/images/favicon.ico">

        <!-- App css -->
        <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">
            <div class="header-border"></div>
            <?php include_once('include/menu.php')?>
           

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                

                <div class="page-content">
                    <div class="container-fluid">

                    <div class="row">
                <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                    
                                    <h4 class="card-title">With Indicators</h4>
                                    <p class="card-subtitle mb-4">You can also add the indicators to the carousel, alongside the controls, too.</p>
                                    
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid"  src="https://static.vecteezy.com/system/resources/thumbnails/029/783/765/small_2x/collection-of-makeup-products-and-brushes-glamorous-beauty-essentials-free-photo.jpg"alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="https://images.ctfassets.net/o65uf8qogksw/7DnNvuyslWxQOJfFQRoAV6/4fc1eb7000d31f3555e2207efcd64a4f/conoce-los-productos-ensenciales-para-tu-maquillaje-mobile.jpg"alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="https://es.lorealparisusa.com/-/media/project/loreal/brand-sites/oap/americas/us/beauty-magazine/slideshows/makeup-product-essentials/loreal-paris-bmag-slideshow-20-makeup-product-essentials-every-woman-should-own-slide1.jpg?rev=2de860b20f204c5c89306edbfdec124f&cx=0.49&cy=0.54&cw=1510&ch=815&hash=25DDB2B89D952B65F5FEE4A8720279097718CB0C"alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                </div>
                <div class="row">

                

                        <!-- start page title -->
                    <?php 
                    for ($i=0; $i < 10 ; $i++) { ?>
                         <div class="col-lg-2 col-md-3 col-ms-6">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="imagenes/brochas.jpg" alt="vvvbgfuy">
                                <h5 class="card-title">Brocha</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eum dolorem iure rem minus tempora, amet ipsa debitis pariatur, velit recusandae maxime voluptatibus consectetur distinctio assumenda expedita voluptas laboriosam nemo.</p>
                            </div>
                         </div>
                        
                  <?php  }
                    ?>
            
</div>
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php include('include/pie_pagina.php')?>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Overlay-->
        <div class="menu-overlay"></div>


        <!-- jQuery  -->
        <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
        <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
        <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
        <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
        <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

        <!-- App js -->
        <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>

    </body>

</html>