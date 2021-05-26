<!-- all the other files before this have been template files, or frontend files -->
<!-- this is more of a backend file, where we tell wordpress what to do -->


<?php

// define a function....
function university_files(){

      // load a JavaScript file for the image slider....
      // wp_enqueue_script takes 5 arguments...
      // 1 - the name of the file (call it anything)
      // 2 - the file path (file_uri)
      // 3 - if this script depends on any other scripts (in our case, no), we will put NULL
      // 4 - the version number of this script (here we just put 1.0), it's a made up number in this case
      // 5 - this is asking if we want to load the file right before the closing body tag (we say'true')
      wp_enqueue_script( 'main-university-js', get_theme_file_uri( '/js/scripts-bundled.js'), NULL, '1.0', true);

      // load in google fonts (link from index.html).....
      wp_enqueue_style( 'custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

      // load in font'awesome(link from index.html)....
      wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

// here we can load as many CSS or JavaScript files as we want...
// this takes 2 arguments..1) what is the name of our main stylesheet, 2) is the location that points toward the file
// since we just want to work with "style.css", we don't need to manually spell out a location, it's by default
      wp_enqueue_style( 'university_main_styles', get_stylesheet_uri());
}

// "wp_enqueue_scripts" tell wordpress that we want to load some CSS or JavaScript files
// we add a custom name for the second argument to define which script we want to load
// "add_action" always takes 2 arguments
// argument 1 is telling wordpress what type of instructions we are giving it
// argument 2 is telling wordpress the name of the function that we want to run

// this is essentially telling wordpress to include our CSS...
      add_action('wp_enqueue_scripts', 'university_files');


      // define a function to display the page title in the browser tab...
      // the page title is defined in the Settings:General screen of wordpress
      function university_features(){
            add_theme_support( 'title-tag' );
      }

      // add another action that will put the title tag in the browser tab....
      add_action( 'after_setup_theme', 'university_features');
?>



<!-- to load a javascript file we would say "wp_enqueue_script" instead of "wp_enqueue_style" -->