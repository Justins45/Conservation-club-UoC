<?php
/**
 * Template Name: Home Template
 */

get_header();
?>

<main id="primary" class="site-main">

  <div>
    <div>
      <h1>Wildlife Conservation Club</h1>
      <p>Investing in the Future of Our Planet</p>
    </div>
    <div class="content-container multi-intro">
      <h2>Why is this Important? Who are we?</h2>
      <h3>What is the WWC?</h3>
      <p>The WCC is a University of Calgary SU Club that aims to conserve and protect the habitats of endangered species while also raising awareness about sustainability and sustainable practices.</p>
      <p>Important especially now during times where many animals are endangered and in a time of ecological crisis.</p>
    </div>
    <div class="home-posts">
      <?php
        if ( have_posts() ) :
          /* Start the Loop */
          while ( have_posts() ) :
            the_post();
            /*
            * Include the Post-Type-specific template for the content.
            * If you want to override this in a child theme, then include a file
            * called content-___.php (where ___ is the Post Type name) and that will be used instead.
            */
            get_template_part( 'template-parts/content', get_post_type() );

          endwhile;

          the_posts_navigation();

        else :

          get_template_part( 'template-parts/content', 'none' );

        endif;
      ?>
    </div>
  </div>

</main>

<?php
get_sidebar();
get_footer();