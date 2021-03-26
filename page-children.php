<?php get_header(); ?>

<section class="banner-sm">

      <div class="container">

        <div class="banner-content-sm">

          <h1>

            Make a <span class="text-bold">difference</span> in<br />

            the lives of<span class="text-bold"> street<br />children</span>

          </h1>

          <a href="#" class="btn bg-primary"> Sponsor Now</a>

        </div>

      </div>

    </section>



    <section class="all-kids">

      <div class="container">

        <div class="all-kids-nav">

          <ul>

            <li class="active-tab ">

              <a href="#" id="tab-1" class="kids-nav-item ">Resident Kids</a>

            </li>

            <li>

              <a href="#" id="tab-2" class="kids-nav-item">Non-Resident Kids</a>

            </li>

            <li>

              <a href="#" id="tab-3" class="kids-nav-item"

                >Fully Sponsored Kids</a

              >

            </li>

            <li class="bg-secondary ">

              <a href="<?php esc_url(site_url('donation'))?>" class="all-kids-gen-donation text-light"

                >General Donation</a

              >

            </li>

          </ul>

        </div>



        <div class="kids-wrapper  show" id="tab-1-content">

          <p>

            Resident kids are those who live at the Face The Children Center.

            They are living together with the house parents and other Children

          </p>

          <div class="row">

          <?php

              $args =  array(

                      'post_type'       => 'children',

                      'tax_query' => array(

                        array (

                          'taxonomy' => 'category',

                          'field'    => 'slug',

                          'terms'    => 'resident'

                        ))

                    );



              $resident = new WP_Query($args);

          ?>

            <?php if( $resident->have_posts()):while($resident->have_posts()):$resident->the_post(); ?>

            <div class="col-md-3">

              <div class="box-all-child">

                <div class="childbox">

                 <?php if(has_post_thumbnail()) {

                     the_post_thumbnail();

                 }?>

                  <div class="childbox-content ">

                    <div class="progress-bar">

                      <div class="progress-bar-value"></div>

                      <p class="progress-bar-percent"></p>

                    </div>

                    <a href="<?php the_permalink(); ?>" class="btn bg-secondary"

                      >Sponsor <?php the_title(); ?></a

                    >

                  </div>

                </div>

              </div>

            </div>



            <?php

                    endwhile;

                else :

                    echo "no more child";

                endif;



            ?>



          </div>

        </div>



        <!-- Non-resident -->

        <div class="kids-wrapper " id="tab-2-content">

          <p>

            Non - resident kids are those who are not living at the Face the

            Children Center but Frontline supports their education at Frontline

            Christian Academy

          </p>

          <div class="row">

          <?php

              $args =  array(

                      'post_type'       => 'children',

                      'tax_query' => array(

                        array (

                          'taxonomy' => 'category',

                          'field'    => 'slug',

                          'terms'    => 'non-resident'

                        ))

                    );



              $nonresident = new WP_Query($args);

          ?>

            <?php if( $nonresident->have_posts()):while($nonresident->have_posts()):$nonresident->the_post(); ?>

            <div class="col-md-3">

              <div class="box-all-child">

                <div class="childbox">

                <?php if(has_post_thumbnail()) {

                     the_post_thumbnail();

                 }?>

                  <div class="childbox-content ">

                    <div class="progress-bar">

                      <div class="progress-bar-value"></div>

                      <p class="progress-bar-percent"></p>

                    </div>

                    <a href="<?php the_permalink(); ?>" class="btn bg-secondary"

                      >Sponsor <?php the_title(); ?></a

                    >

                  </div>

                </div>

              </div>

            </div>

            <?php

                    endwhile;

                else :

                    echo "no more child";

                endif;



            ?>



          </div>

        </div>



        <!-- fully sponsored -->

        <div class="kids-wrapper " id="tab-3-content">

          <p>

            Fully sponsored

          </p>

          <div class="row">

          <?php

              $args =  array(

                      'post_type'       => 'children',

                      'tax_query' => array(

                        array (

                          'taxonomy' => 'category',

                          'field'    => 'slug',

                          'terms'    => 'full-sponsored'

                        ))

                    );



              $fullsponsored = new WP_Query($args);

          ?>

            <?php if( $fullsponsored->have_posts()):while($fullsponsored->have_posts()):$fullsponsored->the_post(); ?>

            <div class="col-md-3">

              <div class="box-all-child">

                <div class="childbox">

                <?php if(has_post_thumbnail()) {

                     the_post_thumbnail();

                 }?>

                  <div class="childbox-content ">

                    <div class="progress-bar">

                      <div class="progress-bar-value"></div>

                      <p class="progress-bar-percent"></p>

                    </div>

                    <a href="<?php the_permalink(); ?>" class="btn bg-secondary"

                      >Sponsor <?php the_title(); ?></a

                    >

                  </div>

                </div>

              </div>

            </div>

            <?php

                    endwhile;

                else :

                    echo "no more child";

                endif;



            ?>

          </div>

        </div>

      </div>

      </section>







<section class="contact-callout text-center">
    <div class="contact-callout-wrapper">
      <h2 class="primary-header">
        We are open to the many
        <span class="text-bold">innovative ways</span> that children can be
        impacted toward <span class="text-bold">physical</span>,
        <span class="text-bold">mental</span>,
        <span class="text-bold">educational</span>, and
        <span class="text-bold">spiritual wholeness</span>.
      </h2>
      <a href="<?php echo site_url('contact')?>" class="btn bg-secondary">Send us an Email</a>
    </div>
  </section>



<?php get_footer(); ?>