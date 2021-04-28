<?php get_header() ?>
<section class="banner">
  <div class="container">
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
</section>

    <section class="quick-sponsor">
      <div class="container">
        <h2 class="primary-header text-center">
          Let's <span class="text-bold">Share to Change </span>a life today
        </h2>


        <div class="children__list">
          <div class="preloader__wrapper show">
				   <svg class="spinner" width="60px" height="60px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
      		  <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30" ></circle>
           </svg>
		    	</div>
        </div>

        <div class="no__child text-center">
            <img src="<?php echo get_template_directory_uri() ?>/img/missing_child.svg" alt="Missing Child">
            <p>There is a problem on loading the child list</p>
          </div>
        <div class="text-center">
          <!-- <a href="#" class="btn bg-primary">Sponsor Now</a> -->
          <a href="https://demo.frontlinebusiness.com.ph/ftc-staging/children-list" class="btn bg-secondary">View All Kids</a>
        </div>
    </section>

    <section class="ftc-provide">
      <div class="container">
        <div class="ftc-provide-wrapper">
          <div class="row">
            <div class="col-md-5">
              <div class="ftc-provide-content">
                <h2>Lorem ipsum dolor sit.</h2>
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Praesentium molestias temporibus libero id, nihil eos error
                  quis et, iusto fuga modi excepturi dignissimos quas voluptates
                  quia vitae ut nesciunt natus.
                </p>

                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Fugit, consectetur deserunt minus ut at deleniti?
                </p>
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