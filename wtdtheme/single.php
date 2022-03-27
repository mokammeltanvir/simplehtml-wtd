<?php get_header();?>

  <div class="single-post">
    <div class="content">
    <img src=" <?php echo the_post_thumbnail(); ?>" alt="">

    <h4><?php the_title();?></h4>
    <?php the_content();?>
  </div>
  <?php get_sidebar();?>

  </div>

<?php get_footer();?>
