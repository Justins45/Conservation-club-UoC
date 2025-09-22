<?php
/**
 * Template Name: Login Template
 */

get_header();
?>

<main id="primary" class="site-main">
  <div>
    <h1>Login</h1>
    <?php wp_login_form(); ?>
  </div>
</main>


<?php
get_sidebar();
get_footer();