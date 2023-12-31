
<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="site-info">
            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'your-text-domain' ) ); ?>">
                <?php
                /* translators: %s: CMS name, i.e. WordPress. */
                printf( esc_html__( 'Proudly powered by %s', 'your-text-domain' ), 'WordPress' );
                ?>
            </a>
            <span class="sep"> | </span>
            <?php
            /* translators: 1: Theme name, 2: Theme author. */
            printf( esc_html__( 'Theme: %1$s by %2$s.', 'your-text-domain' ), 'Your Theme Name', '<a href="https://yourwebsite.com/">Your Name</a>' );
            ?>
        </div><!-- .site-info -->
    </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?> <!-- Essential for WordPress to load scripts and additional footer items properly -->

</body>
</html>
