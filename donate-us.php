<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <title></title>
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
                    <img src="assets/images/preloader.png" alt="">
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
        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Donate Us</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><span>Donate Us</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of wpo-breadcumb-section-->
        <!-- volunteer-area-start -->
        <div class="volunteer-area">
            <div class="volunteer-wrap">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="volunteer-item">
                                <div class="volunteer-img-wrap">
                                    <div class="volunter-img">
                                        <img src="assets/images/volunteer.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="volunteer-contact">
                                <div class="volunteer-contact-form">
                                    <h2>Make a Donation</h2>
                                    <form method="post" class="contact-validation-active" id="contact-form-main">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="First Name">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group clearfix">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Email">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <input type="text" class="form-control" name="subject" id="subject"
                                                    placeholder="Subject">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group form-group-in">
                                                <label for="file">Upload Your CV</label>
                                                <input id="file" type="file" class="form-control" name="file">
                                                <i class="ti-cloud-up"></i>
                                            </div>
                                            <div class="col-lg-12 col-12 form-group">
                                                <textarea class="form-control" name="note" id="note"
                                                    placeholder="Case Description..."></textarea>
                                            </div>
                                            <div class="submit-area col-lg-12 col-12">
                                                <button type="submit" class="theme-btn submit-btn">Send Message</button>
                                                <div id="loader">
                                                    <i class="ti-reload"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix error-handling-messages">
                                            <div id="success">Thank you</div>
                                            <div id="error"> Error occurred while sending email. Please try again later.
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- wpo-team-area start -->
            <div class="wpo-team-area section-padding">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="wpo-section-title">
                                <span>Expert Team</span>
                                <h2>Meet Our Volunteer Team</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form,</p>
                            </div>
                        </div>
                    </div>
                    <div class="wpo-team-wrap">
                        <div class="team-slider owl-carousel">
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <img src="assets/images/team/2.jpg" alt="">
                                </div>
                                <div class="wpo-team-content">
                                    <h2><a href="#">Maria Belziana</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <img src="assets/images/team/3.jpg" alt="">
                                </div>
                                <div class="wpo-team-content">
                                    <h2><a href="#">Robert Chirls</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <img src="assets/images/team/4.jpg" alt="">
                                </div>
                                <div class="wpo-team-content">
                                    <h2><a href="#">William Frost</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <img src="assets/images/team/5.jpg" alt="">
                                </div>
                                <div class="wpo-team-content">
                                    <h2><a href="#">Zenefer Marry</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <img src="assets/images/team/6.jpg" alt="">
                                </div>
                                <div class="wpo-team-content">
                                    <h2><a href="#">Devid Harmin</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                            <div class="wpo-team-item">
                                <div class="wpo-team-img">
                                    <img src="assets/images/team/1.jpg" alt="">
                                </div>
                                <div class="wpo-team-content">
                                    <h2><a href="#">Angeica Laura</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- wpo-team-area end -->
        </div>
        <!-- volunteer-area-end -->

        <!-- start partners-section -->
        <section class="partners-section section-padding">
            <h2 class="hidden">partner</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partner-grids partners-slider owl-carousel">
                            <div class="grid">
                                <img src="assets/images/partners/img-1.jpg" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-2.jpg" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-3.jpg" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-4.jpg" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-5.jpg" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-6.jpg" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end partners-section -->

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


<!-- Mirrored from wpocean.com/html/tf/charitio/team-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jan 2025 11:36:13 GMT -->

</html>