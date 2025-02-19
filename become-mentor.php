<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Tauheedul Muslimeen Trust, TMT">
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
    <script src="assets/js/jquery.min.js"></script>
</head>
<style>
.wpo-about-text ul li {
    text-align: justify;
}

.wpo-event-area-s2 .wpo-event-single .wpo-event-item .wpo-event-img {
    height: 500px;
}

.wpo-event-area-s2 .wpo-event-single .wpo-event-item .wpo-event-img img {
    height: 100%;
    object-fit: cover;
}

.wpo-event-area-s2 .wpo-event-single .wpo-event-item::before {
    height: 420px;
}
</style>

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
        <div class="wpo-breadcumb-area" style="background: url('assets/images/new-img/get-bredcrumb.jpg') no-repeat center top / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Become a Mentor</h2>
                            <ul>
                                <li><a href="https://auctest.rf.gd/tmt_test/">Home</a></li>
                                <li><span>Become a Mentor</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of wpo-breadcumb-section-->

        <!-- start wpo-contact-pg-section -->
        <div class="container my-5">
            <div class="card border-0" style="border-radius: 10px;">
                <div class="card-body px-5 py-4 text-center">
                    <div class="wpo-contact-title">
                        <h1>Become a Mentor</h1>
                        <p style="font-size: 18
                        px; color: #666; line-height: 1.6; margin-top: 15px;">
                            Many students need mentoring to improve their learning skills, career guidance, and general
                            development
                            to perform better in the corporate world. If you feel that you can take the time and mentor
                            a student, you
                            can contact us. <br>
                            <span style="color: tomato;">The student will be assigned according to TMT&#39;s
                                criteria.</span>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <section class="wpo-contact-pg-section section-padding" style="padding-top: 0; padding-bottom: 0;">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-10 offset-lg-1">
                        <div class="wpo-contact-form-area" style="margin-bottom: 50px !important;">
                            <form class="contact-validation-active"  method="POST" action="save_contact.php"
                            id="enquiryForm">
                                <div>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="First Name*">
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="lname" id="name"
                                        placeholder="Last Name*">
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        placeholder="Your Phone*">
                                </div>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email*">
                                </div>
                                <div class="fullwidth">
                                    <textarea class="form-control" name="message" id="message"
                                        placeholder="Purpose"></textarea>
                                </div>
                                <div class="submit-area">
                                    <button type="submit" class="theme-btn">Submit Details
                                    </button>
                                    <div id="loader">
                                        <i class="ti-reload"></i>
                                    </div>
                                </div>
                                <div class="clearfix error-handling-messages">
                                    <div id="success">Thank you</div>
                                    <div id="error"> Error occurred while sending email. Please try again later. </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>


        <!-- end wpo-contact-pg-section -->

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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function() {
    $('#enquiryForm').submit(function(e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: 'save_contact.php', 
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response == 'success') {
                    // Display a success message using SweetAlert
                    Swal.fire({
                        icon: 'success',
                        title: 'Message Sent!',
                        text: 'Your message has been sent successfully.',
                    }).then(function() {
                        // Clear the form fields after successful submission
                        $('#enquiryForm')[0]
                    .reset(); 
                    });
                } else {
                    // Display an error message
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'Please fill in all fields!',
                    });
                }
            },
            error: function() {
                // In case of AJAX failure
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong. Please try again later.',
                });
            }
        });
    });
});
</script>
</body>


</html>