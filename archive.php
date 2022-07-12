<?php 
/**
 * The template for displaying archive pages.
 * See: -https://wphierarchy.com/
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php if ( have_posts() ) : ?>
            <header class="archive-page-header">
                <?php 
                    the_archive_title( '<h1 class="archive-title">', '</h1>' );
                    the_archive_description( '<div class="archive-description">', '</div>' );
                ?>
            </header>
            <?php 
                // Start the loop.
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/post/content', get_post_format() );
                endwhile;

                echo paginate_links( 
                    // Customize pagination.
                    // [
                    // 'prev_text' => esc_html__( 'Prev', 'CoopsBaseTheme' ),
                    // 'next_text' => esc_html__( 'Next', 'CoopsBaseTheme' ),
                    // ] 
                );
            ?>
            <?php else : 
                get_template_part( 'template-parts/page/content', 'none' ); // content-none.php
            endif; ?>
    </main>
    <?php get_sidebar(); ?>
</div>

<?php
get_footer();