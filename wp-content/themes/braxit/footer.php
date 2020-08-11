    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Company</h4>
                                <ul>
                                    <li><a href="#">Why choose us</a></li>
                                    <li><a href="#"> Review</a></li>
                                    <li><a href="#">Customers</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Carrier</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Production</h4>
                                <ul>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Products</a></li>
                                    <li><a href="#">Quality</a></li>
                                    <li><a href="#">Sales geography</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Us -->
                    <!-- Newsletter -->
                    <?php
                        if( is_active_sidebar('widget_area') ) {
                            dynamic_sidebar('widget_area');
                        }
                    ?>
                    
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                <p><?php echo get_theme_mod('footer_copyright'); ?> <i class="<?php echo get_theme_mod('font_icon'); ?>" aria-hidden="true"></i>  by <a href="<?php echo get_theme_mod('made_by_link'); ?>" target="_blank"><?php echo get_theme_mod('made_by'); ?></a></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <?php if(get_theme_mod('show_social_accounts')) { ?>
                                <div class="footer-social f-right">
                                    <?php if(get_theme_mod('twitter_footer_url')){
                                        ?>
                                        <a href="<?php echo get_theme_mod('twitter_footer_url'); ?>"><i class="fab fa-twitter"></i></a>
                                        <?php
                                    } 
                                    ?>
                                    <?php if(get_theme_mod('facebook_footer_url')){
                                        ?>
                                        <a href="<?php echo get_theme_mod('facebook_footer_url'); ?>"><i class="fab fa-facebook-f"></i></a>
                                        <?php
                                    } 
                                    ?>
                                    <?php if(get_theme_mod('globe_footer_url')){
                                        ?>
                                        <a href="<?php echo get_theme_mod('globe_footer_url'); ?>"><i class="fas fa-globe"></i></a>
                                        <?php
                                    } 
                                    ?>
                                    <?php if(get_theme_mod('insta_footer_url')){
                                        ?>
                                        <a href="<?php echo get_theme_mod('insta_footer_url'); ?>"><i class="fab fa-instagram"></i></a>
                                        <?php
                                    } 
                                    ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

<?php 

    wp_footer();

?>
    </body>
</html>