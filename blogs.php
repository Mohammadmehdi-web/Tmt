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
                            <h2>Blogs</h2>
                            <ul>
                                <li><a href="https://auctest.rf.gd/tmt_test/">Home</a></li>
                                <li><span>Blogs</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of wpo-breadcumb-section-->
        <!-- wpo-campaign-area start -->
        <div class="wpo-campaign-area bg-green section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                           
                            <h2>Our Blogs</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="wpo-campaign-wrap">
                    <div class="row">
                        <?php
                        include('db_con.php');

                        $sql = "SELECT blogs.blog_heading AS heading, 
                                        blogs_images.image, 
                                        blogs.blog_desc_first, 
                                        blogs.blog_url,
                                        blogs.created_at
                                FROM blogs
                                INNER JOIN blogs_images ON blogs.id = blogs_images.blog_id
                                GROUP BY blogs.id LIMIT 2"; 

                        $result = $con->query($sql);

                        while ($row = $result->fetch_assoc()) {
                            $heading = $row['heading'];
                            $image = $row['image'];
                            $blog_desc_first = $row['blog_desc_first'];
                            $blog_url = $row['blog_url'];
                            $created_at = $row['created_at'];
                            $formatted_date = date("j F Y", strtotime($created_at));

                        ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="wpo-campaign-single">
                                <div class="wpo-campaign-item">
                                    <div class="wpo-campaign-img">
                                        <img src="blog/blog_uploads/<?php echo $image; ?>" alt="">
                                        <span class="thumb"><?php echo $formatted_date; ?></span>
                                    </div>
                                    <div class="wpo-campaign-content">
                                        <div class="wpo-campaign-text-top">
                                            <h2><a href="blog/<?php echo $blog_url; ?>"><?php echo $heading; ?></a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- wpo-campaign-area end -->

        <!-- start of wpo-site-footer-section -->
        <footer class="wpo-site-footer" id="footer">
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