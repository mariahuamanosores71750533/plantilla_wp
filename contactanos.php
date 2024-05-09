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
        <?php include_once('include/menu.php') ?>


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">


            <div class="page-content">
                <div class="container-fluid">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mt-0">Have any questions ?</h5>
                                <p class="text-muted font-13 mb-4">Email us your Questions or you can send us twitter.</p>
                                <form>
                                    <div class="form-group row">
                                        <div class="col-lg-6 mb-3 mb-lg-0">
                                            <input class="form-control" type="text" id="name" placeholder="Nombre">
                                        </div>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="email" id="example-email-input3" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input class="form-control" type="text" id="subject2" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Your message"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block px-4">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php include('include/pie_pagina.php') ?>

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