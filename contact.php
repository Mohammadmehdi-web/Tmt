<!DOCTYPE html>
<html lang="en">


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
       <div class="wpo-breadcumb-area" style="background: url(assets/images/contact-bredcrumb.jpg) no-repeat center top / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Contact Us</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><span>contact</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of wpo-breadcumb-section-->

        <!-- start wpo-contact-pg-section -->
        <section class="wpo-contact-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-10 offset-lg-1">
                        <div class="office-info">
                            <div class="row g-3">
                                <div class="col col-xl-4 col-lg-6 col-md-6 col-12 d-flex">
                                    <div class="office-info-item card flex-fill">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-placeholder"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Address</h2>
                                            <p>Kalbe Hussain Plaza, 19, Tulsidas Marg, Chowk, Lucknow - 226 003, U.P.,
                                                India.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-4 col-lg-6 col-md-6 col-12 d-flex">
                                    <div class="office-info-item card flex-fill">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-email"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Email Us</h2>
                                            <p><a href="mailto:csr@tauheed.net">csr@tauheed.net</a></p>
                                            <p><a href="mailto:info@tauheed.net">info@tauheed.net</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-4 col-lg-6 col-md-6 col-12 d-flex">
                                    <div class="office-info-item card flex-fill">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-phone-call"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Call Now</h2>
                                            <p><a href="tel:5222265600">+91-522-2265600</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wpo-contact-title">
                            <h2>Have Any Question?</h2>
                        </div>
                        <div class="wpo-contact-form-area">
                            <form class="contact-validation-active" method="POST" action="save_contact.php"
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
                                    <input type="number" class="form-control" name="phone" id="phone"
                                        placeholder="Phone*">
                                </div>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email">
                                </div>
                                <div class="fullwidth">
                                    <textarea class="form-control" name="message" id="message"
                                        placeholder="Message..."></textarea>
                                </div>
                                <div class="submit-area">
                                    <button type="submit" class="theme-btn">Get in Touch</button>
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

        <!--  start wpo-contact-map -->
        <section class="wpo-contact-map-section">
            <h2 class="hidden">Contact map</h2>
            <div class="wpo-contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2116.34005645065!2d80.90962781978858!3d26.863939092363804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfde7a8e630af%3A0xa79a0ffa34ce2f1c!2z2KrZiNit24zYryDYp9mE2YXYs9mE2YXbjNmGINm52LHYs9m5IFRhdWhlZWR1bCBNdXNsaW1lZW4gVHJ1c3Q!5e0!3m2!1sen!2sin!4v1736936756888!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <!-- end wpo-contact-map -->


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
                        title: 'Thank you for your inquiry!',
                        text: 'We appreciate your patience. 💬',
                    }).then(function() {
                        // Clear the form fields after successful submission
                        $('#enquiryForm')[0]
                    .reset(); 
                    });
                } else {
                    // Display an error message
                    Swal.fire({
                        icon: 'error',
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