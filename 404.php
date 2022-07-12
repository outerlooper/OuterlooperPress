<?php
/**
 * Template for displaying 404 pages (not found).
 */
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'CoopsBaseTheme' ); ?></h1>
            </header>
            <div class="page-content">
                <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or search.', 'CoopsBaseTheme' ); ?></p>
                <?php get_search_form(); ?>
            </div>
        </section>
        <?php
        // while ( have_posts() ) :
        //     the_post();
        //     get_template_part( 'template-parts/page/content', 'page' ); // content-page.php
        
        //     // If comments are open then we can show the comments template.
        //     if ( comments_open() || get_comments_number() ) :
        //         comments_template();
        //     endif;
        // endwhile;
        ?>
    </main>
    <?php //get_sidebar(); ?>
</div>
<?php
get_footer();