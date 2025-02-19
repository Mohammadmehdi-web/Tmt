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
        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Donate Now</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><span>Donate</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of wpo-breadcumb-section-->
        <!-- wpo-event-area start -->
        <div class="wpo-donation-page-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 d-flex justify-content-center" style="flex-direction: column;">
                        <h2>
                            Donate for a better cause
                        </h2>
                        <h5 class="mt-5 mb-4">Bank Details:</h5>
                        <p>
                            <b>Bank Name : </b>IDBI Bank <br>
                            <b>Account Name : </b> Tauheedul Muslimeen Trust <br>
                            <b>A/c Number :</b> 909104000035042 <br>
                            <b>Branch :</b> Chowk Branch <br>
                            <b>Branch Code :</b> 909 <br>
                            <b>IFSC Code :</b> IBKL0000909 <br>
                            <b>Bank Address :</b> IDBI Bank, LIC Building, Khunkhunji Road, Chowk, Lucknow – 226003.
                        </p>
                        <img class="mt-2 mb-5" style="height: 480px;" src="assets/images/qr.avif" alt="">
                    </div>
                    <div class="col-lg-8">
                        <div class="wpo-donate-header">
                            <h2>Make a Donation</h2>
                        </div>
                        <div id="Donations" class="tab-pane volunteer-contact-form mt-0 pt-0">
                        <form class="contact-validation-active" method="POST" action="admin/save_donation.php" id="enquiryForm" enctype="multipart/form-data">


                                <div class="wpo-donations-details">
                                    <h2>Details</h2>
                                    <div class="row pb-0 mb-0">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Full Name">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group clearfix">
                                            <input type="number" class="form-control" name="phone" id="phone"
                                                placeholder="Mobile Number">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                            <input type="text" class="form-control" name="address" id="Address"
                                                placeholder="Address">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group form-group-in">
                                            <label for="file">Upload Payment Screenshot</label>
                                            <input id="file" type="file" class="form-control" name="image_path">
                                            <i class="ti-cloud-up"></i>
                                        </div>
                                        <div class="col-lg-12 col-12 form-group mb-0">
                                            <textarea class="form-control" name="message" id="message"
                                                placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="wpo-donations-amount mb-0 pb-0 mt-0">
                                        <h2>Your Donation</h2>
                                        <input type="number" class="form-control" name="amount" id="amount"
                                            placeholder="Enter Donation Amount">
                                    </div>
                                </div>

                                <div class="submit-area">
                                    <button type="submit" class="theme-btn submit-btn">Donate Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wpo-event-area end -->

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
            url: 'admin/save_donation.php',
            type: 'POST',
            data: formData,
            processData: false, 
            contentType: false, 
            success: function(response) {
                console.log(response); 
                if (response == 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Thank you for your kind donation!',
                        text: 'You are helping us a lot.',
                    }).then(function() {
                        $('#enquiryForm')[0].reset(); 
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Please fill in all fields!',
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