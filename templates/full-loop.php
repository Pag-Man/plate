<?php
/**
 * 
 * Template Part: The Full Width Loop
 * Description: Loop code for full width.
 * 
 * @example <?php get_template_part( 'templates/full-loop'); ?>
 * 
 * @author  Joshua Michaels for studio.bio <info@studio.bio>
 * @since   1.0.0
 * @version 1.3
 * @license WTFPL
 * 
 * @see     https://konstantin.blog/2013/get_template_part/
 *          http://buildwpyourself.com/get-template-part/
 * 
 */
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">

        <?php the_content(); ?>

    </article>

<?php endwhile; ?>

    <?php plate_page_navi( $wp_query ); ?>

<?php else : ?>

    <?php get_template_part( 'templates/404'); ?>

<?php endif; ?>