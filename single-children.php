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





<section class="main">

    <div class="container">

    <div class="child-info-wrapper">

        <?php if(have_posts()):while(have_posts()):the_post(); ?>

          <div class="row">

            <div class="col-md-4">

              <div class="child-info-img">

                <?php if(has_post_thumbnail())  {

                    the_post_thumbnail();

                }?>

              </div>

            </div>



            <div class="col-md-8">
              <div class="child-info-content">
                <h2>Sponsor a Child</h2>
                <h3 class="text-bold"><?php the_title();?> - <?php the_field('age');?> years old</h3>
                <p><?php the_content();?></p>
              <div class="child-info-content-support">

                  <p>You can support this child by sharing time with them and monthly or one-time donation</p>
                  <form action="" id="formSponsorChild">
                    <span class="hide-me" id="childID"> <?php echo get_the_ID();?></span>
                    <span class="hide-me" id="childName" ><?php the_title(); ?></span>
                    <?php the_post_thumbnail(array('class'=>'hide hide-me child-img'));?>

                      <div class="form-group">
                          <label>Select Donation Amount</label>
                          <div class="radio-wrap"><input type="radio" name="sponsorAmt" value="5" /><span> 20</span> USD</div>
                          <div class="radio-wrap"><input type="radio" name="sponsorAmt" value="10" checked/> <span>50</span> USD</div>
                          <div class="radio-wrap"><input type="radio" name="sponsorAmt" value="20" /> <span>100</span> USD</div>
                      </div>
                      <p>Note: You will be automatically monthly sponsoring this child </p>
                      <button class="btn bg-secondary" id="sponsorBtn"> Sponsor <?php echo get_the_title(); ?></button>
                  </form>
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
</section>

<section class="other-child">
      <div class="container">
        <h2 class="primary-header">
          Your help will provide
          <span class="text-bold">holistic development </span>for
          <span class="text-bold">children</span>
        </h2>
        <div class="row">
           <?php
                $childrenQuery = new WP_Query( array(
                    'post_type' => 'children',
                    'posts_per_page' => 4
                    )
                );
           ?>



        <?php if($childrenQuery->have_posts()):while($childrenQuery->have_posts()):$childrenQuery->the_post(); ?>

          <div class="col-md-3">

            <div class="other-child-box">

            <?php if(has_post_thumbnail())  {

                    the_post_thumbnail();

                }?>

              <div class="other-child-box-info">

                <div class="d-flex justify-between align-center">

                  <h3><?php the_title();?></h3>

                  <p><?php the_field('age')?> yrs</p>

                </div>

                <div class="donation-bar">

                  <div class="donation-bar-percent"></div>

                </div>

                <a href="<?php echo the_permalink()?>" class="btn bg-secondary"> Support</a>

              </div>

            </div>

          </div>



        <?php

                    endwhile;

                else :

                    echo "no more child";

                endif;

            wp_reset_postdata();

            ?>



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