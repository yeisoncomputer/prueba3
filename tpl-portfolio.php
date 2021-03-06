<?php
/*
  Template Name: Portfolio
*/
?>

<?php get_header(); ?>

    <?php
    $args = array(
                 'category_name' => 'portfolio',
                 'post_type' => 'post',
                 'posts_per_page' => 12,
                 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                 );
    query_posts($args);
    $x = 0;
    while (have_posts()) : the_post(); ?>    
    
      <?php if($x == 2) { ?>
      <div class="portfolio_cat_list_box portfolio_cat_list_last">
      <?php } else { ?>
      <div class="portfolio_cat_list_box">
      <?php } ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cat-listing-image'); ?></a>
      </div><!--//portfolio_cat_list_box-->    
      
      <?php if($x == 2) { echo '<div class="clear"></div>'; $x = -1; } ?>
      <?php $x++; ?>
    <?php endwhile; ?>
    

  <div class="clear"></div>    
  
  <div class="navigation">
    <div class="left"><?php previous_posts_link('&laquo; Previous') ?></div>
    <div class="right"><div class="alignleft"><?php next_posts_link('Next &raquo;') ?></div></div>
    <div class="clear"></div>
  </div><!--//navigation-->    
    
    <?php wp_reset_query(); ?>
  
<?php get_footer(); ?>  