<!-- wordpress looks for this file when navigating to new pages from home -->
<!-- this file (individual pages, instead of posts) is powered by "page.php" -->

<?php 

      get_header();

      while(have_posts()){ 
            the_post();?>
            
            <!-- add your HTML here...... -->
            <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg' )  ?>);"></div>
    <div class="page-banner__content container container--narrow">
          <!-- get the title for the page with the "the_title()" function.... -->
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>DON'T FORGET TO REPLACE ME LATER</p>
      </div>
    </div>  
  </div> 

  <div class="container container--narrow page-section">


  <!-- ----------------------------------------------------------------------------------------------- -->
  <!-- this is the breadcrumb box on our page -->
  <!-- "get_the_ID" will give you the specific page ID for the current page being viewed, 
        this allows us to easily link between child pages -->
        <!--
            <?php  
                  echo get_the_ID();
            ?>
        -->

        <!-- get_post_parent will give us the ID number of the current page's parent -->
        <!-- so with get_the_ID, we are saying "give us the ID number of the current page we are viewing
      and give us the parent page of that page(get_post_parent_id) -->
      <!-- if the page has no parent, the ID will be 0 -->
      <!--
        <?php  echo wp_get_post_parent_id(get_the_ID())?>
      -->
      <!-- this code only runs if there is a page ID number that is a number other than 0 (FALSE) -->
      <!-- so basically, run this code if there is a parent page.... -->
      <!-- this code displays the breadcrumb box if we are viewing a child page...-->
      <?php
            $theParent = wp_get_post_parent_id(get_the_ID());
            if($theParent){ ?>
                  <div class="metabox metabox--position-up metabox--with-home-link">
                        <!-- "get_the_title" allows us to pass in the ID number in the parentheses and it will give us that page title-->
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?>a> 
      <!-- "the_title" gives us the title for the current post or page... -->
      <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>
            <?php }
            ?>
<!-- --------------------------------------------------------------------------------------------------- -->
    
    
    <!-- this is the sidebar navigation menu.... -->
    <?php 
      $testArray = get_pages(array(
            'child_of' => get_the_ID()
      ));

    if($theParent or $testArray) { ?>
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent);?>"><?php echo get_the_title( $theParent);?></a></h2>
      <ul class="min-list">
            <!-- this function creates links for every single page on the website if parenthesis left blank.. -->
            <!-- but we only want the children pages of the current page being viewed-->
            
        <?php 
        if($theParent){
            $findChildrenOf = $theParent;
        } else {
              $findChildrenOf = get_the_ID();
        }
            wp_list_pages(array(
                  'title_li' => NULL,
                  'child_of' => $findChildrenOf,
                  'sort_column' => 'menu_order'
            ));
        ?>

      </ul>
    </div>
     <?php } ?>

    <div class="generic-content">
          <!-- get the page content with the function "the_content()".... -->
          <!-- the content is defined on the specific page in the wp-admin "pages" section of wordpress.... -->
      <?php the_content(); ?>
    </div>

  </div>

  <!-- close out the HTML and get the footer from PHP.... -->
      <?php } 

      get_footer();

?>   