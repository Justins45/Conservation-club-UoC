<?php
/**
 * Template Name: Home Template
 */

get_header();

$post_thumbnail = get_the_post_thumbnail_url();
?>

<main id="primary" class="site-main">
  <div style="background-image: url('<?php echo $post_thumbnail; ?>');" class="page-banner home-banner">
    <h1>Wildlife Conservation Club</h1>
    <p>Investing in the Future of Our Planet</p>
  </div>
  <div class="content-container">  
    <div class="multi-intro">
      <h2>Why is this Important? Who are we?</h2>
      <h3>What is the WWC?</h3>
      <p>The WCC is a University of Calgary SU Club that aims to conserve and protect the habitats of endangered species while also raising awareness about sustainability and sustainable practices.</p>
      <p>Important especially now during times where many animals are endangered and in a time of ecological crisis.</p>
    </div>
    <div>
      <!-- put stats 3 blocks -->
    </div>
    <div class="home-posts">
      <h2>Latest Posts</h2>
      <?php 
        $args = array(
          'post_type'=> 'post',
          'orderby'    => 'ID',
          'post_status' => 'publish',
          'order'    => 'DESC',
          'posts_per_page' => 5
        );
        $result = new WP_Query( $args );
        if ( $result-> have_posts() ) : 
      ?>
      <div class="home-submissions-container">
        <?php while ( $result->have_posts() ) : $result->the_post(); ?>
          <div class="home-submission-block">
            <h2 class="submission-title"><?php the_title(); ?></h2>
            <p class="submission-excerpt"><?php the_excerpt(); ?></p>
            <p class="submission-author"><?php the_author(); ?> | <?php the_date(); ?></p>
            <p></p>

            <a href="<?php the_permalink(); ?>" target="_blank">Read more!</a>
          </div>
        <?php endwhile; ?>
      <?php endif;?>
      </div>
    </div>
    <div class="be-the-difference-container">
      <div class="be-the-difference">
        <h2>Be the Difference</h2>
        <p>There are a multitude of ways you can be the difference. It all starts with an action, starting small always and sticking to your goals will always lead to a bigger impact.</p>
        <p>Check out our Get Involved page to learn more details about how you can be the Difference</p>
      </div>
    </div>
    <div>
      <!-- image -->
    </div>
    <div class="why-needed">
      <h2>Why is this needed?</h2>
      <p>Animal conservation is <span class="bolded">crucial</span> not only for the survival of individual species but also for the health of <span class="bolded">entire ecosystems and human well-being</span>. Each species plays a role in the intricate balance of life, and its disappearance can have widespread and unpredictable effects.</p>
    </div>
  </div>
  
</main>

<?php
get_sidebar();
get_footer();