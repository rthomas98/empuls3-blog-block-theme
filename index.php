<?php get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <h1 class="page-title"><?php single_post_title(); ?></h1>
            </header><!-- .page-header -->

            <?php
            // Start the loop.
            while ( have_posts() ) : the_post();

                /*
                 * Include the Post-Type-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                 */
                get_template_part( 'template-parts/content', get_post_type() );

            endwhile;

            // Previous/next page navigation.
            the_posts_navigation();

        else :

            // If no content, include the "No posts found" template.
            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>
    </div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
?>
