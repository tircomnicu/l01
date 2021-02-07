<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom-fileds
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/wp-content/themes/custom-fileds/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="/wp-content/themes/custom-fileds/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="/wp-content/themes/custom-fileds/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="/wp-content/themes/custom-fileds/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/wp-content/themes/custom-fileds/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

	<?php wp_head(); ?>
</head>

<body class="main-layout" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="index.html"><img src="/wp-content/themes/custom-fileds/images/logo.jpg" alt="logo" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-10 col-sm-10">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li class="active"> <a href="index.html">Home</a> </li>
                                    <li> <a href="about.html">about</a> </li>
                                    <li> <a href="album.html"> Albums</a> </li>
                                    <li> <a href="blog.html">Blog</a> </li>
                                    <li> <a href="contact.html">Contact</a> </li>
                                    <li> <a href="#contact">Login</a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                    <form class="search">
                        <input class="form-control" type="text" placeholder="Search">
                        <button><img src="/wp-content/themes/custom-fileds/images/search_icon.png"></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- end header inner -->
</header>
<!-- end header -->
