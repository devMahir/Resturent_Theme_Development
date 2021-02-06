<?php 

//wordpress retreives the content it needs behind the scenes
//and stores it in a global variable

//Check if wordpress retrived post(s)
if ( have_posts() ) :
    //start the 'loop' (while loop)
    while ( have_posts() ) :
        //load the post data
        the_post(); ?>

        <!-- Loop content goes here (template tags) -->
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    
    <?php endwhile;
endif;
    
?>