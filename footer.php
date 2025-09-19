	<footer id="colophon">
		<div class="footer-content">
			<div>
          <?php
        the_custom_logo();
        if ( is_front_page() && is_home() ) :
          ?>
          <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
          <?php
        else :
          ?>
          <p class="footer-logo-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <?php endif; ?>
      </div>
      <div class="footer-menus">  
        <div class="footer-menu-col">
          <!-- Footer col 1 -->
          <h3>Our Club</h3>
          <?php
            wp_nav_menu(
              array(
                'menu' => 'footer-menu-1',
              )
            );
          ?>
        </div>
        <div class="footer-menu-col">
          <!-- Footer col 2 -->
          <h3>Get Involved</h3>
          <?php
            wp_nav_menu(
              array(
                'menu' => 'footer-menu-2',
              )
            );
          ?>
        </div>
        <div class="footer-menu-col">
          <!-- Footer col 3 -->
          <h3>Learn More</h3>
          <?php
            wp_nav_menu(
              array(
                'menu' => 'footer-menu-3',
              )
            );
          ?>
        </div>        
      </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
