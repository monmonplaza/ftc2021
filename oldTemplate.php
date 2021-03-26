
  <div class="row my-5">

          <?php
              $args =  array(
                      'post_type'       => 'children',
                      'post_per_page'   => 6
              );

              $child = new WP_Query($args)
          ?>

          <?php if( $child->have_posts() ) : while($child->have_posts()) : $child->the_post();  ?> -->
         

          <div class="col-sm-6 col-md-3">
            <div class="quick-sponsor-box">
              <div class="quick-sponsor-box-img">
                <?php the_post_thumbnail("fp_thumb"); ?>
              </div>
              <div class="quick-sponsor-box-content">
                <h4><?php the_title()?></h4>
                <?php  $age = date_diff(date_create(get_field("birthday")), date_create("today"))->y; ?>
                <p> <?php echo $age?> years old </p>
                <a href="<?php the_permalink();?>" class="btn-sm bg-secondary">Sponsor Me
                </a>
              </div>
            </div>
          </div>

          <?php
              endwhile;
             else :
              echo "<p>There are no more children</p>";
          endif;
          wp_reset_postdata();
          ?> 
          



        </div>
      </div>