<?php

get_header();
 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
 
    <article class="post">
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <h4>Posted on <?php the_time( 'F jS, Y' ); ?></h4>
        <?php the_excerpt() ?>
    </article>	
	<?php endwhile;
 
else :
	echo '<p>There are no posts!</p>';
 
endif;

posts_nav_link();
 
get_footer();
?>
