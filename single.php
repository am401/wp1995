<?php

get_header();

while ( have_posts() ) : the_post();
    get_template_part( 'content', get_post_format());
	the_content();
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'wp1995' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'wp1995' ) . '</span> ',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'wp1995' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'wp1995' ) . '</span> ',
            ) );
endwhile;
