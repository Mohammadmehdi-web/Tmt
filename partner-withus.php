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
    <script src="assets/js/jquery.min.js"></script>

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
                            <h2>Our Volunteer</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><span>Volunteer</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="card border-0">
                <div class="card-body px-5 py-4 text-center">
                    <h1>Partner with us</h1>
                    <h3>Partner with us by sponsoring a Program.</h3>
                    <p class="card-text">
                        This partnership will help many people to cope better in life. You can choose one of the
                        programs you would like
                        to partner with and contact us either by email or phone. You can also give us your details and
                        we will get in touch
                        with you soon. <span style="color: tomato;"> <br> TMT is a registered non-profit organization in
                            India. It is a transparent, professionally managed organization.</span>
                    </p>
                </div>
            </div>
        </div>


        <!-- end of wpo-breadcumb-section-->
        <!-- volunteer-area-start -->
        <section class="wpo-contact-pg-section ">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-10 offset-lg-1">
                        <div class="office-info pb-0">
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
                                            <h2>Email</h2>
                                            <p>csr@tauheed.net</p>
                                            <p>info@tauheed.net</p>
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
                                            <h2>Phone</h2>
                                            <p>+91 - 522 - 2265600</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="wpo-contact-form-area" style="margin-bottom:0px">
                            <form class="contact-validation-active"  method="POST" action="save_partner.php"
                            id="enquiryForm">
                                <div>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="First Name*" required>
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="lname" id="lname"
                                        placeholder="Last Name*" required>
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*"
                                        required>
                                </div>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email">
                                </div>
                                <div>
                                    <select class="form-select" name="choose_csr" id="choose_csr" required>
                                        <option value="" disabled selected>Select an option</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <div>
                                    <select class="form-select" name="choose_program" id="choose_program" required>
                                        <option value="" disabled selected>Choose a Program</option>
                                        <option value="Unity Education Program">Unity Education Program</option>
                                        <option value="Education Aid Program">Education Aid Program</option>
                                        <option value="Medical Aid Program">Medical Aid Program</option>
                                        <option value="General Aid Program">General Aid Program</option>
                                        <option value="Career Counselling">Career Counselling</option>
                                        <option value="Computer Literacy Program">Computer Literacy Program</option>
                                        <option value="Champ">Champ</option>
                                    </select>
                                </div>

                                <div class="submit-area">
                                    <button type="submit" class="theme-btn">Submit Details</button>
                                    <div id="loader">
                                        <i class="ti-reload"></i>
                                    </div>
                                </div>
                                <div class="clearfix error-handling-messages">
                                    <div id="success">Thank you</div>
                                    <div id="error">Error occurred while sending email. Please try again later.</div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
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
        var formData = new FormData(this);

        $.ajax({
            url: 'save_partner.php',
            type: 'POST',
            data: formData,
            processData: false, 
            contentType: false, 
            success: function(response) {
                console.log(response); 
                if (response == 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Message Sent!',
                        text: 'Your message has been sent successfully.',
                    }).then(function() {
                        $('#enquiryForm')[0].reset(); 
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong. Please try again later.',
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error: ", status, error);
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