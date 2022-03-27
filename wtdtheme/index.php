<?php get_header();?>
        <!-- Banner Start Here -->
    <div class="banner owl-carousel">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide1.jpg" alt="Banner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide2.jpg" alt="Banner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide3.jpg" alt="Banner">
    </div>
        <!-- Banner End Here -->

        <!-- Services Start Here -->
        <?php get_template_part('template-parts/content', 'services');?>
        <!-- Services Start End -->

        <!-- Blog Start Here -->
    <div id="about"  <?php post_class(array("blogs", "fix"));?>>

    <div class="blog-left">
        <h4>latest blog</h4>
        <?php get_template_part('template-parts/content', 'blogs');?>
    </div>
    <div class="search">
        <h4>Search Post</h4>
        <?php get_search_form();?>
        </div>
        <?php get_sidebar();?>
        </div>
        <!-- Blog End Here -->

<?php get_footer();?>