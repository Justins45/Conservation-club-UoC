<?php
/**
 * Template Name: Submissions Template
 */

get_header();
?>

<main id="primary" class="site-main">
  <h1>Submissions</h1>
<?php 
  $args = array(
    'post_type'=> 'post',
    'orderby'    => 'ID',
    'post_status' => 'publish',
    'order'    => 'DESC',
    'posts_per_page' => -1 // this will retrive all the post that is published 
  );
  $result = new WP_Query( $args );
  if ( $result-> have_posts() ) : 
?>
<div class="submissions-container">
  <?php while ( $result->have_posts() ) : $result->the_post(); ?>
    <div class="submission-block">
      <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail('thumbnail');
      } ?>
      <h2 class="submission-title"><?php the_title(); ?></h2>
      <div class="submission-category">
        <?php the_category(); ?>
      </div>
      <p class="submission-excerpt"><?php the_excerpt(); ?></p>
      <p class="submission-author"><?php the_author(); ?> | <?php the_date(); ?></p>
      <p></p>

      <a href="<?php the_permalink(); ?>" target="_blank">Read more!</a>
    </div>
  <?php endwhile; ?>
  <?php endif; wp_reset_postdata(); ?>
</div>
</main>

<?php
get_sidebar();
get_footer();