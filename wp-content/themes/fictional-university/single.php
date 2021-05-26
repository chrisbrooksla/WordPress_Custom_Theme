
<!-- wordpress looks for this file, "single.php" when linking from "index.php" -->
<!-- so its "powered" by "single.php" -->

<?php get_header(); ?>

<?php 

      while(have_posts()){ 
            the_post();?>
      <h2><<?php the_title(); ?></h2>
      <?php the_content(); ?>


<?php } 

get_footer(); 
?>

