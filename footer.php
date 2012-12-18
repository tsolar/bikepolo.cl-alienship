<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Alien Ship
 * @since Alien Ship 0.1
 */
?>

	</div><!-- #main -->
  <?php do_action( 'alienship_main_after' ); ?>
  <div id="footer-container" class="container-fluid">
      <div class="icons">
          <ul class="nav nav-pills">
              <li>
                  <a href="//facebook.com/StgoBikePolo" target="_blank">
                      <img alt="" src="<?php echo get_template_directory_uri().'-child'; ?>/icons/PNG/32px/facebook.png" />
                  </a>
              </li>
              <li>
                  <a href="//twitter.com/StgoBikePolo" target="_blank">
                      <img alt="" src="<?php echo get_template_directory_uri().'-child'; ?>/icons/PNG/32px/twitter.png" />
                  </a>
              </li>
              <li>
                  <img alt="" src="<?php echo get_template_directory_uri().'-child'; ?>/icons/PNG/32px/instagram.png" />
              </li>
              <li>
                  <img alt="" src="<?php echo get_template_directory_uri().'-child'; ?>/icons/PNG/32px/pinterest.png" />
              </li>
          </ul>
      </div>
<!--    <div id="footer-row" class="row-fluid footerwidget">
      <?php dynamic_sidebar("Footer"); ?>
    </div> #footer-row 
    <div id="footer2-row" class="row-fluid footerwidget">
      <?php dynamic_sidebar("Footer 2"); ?>
    </div> #footer2-row -->
  </div><!-- #footer-container -->

</div><!-- #page -->
<?php do_action( 'alienship_footer_before' ); ?>
<footer class="colophon" id="colophon" role="contentinfo">
  <?php do_action( 'alienship_footer_inside' ); ?>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span5">
        <?php if ( of_get_option('alienship_custom_footer_toggle') ) {
        echo '' . of_get_option('alienship_custom_footer_text') . '';
        } else {
          echo 'Copyright &copy; ' . date('Y') . ' ' . get_bloginfo('name') . '. All Rights Reserved.'; } ?>
      </div><!-- .span5 -->
      <div class="span6">
        <?php if ( has_nav_menu( 'bottom' ) ) { wp_nav_menu(array('theme_location' => 'bottom', 'container' => false, 'menu_class' =>  'footer-nav mobile')); } ?>
      </div>
    </div><!-- row-fluid -->
  </div><!-- container-fluid -->
</footer><!-- #colophon -->
<?php do_action( 'alienship_footer_after' ); ?>

<?php wp_footer(); ?>

<?php do_action( 'alienship_footer' ); ?>

</body>
</html>