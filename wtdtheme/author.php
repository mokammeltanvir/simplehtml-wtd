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
        <div class="blogs">
            <div class="blog-left">
                <h4>Post By: <?php the_author();?></h4>
            <?php get_template_part('template-parts/content', 'blogs');?>
        </div>
        <div class="author-info">
          <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>">
                  <h5>Name: <?php the_author();?></h5>
                  <p>Description: <?php the_author_meta('description')?></p>
                  <p>Email: <?php the_author_meta('email')?></p>
                </div>
          <?php get_sidebar();?>
        </div>
        <!-- Blog End Here -->

<?php get_footer();?>