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
    .wpo-event-area-s2 .wpo-event-single .wpo-event-item .wpo-event-img {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    flex-basis: 12%;
    }
    .wpo-event-area-s2 .wpo-event-single .wpo-event-item {
    padding: 15px;
    margin-bottom: 16px;
    box-shadow: 0px 1px 15px 0px rgba(62, 65, 159, 0.15);
    border-radius: 15px;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
    background: #fff;
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
                            <h2> Publications</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><span>Publications</span></li>
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
                            <h2>Latest Publications</h2>
                        </div>
                    </div>
                </div>
                <div class="wpo-event-wrap">
                    <div class="row justify-content-center">
                        <div class="col col-lg-10">
                            <div class="wpo-event-single">
                                <?php
                                    include('db_con.php');
                                    $result = $con->query("SELECT image_path, pdf_path, title, details FROM add_publication");
                                    while ($row = $result->fetch_assoc()):
                                ?>
                                <div class="wpo-event-item">
                                    <div class="wpo-event-img">
                                        <img src="admin/publication_upoads/<?php echo ($row['image_path']); ?>" alt="">
                                    </div>
                                    <div class="wpo-event-content">
                                        <div class="wpo-event-text-top">
                                            <h2><a href="#"><?php echo ($row['title']); ?></a></h2>
                                            <p><?php echo ($row['details']); ?></p>
                                            <?php if (!empty($row['pdf_path'])): ?>
                                                <a class="read-more" href="admin/publication_upoads/<?php echo ($row['pdf_path']); ?>" target="_blank">Download PDF</a>
                                            <?php else: ?>
                                                <span class="no-pdf">No PDF available</span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
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