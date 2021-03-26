<?php get_header(); ?>



<section class="banner-sm" style="background-image:linear-gradient(to right, rgba(22,53,70,1) 35%, rgba(43,106,139,0.5)), url(https://demo.frontlinebusiness.com.ph/dev/ftc2021/wp-content/uploads/2021/03/banner-1.jpg)">
  <div class="container">
        <div class="banner-sm-wrapper">
              <h2 class="text-center"> <?php the_title()?> </h2>
             
        </div>
  </div>
</section>



<section class="news-single py-5">

      <div class="container">



        <?php   if(have_posts()) : while( have_posts()) :  the_post()?>

              <div class="article-banner">
                <ul class="metainfo  ">
              
                  <li> Posted: <span class="metainfo__date"><?php the_date();?></span></li>
                </ul>
              <?php if(has_post_thumbnail()) {the_post_thumbnail();}  ?>

        </div>

        <article>

            <?php the_content(); ?>

        </article>



  



        <div class="article-nav">

          <ul>

            <li>

            <?php previous_post_link('%link', ' Previous News'); ?>

            </li>

            <li>

            <?php next_post_link('%link', ' Next News'); ?>

            </li>

          </ul>

        </div>



        <?php

            endwhile; 

            else:

                echo "No more News";

             

            endif;

        ?>



        <div class="recent__article">

            <h2>Latest Article</h2>

          <div class="row">



            <?php $queryNews = new WP_Query(array(

                'post_type' => 'news',

                'posts_per_page' => 3

            ))

            

            ?>

          <?php if($queryNews->have_posts()) : while($queryNews->have_posts()) : $queryNews->the_post();?>

            <div class="col-md-4">

                <div class="gridboxes__wrapper">

                    <div class="gridboxes__wrapper__img">

                     <?php if(has_post_thumbnail()) {

                        the_post_thumbnail(); 

                     }?>

                    </div>

                    <div class="gridboxes__wrapper__content">

                      <h3><?php the_title();?></h3>

                      <p>

                        <?php echo wp_trim_words(get_the_excerpt(), 15)?>

                      </p>

                      <a href="<?php echo get_the_permalink();?>">Read More</a>

                    </div>

                  </div>

              </div>



            <?php 

                endwhile;

              else: 

                echo esc_html_e( 'no news to post' );

              endif;



              wp_reset_postdata();

            ?>  

      

            </div>

          </div>

        </div>

      </div>

    </section>











<?php get_footer(); ?>