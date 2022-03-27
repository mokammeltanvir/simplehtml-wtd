<?php get_header();?>

<?php
$s = get_search_query();
$args = array(
    's' => $s,
);
//The Query
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();
        get_template_part('template-parts/content', 'blogs');
    }
    wp_reset_postdata();
} else {
    ?>
  <h2 style='font-weight:bold;color:red'>Nothing Found</h2>
  <div class="alert alert-info">
  <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords</p>
  </div>

<?php }?>

<?php get_footer();?>
