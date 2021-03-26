<?php wp_footer(); ?>

  <footer class="footer">
    <div class="container">
           <div class="footer__wrapper">
              <div class="footer__content">
                <img src="<?php echo get_template_directory_uri()?>/img/ftc_logo_wht.svg" alt="">
                <p>FTC has been privileged to help hundreds of children, has established several child care facilities, and now provides regular full time care, education, and opportunity for dozens of former street children.</p>
         
              </div>

           <div class="footer__nav">
           <h3>Quick Links</h3>
              <?php wp_nav_menu(array(
                  'theme_location' => 'footerMenuLocation'
                  )
                  
              ); ?>
           </div>
     
           </div>

     
    </div>
  </footer>

<?php 
    global $template;
    echo '<div class"template-name" style="position:fixed; left: 30px; bottom: 30px; padding:2px; background: coral; color:#fff; font-size: 13px;">'.basename($template).'</div>';

?>

    <div class="copyright">
      <div class="container">
        <p>&copy; <?php echo wp_date( 'Y' )?> Face The Children</p>
        <p><a href="https://www.thefrontline.asia/" target="_blank">Visit Philippine Frontline Ministries</a></p>
      </div>
    </div>

  </body>
</html>
