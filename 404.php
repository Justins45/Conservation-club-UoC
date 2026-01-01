<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package custom_justin_shaw
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'custom_justin_shaw' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p class="error-content"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'custom_justin_shaw' ); ?></p>
        <div class="error-search">
          <?php
					get_search_form();
          ?>
        </div>
        <div class="error-posts">
          <?php 
          the_widget( 'WP_Widget_Recent_Posts' );
          ?>
        </div>
					<div class="error-categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'custom_justin_shaw' ); ?></h2>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div><!-- .widget -->

          <div class="error-archives">
            <?php
            /* translators: %1$s: smiley */
            $custom_justin_shaw_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'custom_justin_shaw' ), convert_smilies( ':)' ) ) . '</p>';
            the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$custom_justin_shaw_archive_content" );

            the_widget( 'WP_Widget_Tag_Cloud' );
            ?>
          </div>
					

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
