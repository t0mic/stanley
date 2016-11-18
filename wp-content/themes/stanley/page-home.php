<?php
/*
    Template Name: Home Page
*/
// Advanced Custom Fields vars
    $contact_page_title= get_field('contact_page_title');

    
get_header(); ?>


	<!-- about -->
    <?php get_template_part('template-parts/content', 'about'); ?>
    <!-- items -->
    <?php get_template_part('template-parts/content', 'items'); ?>









<?php get_footer(); ?>