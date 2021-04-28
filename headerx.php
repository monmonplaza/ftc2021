<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Face The Children</title>
    <?php wp_head()?>
  </head>
  <body>
    <header class="">
      <div class="login-bar bg-primary">
        <div class="container">
          <ul>
          <li><a href="https://www.thefrontline.asia/" target="_blank">Visit Philippine Frontline Ministries</a></li>
            <li><a href="">Log in</a></li>
          </ul>
        </div>
      </div>

      <div class="main-header ">
        <div class="container clearfix">
          <div class="branding float-left">
            <a href="<?php echo esc_url(site_url('/'))?>"
              ><img src="<?php echo get_template_directory_uri()?>/img/ftc_logo_colored.svg" alt="Main Logo"
            /></a>
          </div>
          <div class="toggle-menu" id="toggleMenu">
            <span class="bar bar-top"></span>
            <span class="bar bar-mid"></span>
            <span class="bar bar-bottom"></span>
          </div>

          <nav class="float-right">
           <?php wp_nav_menu(array(
               'theme_location' => 'headerMenuLocation'
               )
           ); ?>
          </nav>
        </div>
      </div>
    </header>