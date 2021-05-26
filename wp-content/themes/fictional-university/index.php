
 <!-- ------------------------------------------------------------------------ -->
  <!-- HEADER AND FOOTER -->
  <!-- this gets the header from header.php -->
      <?php get_header() ?>

      <div class="page-banner">
            <!-- "get_theme_file_uri" is a wordpress function used to find files like images(be sure to wrap in php) -->
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>);"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
        <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
        <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
      </div>
    </div>

    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>

          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Mar</span>
              <span class="event-summary__day">25</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Poetry in the 100</a></h5>
              <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="nu gray">Learn more</a></p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Apr</span>
              <span class="event-summary__day">02</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Quad Picnic Party</a></h5>
              <p>Live music, a taco truck and more can found in our third annual quad picnic day. <a href="#" class="nu gray">Learn more</a></p>
            </div>
          </div>

          <p class="t-center no-margin"><a href="#" class="btn btn--blue">View All Events</a></p>
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Jan</span>
              <span class="event-summary__day">20</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">We Were Voted Best School</a></h5>
              <p>For the 100th year in a row we are voted #1. <a href="#" class="nu gray">Read more</a></p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Feb</span>
              <span class="event-summary__day">04</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Professors in the National Spotlight</a></h5>
              <p>Two of our professors have been in national news lately. <a href="#" class="nu gray">Read more</a></p>
            </div>
          </div>

          <p class="t-center no-margin"><a href="#" class="btn btn--yellow">View All Blog Posts</a></p>
        </div>
      </div>
    </div>

    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
              <!-- "get_theme_file_uri" is a wordpress function used to find files like images(be sure to wrap in php) -->
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri( '/images/bus.jpg') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Transportation</h2>
                <p class="t-center">All students have free unlimited bus fare.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri( '/images/apples.jpg') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">An Apple a Day</h2>
                <p class="t-center">Our dentistry program recommends eating apples.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri( '/images/bread.jpg') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Food</h2>
                <p class="t-center">Fictional University offers lunch plans for those in need.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>


    <!-- this brings in footer from footer.php -->
 <?php get_footer() ?>

















<!-- PHP FUNCTIONS -->

<!-- simple function for name and color.... -->
<!-- <?php
      function greet($name, $color){
            echo "<p>
            Hi, my name is $name and my favorite color is $color.
            </p>";
      }

      greet('John', 'green'); 
      greet('Jane', 'blue');  
?> -->


<!-- this displays 'Rolling Stones University' as defined in the wordpress admin 'general' settings... -->
<!-- <h1>
      <?php bloginfo( 'name' );?>
</h1> -->

<!-- this displays the description as defined in wordpress admin settings... -->
<!-- <p>
      <?php 
      bloginfo( 'description' );
      ?>
</p>   -->


<!-- PHP ARRAYS -->

<?php 
  $names = array('John', 'Paul', 'George', 'Ringo');
?>

<!-- <p>Hi , my name is <?php echo $names[0] ?></p> -->

<!-- ---------------------------------------------------------------------------------------------- -->
<!-- while loop (this is the type of loop wordpress uses...)-->
<!-- <?php
$stonesNames = array('Mick', 'Keith', 'Charlie', 'Ronnie');

$count = 0;

while($count < count($stonesNames)){
echo "<li>Hi, my name is $stonesNames[$count]</li>";
$count++;
}
?> -->
<!-- -------------------------------------------------------------------------------------------------- -->

<!-- the famous WordPress Loop -->
<!-- the loop is at the heart and soul of wordpress, used again and again all throughout... -->
<!-- is used on pages even with one post.... -->

<!-- have_posts is a built in wordpress function that takes the place of the normal while loop conditions-->
<!-- the "count" variable has been replaced by "the_post" , which tells wordpress all the relevant info about that particular post-->
<!-- "the_title" automatically displays the blog post title... -->
<!-- "the_permalink" automatically links to the blog post address... -->
<!-- "the_content" automatically displays the blog post content... -->
<!-- <?php 

while(have_posts()){ 
      the_post();?>
<h2><a href="<?  the_permalink() ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
<hr>

<?php } ?> -->
  

<!-- if a  wordpress function begins with the word "get", it won't echo anything out for you
it will just return a value, and it's up to you to use that value however you see fit

if a function begins with the word "the", wordpress will handle echoing and outputting it onto the page
-->
<!-- <?php

function doubleMe($x) {
      return $x * 2;
}

echo doubleMe(5);
?>
-->


<!-- associative array example -->

<!-- 

$animalSounds = array(
      'cat' => 'meow',
      'dog' => 'bark',
      'pig' => 'oink',
      'bird' => 'cheep'
);

echo $animalSounds['dog'];

(outputs 'bark')
 -->
