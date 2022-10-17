<?php
/*
Template Name: Flexible Template
*/
get_header();

if (have_rows('content')):
    while(have_rows('content')): the_row();
        get_template_part('blocks/acf/block', get_row_layout());
    endwhile;
endif;

get_footer();
?>