<?php get_header() ?>
<section class="banner">
  <div class="container">
    <div class="banner-wrapper">
      <div class="banner-content">
        <h1>
          Make a <span class="text-bold">difference</span> in<br />
          the lives of<span class="text-bold"> street<br />children</span>
        </h1>

        <a href="<?php echo esc_url(site_url('children'))?>" class="btn bg-primary">
          Sponsor Now</a
        >
      </div>
    </div>

  </div>
</section>
    

    <section class="sponsor-link">
      <div class="container">
        <h2 class="primary-header text-center">
            Let's Share to Change a life today
        </h2>
        <a href="https://demo.frontlinebusiness.com.ph/ftc-staging/children-list">
        <div class="img-link">
          <img src="<?php echo get_template_directory_uri()?>/img/ftc-sponsor-banner.jpg" alt="">
         
            <a href="https://demo.frontlinebusiness.com.ph/ftc-staging/children-list" class="goto-sponsor">Continue Sponsorship <img class="arrow" src="<?php echo get_template_directory_uri() ?>/img/arrow.svg" alt=""></a>
        </div>
      </div>
      </a>
    </section>

    <section class="ftc-provide">
      <div class="container">
        <div class="ftc-provide-wrapper">
          <div class="row">
            <div class="col-md-5">
              <div class="ftc-provide-content">
               <?php if(have_posts()) : while(have_posts()) : the_post();

                     the_content(); 
               ?>
                 

               <?php endwhile;
                else :
                  echo "No content to load.";
                
              endif;
               ?>
              </div>
            </div>
            <div class="col-md-7">
              <div class="ftc-provide-icon">
                <h2 class="text-center mb-3">
                  Services we provide to Children in need
                </h2>

                <ul>

                <li class="text-center">
                    <h4>Rehabilitate</h4>
                    <svg>
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#icon-help"></use>
                    </svg>
                  </li>

                  <li class="text-center">
                    <h4>Shelter</h4>
                    <svg>
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#icon-house"></use>
                    </svg>
                  </li>

                  <li class="text-center">
                    <h4>Education</h4>
                    <svg>
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#icon-education"></use>
                    </svg>
                  </li>

             
                  <li class="text-center">
                    <h4>Protection</h4>
                    <svg>
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#icon-protect"></use>
                    </svg>
                  </li>
                  <li class="text-center">
                    <h4>Medical</h4>
                    <svg>
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#icon-health"></use>
                    </svg>
                  </li>

                  <li class="text-center">
                    <h4>Mentoring</h4>
                    <svg>
                      <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#icon-mentor"></use>
                    </svg>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer() ?>