<?php
include 'db_con.php';

if (isset($_GET['page_url'])) {
	
	$page_url = mysqli_real_escape_string($con, $_GET['page_url']);

	$blog_query = "SELECT * FROM blogs WHERE blog_url = '$page_url'";
	$blog_result = mysqli_query($con, $blog_query);

	if ($blog_result && mysqli_num_rows($blog_result) > 0) {
		$blog = mysqli_fetch_assoc($blog_result);

		$image_query = "SELECT * FROM blogs_images WHERE blog_id = '{$blog['id']}'";
		$image_result = mysqli_query($con, $image_query);
        
?>


<?php
	} else {
		
		echo "<p>Product not found.</p>";
	}
} else {
	
	echo "<p>No product URL provided.</p>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="../assets/images/logo-Tauheedul.png">
    <title>Tauheedul Muslimeen Trust</title>
    <link href="../assets/css/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/flaticon.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/animate.css" rel="stylesheet">
    <link href="../assets/css/owl.carousel.css" rel="stylesheet">
    <link href="../assets/css/owl.theme.css" rel="stylesheet">
    <link href="../assets/css/slick.css" rel="stylesheet">
    <link href="../assets/css/slick-theme.css" rel="stylesheet">
    <link href="../assets/css/swiper.min.css" rel="stylesheet">
    <link href="../assets/css/owl.transitions.css" rel="stylesheet">
    <link href="../assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="../assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
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
                    <img src="../assets/images/logo-Tauheedul.png" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        <header id="header">
            <div class="topbar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-md-7 col-sm-12 col-12">
                            <div class="contact-intro">
                                <ul>
                                    <li><a class="text-light" href="mailto:info@tauheed.net"><i class="fi flaticon-email"></i> info@tauheed.net</a></li>
                                    <li><a class="text-light" href="tel:5222265600"><i class="fi flaticon-phone-call"></i> +91-522-2265600</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-md-5 col-sm-12 col-12">
                            <div class="contact-info">
                                <ul>
                                    <li>Visit our social pages</li>
                                    <li><a href="https://www.facebook.com/tmtrust"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="https://x.com/tmtrustindia" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="#" ><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/@TauheedulMuslimeenTrust/videos" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div> <!-- end topbar -->
            
            <div class="wpo-site-header">
                <nav class="navigation navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                
                                <div class="col-lg-2 col-md-10 col-10">
                                    <div class="navbar-header" >
                                        <a class="navbar-brand" href="https://auctest.rf.gd/tmt_test/"><img src="../assets/images/logo-Tauheedul-black.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-2 d-lg-none dl-block">
                                    <div class="mobail-menu">
                                        <button type="button" class="navbar-toggler open-btn">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar first-angle"></span>
                                            <span class="icon-bar middle-angle"></span>
                                            <span class="icon-bar last-angle"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-1 col-1">
                                    <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                        <button class="menu-close"><i class="ti-close"></i></button>
                                        <ul class="nav navbar-nav mb-2 mb-lg-0">
                                            <li>
                                                <a href="https://auctest.rf.gd/tmt_test/">Home</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">About Us</a>
                                                <ul class="sub-menu">
                                                    <li><a href="https://auctest.rf.gd/tmt_test/our-history.php">Our History</a></li>
                                                    <li><a href="https://auctest.rf.gd/tmt_test/ourfounder.php">Our Founder</a></li>
                                                    <li><a href="https://auctest.rf.gd/tmt_test/our-member.php">Board Members & Advisors</a></li>
                                                    <li><a href="https://auctest.rf.gd/tmt_test/coordinater.php">Our coordinators</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Our Institutes</a>
                                                <ul class="sub-menu">
                                                    <li><a href="https://auctest.rf.gd/tmt_test/unity-college.php">Unity College</a></li>
                                                    <li><a  href="https://auctest.rf.gd/tmt_test/unity-college-second.php">Unity College Second Shift</a></li>
                                                    <li><a  href="https://auctest.rf.gd/tmt_test/unity-private.php">Unity Private ITI</a></li>
                                                    <li><a href="https://auctest.rf.gd/tmt_test/unity-veda.php">Unity Veda College of Media and Animation</a></li>
                                                    <li><a href="https://auctest.rf.gd/tmt_test/mu-college.php">MU College Aligarh</a></li>
                                                    <li><a href="https://auctest.rf.gd/tmt_test/hiza.php">Hiza Hospital</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Our Initiatives</a>
                                                <ul class="sub-menu">
                                                    <li><a href="https://auctest.rf.gd/tmt_test/unityedu-program.php">Unity Education Program</a></li>
                                                    <li><a href="https://auctest.rf.gd/tmt_test/education-aidpr.php">Education Aid Program</a></li>
                                                    <li><a href="https://auctest.rf.gd/tmt_test/medical-aid-program.php">Medical Aid Program</a></li>
                                                    <li><a href="https://auctest.rf.gd/tmt_test/mother-child-project.php">Mother & Child care Project</a></li>
                                                    <li><a href="https://auctest.rf.gd/tmt_test/general-aid-program.php">General Aid Program</a></li>
                                                    <li><a href="https://auctest.rf.gd/tmt_test/champ.php">Champs</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Get Involved</a>
                                                <ul class="sub-menu">
                                                    <li><a href="https://auctest.rf.gd/tmt_test/partner-withus.php">Partner with us</a></li>
                                                    <li><a href="https://auctest.rf.gd/tmt_test/become-mentor.php">Become a Mentor</a></li>
                                                    <li><a href="https://auctest.rf.gd/tmt_test/internship-with-us.php">Internship with us</a></li>
                                                    <li><a href="#">Join the Conversation</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">More</a>
                                                <ul class="sub-menu">
                                                    <li><a href="https://auctest.rf.gd/tmt_test/legal.php">Legal</a></li>
                                                    <li><a href="https://auctest.rf.gd/tmt_test/from-secretory-desk.php">From Secretary’s Desk</a></li>
                                                    <li><a href="https://auctest.rf.gd/tmt_test/publication.php">Publications</a></li>
                                                    <li><a href="https://auctest.rf.gd/tmt_test/gallery.php">Gallery</a></li>
                                                    <li><a href="https://auctest.rf.gd/tmt_test/notice.php">Updates</a></li>
                                                    <li><a href="https://auctest.rf.gd/tmt_test/blogs.php">Blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="https://auctest.rf.gd/tmt_test/important_form.php">Important forms</a></li>
                                            <li><a href="https://auctest.rf.gd/tmt_test/contact.php">Contact Us</a></li>
                                            <li class="donate-btn-res"><a style="width: 160px; margin-left: 30px;" class="theme-btn-s2" style="font-size:20px" href="https://auctest.rf.gd/tmt_test/donate.php">Donate</a></li>
                                        </ul>
                                    </div><!-- end of nav-collapse -->
                                </div>
                                <div class="col-lg-2 col-md-2 col-2">
                                    <div class="header-right">
                                        <div class="close-form">
                                            <a class="theme-btn-s2" style="font-size:20px" href="https://auctest.rf.gd/tmt_test/donate.php">Donate</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </nav>
            </div><!-- end of container -->
        </header>
        <div class="sticky-footer res-dd-none">
            <!-- Left Section: Phone Number -->
            <a href="tel:+915222265600" class="phone-link">
                <i class="fas fa-phone-alt"></i> +91-522-2265600
            </a>
            <!-- Right Section: Request a Demo Button -->
            <a class="demo-btn" href="contact.php">Contact Us</a>
        </div>

        <!-- end of header -->

        <!-- start of breadcumb-section -->
        <div class="wpo-breadcumb-area" style="background: url(../assets/images/more-bredcrumb.jpg) no-repeat center top / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                      <h2><?php echo str_replace('-', ' ', $page_url); ?></h2>
                            <ul>
                                 <li><a href="https://auctest.rf.gd/tmt_test/">Home</a></li>
                                <li><span>Blog Details</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of wpo-breadcumb-section-->


        <!-- start wpo-blog-pg-section -->
        <section class="wpo-blog-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8">
                        <div class="wpo-blog-content">
                            <div class="post format-standard-image">
                                <div class="entry-media">
                                    <?php
								$image_row = mysqli_fetch_assoc($image_result); 
								if ($image_row) {
									echo "<img src='blog_uploads/{$image_row['image']}' alt='Blog Image' style='height:500px;'/> ";
								} else {
									echo "<p>No product images available.</p>"; 
								}
								?>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fi flaticon-calendar"></i>
                                            <?php echo date("j F Y", strtotime($blog['created_at'])); ?></li>
                                    </ul>
                                </div>
                                <div class="entry-details">
                                    <!-- <h3><a href="blog-single.html">Giving The Poor Is A Great Satisfiction Of heart.</a></h3> -->
                                    <p><?php echo $blog['blog_desc_two'] ?></p>

                                </div>
                            </div>

                            <div class="post format-gallery">
                                <div class="entry-media">
                                    <div class="post-slider owl-carousel">
                                        <?php
                            
                                            mysqli_data_seek($image_result, 0); 
                                            while ($logo_row = mysqli_fetch_assoc($image_result)) {
                                            if (!empty($logo_row['logos'])) {
                                            $imageSrc = 'blog_uploads/' . htmlspecialchars($logo_row['logos']);
                                        
                                        ?>
                                        <img src="<?php echo $imageSrc; ?>" alt style="height:500px;">

                                        <?php
                                             } 
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4">
                        <div class="blog-sidebar">
                            <div class="widget recent-post-widget">
                                <h3>Recent Blogs</h3>
                                <div class="posts">
                                    <?php
                                    include('db_con.php');                                   
                                    $sql = "SELECT blogs.blog_heading AS heading, 
                                            blogs_images.image, 
                                            blogs.blog_url,
                                            blogs.created_at
                                            FROM blogs
                                            INNER JOIN blogs_images ON blogs.id = blogs_images.blog_id
                                            GROUP BY blogs.id  
                                            ORDER BY blogs.created_at DESC LIMIT 4"; 

                                    $result = $con->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $heading = $row['heading'];
                                            $image = $row['image'];
                                            $blog_url = $row['blog_url'];
                                            $created_at = $row['created_at'];
                                            $formatted_date = date("j F Y", strtotime($created_at));
                                    ?>
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="blog_uploads/<?php echo $image; ?>" alt style="height:80px;">
                                        </div>
                                        <div class="details">
                                            <h4><a href="<?php echo $blog_url; ?>"><?php echo $heading; ?></a></h4>
                                            <span class="date">
                                                <?php echo date("j F Y", strtotime($blog['created_at'])); ?> </span>
                                        </div>
                                    </div>
                                    <?php 
                                        }
                                    } else {
                                        
                                        echo "<p>No blog found for today</p>";
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="wpo-contact-widget widget">
                                <h2>Your Support Can Change Lives</h2>
                                <p>Be a part of our journey to empower communities and uplift lives through education,
                                    care, and kindness. </p>
                                <a href="donate.php">Donate Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-blog-pg-section -->

        <!-- start of wpo-site-footer-section -->
         <footer class="wpo-site-footer" id="footer">
            <div class="wpo-upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget about-widget">
                                <div class="logo widget-title mb-0 pb-0">
                                    <img style="height: 60px;" src="../assets/images/logo-Tauheedul.png" alt="blog">
                                </div>
                                <p class="text-justify">Tauheedul Muslimeen Trust (TMT) was born as a link between those willing to learn but
                                    lacking the means to do so, and philanthropists eager to contribute towards positive
                                    change in the society.
                                </p>
                                <ul>
                                    <li><a href="https://www.facebook.com/tmtrust" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="https://x.com/tmtrustindia" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="#" ><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/@TauheedulMuslimeenTrust/videos" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-2 col-md-6 col-sm-12 col-12">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Quick Links </h3>
                                </div>
                                <ul>
                                    <li><a href="https://auctest.rf.gd/tmt_test/our-history.php">Our History</a></li>
                                    <li><a href="https://auctest.rf.gd/tmt_test/ourfounder.php">Our Founder</a></li>
                                    <li><a href="https://auctest.rf.gd/tmt_test/our-member.php">Board Members &amp; Advisors</a></li>
                                    <li><a href="https://auctest.rf.gd/tmt_test/coordinater.php">Our coordinators</a></li>
                                    <li><a href="https://auctest.rf.gd/tmt_test/gallery.php">Gallery</a></li>
                                    <li><a href="https://auctest.rf.gd/tmt_test/blogs.php">Blogs</a></li>
                                    <li><a href="https://auctest.rf.gd/tmt_test/donate.php">Donate Us</a></li>
                                    <li><a href="https://auctest.rf.gd/tmt_test/contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Important Links </h3>
                                </div>
                                <ul>
                                    <li><a href="https://auctest.rf.gd/tmt_test/hiza.php">Hiza Hospital</a></li>
                                    <li><a href="https://auctest.rf.gd/tmt_test/unityedu-program.php">Unity Education Program</a></li>
                                    <li><a href="https://auctest.rf.gd/tmt_test/education-aidpr.php">Education Aid Program</a></li>
                                    <li><a href="https://auctest.rf.gd/tmt_test/medical-aid-program.php">Medical Aid Program</a></li>
                                    <li><a href="https://auctest.rf.gd/tmt_test/mother-child-project.php">Mother &amp; Child care Project</a></li>
                                    <li><a href="https://auctest.rf.gd/tmt_test/general-aid.php">General Aid Program</a></li>
                                    <li><a href="https://auctest.rf.gd/tmt_test/champ.php">Champs</a></li>
                                    <li><a href="https://auctest.rf.gd/tmt_test/become-mentor.php">Become a Mentor</a></li>
                                    <li><a href="https://auctest.rf.gd/tmt_test/internship-with-us">Internship with us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="widget wpo-service-link-widget">
                                <div class="widget-title">
                                    <h3>Contact </h3>
                                </div>
                                <div class="contact-ft ">
                                    <p>Would you have any enquiries. Please feel free to contact us</p>
                                    <ul>
                                        <li><a class="text-light" href="mailto:info@tauheed.net"><i
                                                    class="fi flaticon-email"></i> info@tauheed.net</a></li>
                                        <li><a class="text-light" href="tel:5222265600"><i
                                                    class="fi flaticon-phone-call"></i> +91-522-2265600</a></li>
                                        <li><a class="text-light" href="#"><i class="fa-solid fa-location-dot"></i> Kalbe
                                                Hussain Plaza,19, Tulsidas Marg, Chowk, Lucknow -226 003, U.P., India.</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <div class="wpo-lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12 d-flex justify-content-between flex-wrap">
                            <p class="copyright"> &copy; 2025 Tauheedul Muslimeen Trust | All Rights Reserved. </p>
                            <p>Design & Develop by <a target="_blank" href="https://auctech.in" class="text-warning">Auctech MarCom</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- end of wpo-site-footer-section -->
    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="../assets/js/modernizr.custom.js"></script>
    <script src="../assets/js/jquery.dlmenu.js"></script>
    <script src="../assets/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="../assets/js/script.js"></script>
</body>

</html>