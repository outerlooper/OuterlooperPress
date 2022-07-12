<?php 
/**
 * The template for displaying search results.
 * See: -https://wphierarchy.com/
 */
get_header();
?>

<div id="primary" class="search-content-area">
    <main id="main" class="site-main">
        <?php if ( have_posts() ) : 

                // Start the loop.
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/post/content', 'search' );
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
</div>

<?php
get_footer();