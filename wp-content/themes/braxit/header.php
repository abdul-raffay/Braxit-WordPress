<?php
/**
 * The Header Part
 *
 * @package WordPress
 * @subpackage Braxit
 * @since Braxit 1.0
 */
?>

<!doctype html>
<html class="no-js" lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="manifest" href="site.webmanifest"> -->

    </head>

<?php
    wp_head();
?>
<body <?php body_class(); ?>>
    <!-- Admin Bar -->
    <?php wp_body_open(); ?>

    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo/loader.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <!-- <li><i class="fas fa-phone"></i> +880 278 367 367</li> -->
                                        <li><i class="fas fa-phone"></i> <?php echo get_theme_mod('phnum'); ?></li>
                                        <li><i class="far fa-envelope"></i> <?php echo get_theme_mod('email_contact'); ?></li>
                                    </ul>
                                </div>
                                <?php 
                                    if(get_theme_mod('show_page')){
                                        $selectedPage = get_theme_mod('page_show');
                                ?>
                                    <div class="header-info-right">
                                        <a href="<?php echo get_permalink($selectedPage); ?>" class="btn"><?php echo get_theme_mod('page_text'); ?> <i class="ti-arrow-right"></i></a>
                                    </div>
                                <?php 
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="<?php echo site_url(); ?>">
                                        <?php
                                            if (function_exists( 'the_custom_logo' )) {
                                                the_custom_logo();
                                            }
                                            else{
                                                ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo.png" alt="My Custom Logo">
                                                <?php
                                            }
                                        ?>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-8">
                                <div class="menu-wrapper  d-flex align-items-center">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                            <!-- Menu -->
                                            <?php 
                                                wp_nav_menu(array(
                                                    'theme_location' => 'custom_menu',
                                                    'container'      => 'nav',
                                                    'menu_id' => 'navigation',
                                                ));
                                            ?>
                                            <!-- <ul id="navigation">                                                                                          
                                                <li class="active"><a href="index.html">Home</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="project.html">Project</a></li>
                                                <li><a href="blog.html">Blog</a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="blog_details.html">Blog Details</a></li>
                                                        <li><a href="elements.html">Element</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Pages</a>
                                                    <ul class="submenu">
                                                        <li><a href="project_details.html">Project Details</a></li>
                                                        <li><a href="services_details.html">Services Details</a></li>
                                                        <li><a href="elements.html">Element</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul> -->
                                    </div>
                                </div>
                            </div> 
                            <div class="col-xl-1 col-lg-2">
                                <!-- Search Box -->
                                <div class="search d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <div class="nav-search search-switch">
                                                <span class="fas fa-search"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>