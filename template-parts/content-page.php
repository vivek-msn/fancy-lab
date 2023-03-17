<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fancy Lab
 */
?>
<article class="col">
    <h1><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>
    <?php
            if( comments_open() || get_comments_number() ):
            comments_templates();
            endif;
    ?>
</article>