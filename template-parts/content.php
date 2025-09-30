<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package custom_justin_shaw
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div>
    <h1 class="post-title"><?php the_title(); ?></h1>
		<?php
		  if ( 'post' === get_post_type() ) :
		?>
			<div class="post-meta">
				<?php
				  custom_justin_shaw_posted_on();
				  custom_justin_shaw_posted_by();
				?>
        <p>
          <?php 
            edit_post_link(
              sprintf(
                wp_kses(
                  /* translators: %s: Name of current post. Only visible to screen readers */
                  __( 'Edit <span class="screen-reader-text">%s</span>', 'custom_justin_shaw' ),
                  array(
                    'span' => array(
                      'class' => array(),
                    ),
                  )
                ),
                wp_kses_post( get_the_title() )
              ),
              '<p class="edit-link">',
              '</p>'
            );
          ?>
        </p>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</div><!-- .entry-header -->

	<?php custom_justin_shaw_post_thumbnail(); ?>

	<div class="post-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'custom_justin_shaw' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'custom_justin_shaw' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<div class="post-footer">
		<?php custom_justin_shaw_entry_footer(); ?>
	</div><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
