<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon"
        href="<?php echo bloginfo('template_directory');?>/images/favicon.ico">
    <title>The Classroom</title>

    <!-- CSS -->
    <link href="<?php echo bloginfo('template_directory');?>/css/reset.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/css/fonts.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/assets/select2/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/assets/font-awesome/css/font-awesome.min.css"
        rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/assets/magnific-popup/css/magnific-popup.css"
        rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/assets/iconmoon/css/iconmoon.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/assets/owl-carousel/css/owl.carousel.min.css"
        rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/css/animate.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/css/custom.css" rel="stylesheet">


    <?php
wp_head()
?>
</head>

<body>
    <!-- ==============================================
    ** Preloader **
    =================================================== -->
    <div id="loading">
        <div class="element">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>

    <!-- ==============================================
    ** Header **
    =================================================== -->
    <header>
        <!-- Start Header top Bar -->
        <div class="header-top">
            <div class="container clearfix">
                <ul class="follow-us hidden-xs right-block">
                    <li><a href="https://www.facebook.com/theclassroomind"><i class="fa fa-facebook-official"
                                aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/theclassroomind"><i class="fa fa-twitter"
                                aria-hidden="true"></i></a></li>

                    <li><a href="https://www.youtube.com/channel/UCj6APLRB0335fBm8WEBFtnQ"><i class="fa fa-youtube-play"
                                aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/theclassroomind/"><i class="fa fa-instagram"
                                aria-hidden="true"></i></a></li>
                </ul>

            </div>
        </div>
        <!-- End Header top Bar -->
        <!-- Start Header Middle -->
        <div class="container header-middle">
            <div class="row"> <span class="col-xs-6 col-sm-3"><a href="index.php"><img
                            src="<?php echo bloginfo('template_directory');?>/images/logo.png" class="img-responsive"
                            alt=""></a></span>
                <div class="col-xs-6 col-sm-3"></div>
                <div class="col-xs-6 col-sm-9">
                    <div class="contact clearfix">
                        <ul class="hidden-xs">
                            <li> <span>Email</span> <a
                                    href="mailto:info@theclassroomind.com">info@theclassroomind.com</a> </li>
                            <li> <span>Call</span> 98095-96095, 0172-4789888 </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Middle -->
        <!-- Start Navigation -->
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse"
                        class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <!-- <form class="navbar-form navbar-right">
                        <input type="text" placeholder="Search Now" class="form-control">
                        <button class="search-btn"><span class="icon-search-icon"></span></button>
                    </form> -->
                    <ul class="nav navbar-nav lg-menu">
                        <li> <a href="index.php">Home</a>

                        </li>
                        <li> <a href="about.php">About</a></li>
                        <li class="dropdown"> <a data-toggle="dropdown" href="#">Our Courses <i class="fa fa-angle-down"
                                    aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="ielts.php">Ielts</a></li>
                                <li><a href="toefl.php">toefl</a></li>
                                <li><a href="celpip.php">celpip</a></li>
                                <li><a href="pte.php">pte</a></li>
                                <li><a href="spoken.php">spoken english</a></li>
                                <li><a href="personality-development.php">personlaity development</a></li>
                            </ul>
                        </li>
                        <li> <a href="gallery.php">Gallery</a></li>
                        <li> <a href="how-work.php">How We Works</a>

                        </li>
                        <li> <a href="faq.php">faq</a></li>
                        <li> <a href="blog.php">blog</a></li>
                        <li> <a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
    </header>