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
            height: 370px;
        }

        .wpo-event-area-s2 .wpo-event-single .wpo-event-item .wpo-event-img img {
            height: 100%;
            object-fit: cover;
        }

        .wpo-event-area-s2 .wpo-event-single .wpo-event-item::before {
            height: 260px;
        }

        .notice-container {
            width: 100%;
            background-color: #ffeb3b;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 99;
            overflow: hidden; /* Overflow hide karein */
            height:50px;
        }
        .marquee {
            white-space: nowrap;
            display: inline-block;
            padding-left: 100%; /* Text ko poore right se shuru karein */
            animation: marquee 15s linear infinite; /* Speed slow karne ke liye duration */
        }
        .marquee:hover {
            animation-play-state: paused; /* Hover par animation pause */
        }
        @keyframes marquee {
            0% { transform: translateX(0); } /* Right se shuru karein */
            100% { transform: translateX(-100%); } /* Left par khatam karein */
        }
        .notice-text {
            font-size: 18px;
            color: #333;
            font-weight: bold;
            display: inline-block;
            padding-right: 50px; /* Text ke beech mein space */
        }
        .left-notice-img{
            position: absolute;
            background: #ffeb3b;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9;
            padding: 10px;
        }
        /* .ul-text-size li, p, p p{
            font-size:9px !important;
        } */
        @media screen and (min-width:700px){
            .notice-container{
                margin-bottom:120px;
            }
            .custom-image-container img {
                object-fit: cover;
                object-position: center;
                display: block;
                height: 450px;
            }
            .ul-text-size li, p, p p{
                font-size:18px !important;
            }
        }
        @keyframes rainbow {
        0% { color: red; }
        14% { color: orange; }
        28% { color: black; }
        42% { color: green; }
        56% { color: blue; }
        70% { color: indigo; }
        84% { color: violet; }
        100% { color: red; }
    }

    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }

    .notice-text {
        font-size: 18px;
        font-weight: bold;
        animation: rainbow 2s linear infinite, blink 1s linear infinite;
    }
    .wpo-about-section .wpo-about-text ul li, .wpo-about-section-s2 .wpo-about-text ul li, .wpo-about-section-s3 .wpo-about-text ul li, 
    .wpo-about-section-s4 .wpo-about-text ul li, .wpo-about-section-s5 .wpo-about-text ul li, .wpo-about-section-s6 .wpo-about-text ul li {
        font-weight: 600;
        color: black;
    }
        .table-container {
            width: 100%;
            /* max-width: 1200px; */
            margin: auto;
            overflow-x: auto;
            animation: fadeIn 1s ease-in-out;
        }
        .expense-table {
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            font-size:20px;
            font-family: "Roboto Slab", serif;
            border:2px solid #284370;
        }
        .table-header {
            background: linear-gradient(135deg, #233d63, #3b5998);
            color: white;
            font-weight: bold;
            text-align: center;
        }
        .table-secondary {
            background-color: #e9ecef;
            font-weight: bold;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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

        <!-- start of hero -->
        <section class="wpo-hero-slider wpo-hero-section-6">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php
                        include('db_con.php');
                        $result = $con->query("SELECT image_path, title FROM add_banner");

                        while ($row = $result->fetch_assoc()):
                    ?>
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="admin/<?php echo ($row['image_path']); ?>">
                            <!-- <div class="gradient-overlay"></div> -->
                            <div class="container-fluid">
                                <div class="slide-content">
                                    <div data-swiper-parallax="300" class="wpo-hero-title">
                                        <h2><?php echo ($row['title']); ?></h2>
                                    </div>
                                    <div data-swiper-parallax="400" class="wpo-hero-subtitle">
                                        <!-- <p>Since: 1984</p> -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                    <?php endwhile; ?>
                </div> <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </section>
    </div>

    <!-- end of wpo-hero-slide-section-->

    <!-- NOTICE SECTION -->
  
    <div style="position:relative">
    
        <div class="notice-container">
        <span class="left-notice-img">
        <img width="30" src="https://img.icons8.com/glyph-neue/64/FA5252/alarm.png" alt="alarm"/>
        </span>
            <div class="marquee">
             <?php
            $result = $con->query("SELECT notice FROM add_notice");
            while ($row = $result->fetch_assoc()):
            ?>
                 <a href="notice.php"><span class="notice-text"><img width="24" height="24" src="https://img.icons8.com/ios-filled/50/FA5252/right.png" alt="nui2"/> 
                 <?php echo ($row['notice']); ?> 
                 <span class="text-danger fw-bold bold"> </span></span></a>
             <?php endwhile; ?>
            </div>
        </div>
    </div>
    <!-- NOTICE SECTION END -->

    <!-- start of wpo-about-section -->
    <section class="wpo-about-section-s3 section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-wrap">
                        <div class="wpo-about-img">
                            <img src="assets/images/about/about2.jpg" alt="">

                            <div class="round-ball-1"></div>
                            <div class="round-ball-2"></div>
                            <div class="round-ball-3"></div>
                            <div class="round-ball-4"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-text">
                       
                        <h2>Who We Are?</h2>
                        <p class="text-justify">TMT was established in 1984 under the leadership of Padma
                            Bhushan Late Maulana Dr. Kalbe Sadiq Sahab in Lucknow. The
                            purpose of forming this trust was to support education of the
                            under privileged children of the society. He believed everyone
                            should be given the opportunity to educate themselves and a
                            person&#39;s socio-economic condition should not be a barrier in
                            achieving that goal. TMT was born as a link between those willing
                            to learn but lacking the means to do so, and philanthropists eager
                            to contribute towards positive change in the society and since then
                            TMT with the help of its donors is working hard in the upliftment of
                            the underprivileged Individuals. TMT&#39;s mission is to use education
                            as a tool to combat ignorance and poverty. Along with Education,
                            TMT also provide Medical Aid and Rehabilitation Aid to the
                            underprivileged. In 40 years, TMT has helped a lot of individuals
                            and families through its institutes and aid programs.</p>

                        <a class="theme-btn-s2" href="about.php">More About</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ab-left-img">
            <img src="assets/images/about/about3.jpg" alt="">
        </div>
        <div class="ab-right-img">
            <img src="assets/images/ab-shape-3.png" alt="">
        </div>
    </section>
    <!-- end of wpo-about-section -->
    <section class="wpo-fun-fact-section pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="wpo-fun-fact-grids clearfix">
                    <h4 class="text-light mb-5">Achievements of 2023-24:</h4>
                        <?php
                            include('db_con.php');
                            $result = $con->query("SELECT count, heading FROM add_counter");

                            while ($row = $result->fetch_assoc()):
                        ?>
                        <div class="grid mt-3">
                            <div class="info">
                                <h3><span class="odometer" data-count="<?php echo ($row['count']); ?>"><?php echo ($row['count']); ?></span>+</h3>
                                <p><?php echo ($row['heading']); ?></p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <div class="shape"><img src="assets/images/cta-shape.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wpo-fun-fact-section pb-5 pt-5">
        <div class="container">
             <img src="assets/images/pie-chart.png" alt="Full Screen Image" class="full-screen-img" style="height:100%; width:100%">
        </div>
    </section>
   

     <section class="wpo-about-section-s4 section-padding pb-5 pt-5">
            <div class="container">
                <div class="wpo-about-items">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-12 col-12">
                            <div class="wpo-about-wrap">
                                <div class="wpo-about-img custom-image-container">
                                    <img src="assets/images/about/about4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="wpo-about-text">
                                <h2>Our Vision</h2>
                                <p class="text-justify">To empower the underprivileged
                                    members of Indian society to become
                                    progressive, prosperous and self-
                                    reliant citizens of India, and the world
                                    at large.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="wpo-about-items">
                    <div class="row align-items-center">

                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="wpo-about-text">
                                <h2>Our Mission</h2>
                                <p class="text-justify">To develop educational, health and moral potential of the
                                    underprivileged and most vulnerable members of Indian Society by
                                    providing financial resources, establishing educational and training
                                    institutions, health care centers and adopt programs that promote
                                    individual responsibility and community participation.</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-12">
                            <div class="wpo-about-wrap">
                                <div class="wpo-about-img custom-image-container">
                                    <img src="assets/images/about/about5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  <!-- wpo-cta-area end -->
    <section class="wpo-about-section-s2 section-padding">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="wpo-section-title">
                    <h2>Providing education, Medical and Rehabilitation support to the underprivileged.</h2>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-wrap">
                        <div class="wpo-about-img" >
                            <img src="assets/images/1.png" alt="" style="border-radius:0px;">

                            <div class="round-ball-1"></div>
                            <div class="round-ball-2"></div>
                            <div class="round-ball-3"></div>
                            <div class="round-ball-4"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-text">
                        <span><img width="30" src="assets/images/logo-Tauheedul.png" alt=""> Tauheedul Muslimeen
                            Trust</span>
                        <h2>Education:</h2>
                        <ul class="ul-text-size">
                            <li>More than 20000 students benefited with Free Education </li>
                            <li> Providing Cost free Education Under UEP</li>
                            <li>More than 2000 students getting free Education every Year</li>
                            <li> Books, Uniform, Transportation Facilities and Medical Support provided at no Cost</li>
                            <li> Periodic Medical Assessment of Students under UEP</li>
                            <li> Free Eye Checkup and treatment under UEP</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-3">
            <div class="row align-items-center">

                <div class="col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-text">
                            <span><img width="30" src="assets/images/logo-Tauheedul.png" alt=""> Tauheedul Muslimeen
                                Trust</span>
                            <h2>Medical:</h2>
                            <ul class="ul-text-size">
                                <li>More than 70000 patients provided Health care services every year</li>
                                <li> Diagnosis, Medicines and Treatment provided to underprivileged at no cost.</li>
                                <li>Critical Illness and Life-threatening cases supported through Medical Aid Program</li>
                                <li> Free Medical Camps Organized under Medical Aid Program</li>
                                <li> More than 400 mother and Infants supported.</li>
                                <li> More than 200 deliveries supported under mother and Childcare project</li>
                            </ul>
                     </div>
                </div>

                <div class="col-lg-6 col-md-12 col-12">
                        <div class="wpo-about-wrap">
                            <div class="wpo-about-img">
                                <img src="assets/images/2.png" alt="" style="border-radius:0px;">

                                <div class="round-ball-1"></div>
                                <div class="round-ball-2"></div>
                                <div class="round-ball-3"></div>
                                <div class="round-ball-4"></div>
                            </div>
                        </div>
                </div>
                
                

            </div>
        </div>
        <div class="container mt-3">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-wrap">
                        <div class="wpo-about-img">
                            <img src="assets/images/3.png" alt="" style="border-radius:0px;">

                            <div class="round-ball-1"></div>
                            <div class="round-ball-2"></div>
                            <div class="round-ball-3"></div>
                            <div class="round-ball-4"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-text">
                        <span><img width="30" src="assets/images/logo-Tauheedul.png" alt=""> Tauheedul Muslimeen
                            Trust</span>
                        <h2>Rehabilitation:</h2>
                        <ul class="ul-text-size">
                            <li>Monthly Nutritional aid provided in Mother and Childcare Project</li>
                            <li> Regular Un-cooked Food Packets provided to the Families of Cancer patients who come to
                                hospitals for treatment.</li>
                            <li>Monthly monetary assistance given to the deserving</li>
                            <li> House repair assistance provided to the underprivileged</li>
                            <li> Monthly aid to Elderly, Orphans, widows and destitutes provided</li>
                            <li> Water facilities provided to Schools, Communities, Homes of underprivileged and govt
                                hospitals.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="wpo-project-section-s2 pb-0 section-padding">
        <div class="container-fluid">
            <div class="sortable-gallery">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-grids gallery-active owl-carousel clearfix">
                            <?php
                                include('db_con.php');
                                $result = $con->query("SELECT image_path FROM add_slider_gallery");

                                while ($row = $result->fetch_assoc()):
                            ?>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="admin/<?php echo ($row['image_path']); ?>" alt="">

                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- wpo-cta-area end -->


    <section class="wpo-map-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-12 col-12">
                    <div class="wpo-map-item">
                        <iframe width="100%" height="400"
                            src="https://www.youtube.com/embed/_SiK03gcISA?autoplay=1&mute=1&rel=0&modestbranding=1"
                            title="YouTube video player" frameborder="0"
                            allow="autoplay; encrypted-media; accelerometer; clipboard-write; gyroscope; picture-in-picture"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>

                    </div>
                </div>
            </div>
        </div>
    </section>

  
    <div class="wpo-cta-area-s2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-cta-section">
                        <div class="wpo-cta-content">
                            <h2>No wealth like knowledge, no poverty like ignorance</h2>
                        </div>
                        <p class="text-light">- Imam Ali (as.)</p>
                        <div class="volunteer-img">
                            <img src="assets/images/index/bird.png" alt="">
                        </div>
                        <div class="shape"><img src="assets/images/cta-shape.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-event-area start -->
    <div class="wpo-event-area-s2 section-padding bg-green mt-0 pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="wpo-section-title">
                        <span>Tauheedul Muslimeen Trust</span>
                        <h2>Our Success Stories</h2>

                    </div>
                </div>
            </div>
            <div class="wpo-event-wrap">
                <div class="row justify-content-center">
                    <div class="col col-lg-10">
                    <?php
                        $sql = "SELECT add_project.pro_tile AS pro_tile, 
                            project_images.image, 
                            add_project.highlight_text,
                            add_project.project_brief, 
                            add_project.pro_url,
                            add_project.created_at
                            FROM add_project
                            INNER JOIN project_images ON add_project.id = project_images.project_id
                            GROUP BY add_project.id"; 

                        $result = $con->query($sql);

                        while ($row = $result->fetch_assoc()) {
                            $pro_tile = $row['pro_tile'];
                            $image = $row['image'];
                            $highlight_text = $row['highlight_text'];
                            $project_brief = $row['project_brief'];
                            $pro_url = $row['pro_url'];
                            $created_at = $row['created_at'];
                            $formatted_date = date("j F Y", strtotime($created_at));

                        ?>
                        <div class="wpo-event-single">
                            <div class="wpo-event-item">
                                <div class="wpo-event-img">
                                    <img src="story/success_story_uploads/<?php echo $image; ?>" alt="">
                                </div>
                                <div class="wpo-event-content">
                                    <div class="wpo-event-text-top">
                                        <span><?php echo $pro_tile; ?></span>
                                        <h2><a href="story/<?php echo $pro_url; ?>"><?php echo $highlight_text; ?></a></h2>
                                       <p class="text-justify">
    <?php 
        $words = explode(" ", $project_brief);
        $limited_text = implode(" ", array_slice($words, 0, 100));
        echo $limited_text . (count($words) > 100 ? '...' : '');
    ?>
</p>
 
                                        <a href="story/<?php echo $pro_url; ?>" style="font-size:20px; color:#3c5f99">Read More...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- wpo-event-area end -->
    <section class="wpo-project-section section-padding pb-0">
        <div class="container-fluid">
            <div class="sortable-gallery">
                <div class="row" style="margin:0px !important;">
                    <div class="col-lg-12">
                        <div class="project-grids gallery-container clearfix">
                            <?php
                            $result = $con->query("SELECT image_path FROM add_gallery");

                            while ($row = $result->fetch_assoc()):
                            ?>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="admin/<?php echo ($row['image_path']); ?>" alt="">

                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end container -->
    </section>
   
    <!-- start of wpo-blog-section-->
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
    <!-- end of wpo-blog-section -->

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
</body>


</html>