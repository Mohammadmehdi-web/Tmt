<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <link rel="icon" type="image/png" href="./assets/img/favicon.png"/>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
      <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->

    
      <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/summernote/dist/summernote.css" rel="stylesheet" />
    <link href="./assets/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
</head>
<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="index.php">
                    <span class="brand">
                    <img src="./assets/img/logo-Tauheedul.png" alt="" width="100px;">
                    </span>
                    <span class="brand-mini"> <img src="./assets/img/logo-Tauheedul.png" alt="" width="100px;"></span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="./assets/img/logo-Tauheedul.png" />
                            <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                           
                            <a class="dropdown-item" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active mt-5" href="index.php"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="mt-3">
                        <a href="javascript:;"><img width="20" height="20" class="fw-bold" src="https://img.icons8.com/external-xnimrodx-lineal-xnimrodx/64/FFFFFF/external-banner-infographic-and-chart-xnimrodx-lineal-xnimrodx-2.png" alt="external-banner-infographic-and-chart-xnimrodx-lineal-xnimrodx-2"/></i>
                            <span class="nav-label"> Banner</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_banner.php">Add New Banner</a>
                            </li>
                            <li>
                                <a href="banner_list.php">Banner List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><img width="20" height="20" src="https://img.icons8.com/ios-filled/50/FFFFFF/break--v2.png" alt="break--v2"/>
                            <span class="nav-label">Notice</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_notice.php">Add New Notice</a>
                            </li>
                            <li>
                                <a href="notice_list.php">Notice List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><img width="20" height="20" src="https://img.icons8.com/external-goofy-solid-kerismaker/96/FFFFFF/external-Form-sheet-file-document-goofy-solid-kerismaker.png" alt="external-Form-sheet-file-document-goofy-solid-kerismaker"/>
                            <span class="nav-label">Important Form</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_important_notice.php">Add New Important Form</a>
                            </li>
                            <li>
                                <a href="important_notice_list.php">Important Form List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><img width="20" height="20" src="https://img.icons8.com/ios-filled/50/FFFFFF/counter--v1.png" alt="counter--v1"/>
                            <span class="nav-label">Counter</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_counter.php">Add New Counter</a>
                            </li>
                            <li>
                                <a href="counter_list.php">Counter List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><img width="20" height="20" src="https://img.icons8.com/ios/50/FFFFFF/sorting-options.png" alt="sorting-options"/>
                            <span class="nav-label">Slider Gallery</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_slider_gallery.php">Add New Slider Gallery</a>
                            </li>
                            <li>
                                <a href="slider_gallery_list.php">Slider Gallery List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><img width="20" height="20" src="https://img.icons8.com/ios-filled/50/FFFFFF/storytelling.png" alt="storytelling"/>
                            <span class="nav-label">Success Story</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_story.php">Add New Success Story</a>
                            </li>
                            <li>
                                <a href="story_list.php"> Success Story List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><img width="20" height="20" src="https://img.icons8.com/ios-filled/50/FFFFFF/image-gallery.png" alt="image-gallery"/>
                            <span class="nav-label">Gallery</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_gallery.php">Add New Gallery</a>
                            </li>
                            <li>
                                <a href="gallery_list.php">Gallery List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><img width="20" height="20" src="https://img.icons8.com/ios-filled/50/FFFFFF/google-blog-search.png" alt="google-blog-search"/>
                            <span class="nav-label">Blog</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_blog.php">Add New Blog </a>
                            </li>
                            <li>
                                <a href="blog_list.php">Blog List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><img width="20" height="20" src="https://img.icons8.com/fluency-systems-filled/50/FFFFFF/publication.png" alt="publication"/>
                            <span class="nav-label">Publication</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_publication.php">Add New Publication </a>
                            </li>
                            <li>
                                <a href="publication_list.php">Publication List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="" href="donationlist.php"><img width="20" height="20" src="https://img.icons8.com/external-smashingstocks-mixed-smashing-stocks/68/FFFFFF/external-donation-finance-trading-and-banking-smashingstocks-mixed-smashing-stocks.png" alt="external-donation-finance-trading-and-banking-smashingstocks-mixed-smashing-stocks"/>
                            <span class="nav-label">Donation List</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="partner.php"><img width="20" height="20" src="https://img.icons8.com/ios-filled/50/FFFFFF/ask-question.png" alt="ask-question"/>
                            <span class="nav-label">Partner Query List</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="querylist.php"><img width="24" height="24" src="https://img.icons8.com/glyph-neue/64/FFFFFF/question-shield.png" alt="question-shield"/>
                            <span class="nav-label">Query List</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>