<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="assets/images/logo-Tauheedul.png">
    <title>Tauheedul Muslimeen Trust</title>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
    .wpo-event-area-s2 .wpo-event-single .wpo-event-item::before {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        content: "";
        background: white;
        width: 10px;
        height: 120px;
        border-radius: 0px 0 0 0px !important;
    }

    .wpo-event-area-s2 .wpo-event-single .wpo-event-item {
        padding: 15px;
        box-shadow: 0px 1px 15px 0px rgba(62, 65, 159, 0.15);
        border-radius: 15px;
        display: block;
        align-items: center;
        position: relative;
        overflow: hidden;
        background: #fff;
    }
    .wpo-event-area-s2 .wpo-event-single .wpo-event-item .wpo-event-content {
    padding-left: 0px; 
    padding-right: 0px;
        flex-basis: 65%;
    }
    </style>
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="assets/images/logo-Tauheedul.png" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        <header id="header">
            <?php
                include('header.php');
           ?>
        </header>
        <!-- end of header -->
        <!-- start of breadcumb-section -->
        <div class="wpo-breadcumb-area" style="background: url(assets/images/more-bredcrumb.jpg) no-repeat center top / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Notice</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><span>Notice</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of wpo-breadcumb-section-->
        <!-- wpo-event-area start -->
        <div class="wpo-event-area-s2 section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                            <h2>Notice</h2>
                        </div>
                    </div>
                </div>
                <div class="wpo-event-wrap">
                    <div class="row justify-content-center">
                        <div class="col col-lg-10">
                            <div class="wpo-event-single">
                                <div class="wpo-event-item">
                                    <div class="wpo-event-content">
                                        <table class="table table-striped table-bordered table-hover" id="example-table"
                                            cellspacing="0" width="100%">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>S.No.</th>
                                                    <th>Notice</th>
                                                    <th>Publish Date</th>
                                                    <th class="text-center">Attach</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                    include('db_con.php');
                                                    $fetch_query = "SELECT * FROM add_notice";
                                                    $result = mysqli_query($con, $fetch_query);
                                                    $i = 1;
                                                     while ($row = mysqli_fetch_array($result)) {
                                                    
                                                ?>

                                                <tr>
                                                    <td class="text-center"><?php echo $i; ?></td>
                                                    <td><?php echo $row['notice']; ?></td>
                                                   <td class="text-center"><?php echo date('d-m-Y', strtotime($row['created_at'])); ?></td>

                                                    <td class="text-center"> <?php if (!empty($row['pdf_path'])): ?>
                                                        <a class="read-more"
                                                            href="admin/publication_upoads/<?php echo ($row['pdf_path']); ?>"
                                                            target="_blank">Download<img width="32" height="32" src="https://img.icons8.com/external-anggara-glyph-anggara-putra/32/12B886/external-download-media-anggara-glyph-anggara-putra-2.png" alt="external-download-media-anggara-glyph-anggara-putra-2"/></a>
                                                      
                                                        <?php else: ?>
                                                        <span class="no-pdf">No PDF available</span>
                                                    </td>
                                                    
                                                    <?php endif; ?>
                                                </tr>
                                                <?php
                                                    $i++;
                                                        }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wpo-event-area end -->

        <!-- start of wpo-site-footer-section -->
        <footer class="wpo-site-footer">
            <?php
                include('footer.php');
            ?>
        </footer>
        <!-- end of wpo-site-footer-section -->
    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/jquery.dlmenu.js"></script>
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>

</html>