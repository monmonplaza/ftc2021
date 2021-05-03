<?php get_header(); ?>
<section class="banner-sm" style="background-image:linear-gradient(to right, rgba(22,53,70,1) 35%, rgba(43,106,139,0.5)), url(<?php echo get_field('banner_image')['url']; ?>)">
            <div class="container">
                  <div class="banner-sm-wrapper">
                        <h2> <?php echo get_field('banner_header') ?> </h2>
                        <h3><?php echo get_field('banner_subheader') ?> </h3>
                  </div>
            </div>
      </section>


<section class="gridboxes py-5">
  <div class="container">
      <div class="row">
        <?php
        $currentPage = get_query_var('paged');
        $newsQuery = new WP_Query(array(
            'post_type' => 'news',
            'posts_per_page' => 6,
            'paged' => $currentPage
        ));
         if( $newsQuery->have_posts()) : while( $newsQuery->have_posts()) :  $newsQuery->the_post();?>
          <div class="col-md-4">
            <div class="gridboxes__wrapper">
              <div class="gridboxes__wrapper__img">
                <?php if(has_post_thumbnail())
                    the_post_thumbnail('card_thumb');
                ?>
              </div>
              <div class="gridboxes__wrapper__content">
                <h3><?php the_title(); ?></h3>
                <small>Posted last: <?php the_date(); ?></small>
                <p><?php echo wp_trim_words(get_the_excerpt(), 13); ?></p>
                <a href="<?php the_permalink();?>" class="btn">Read More</a>
              </div>
            </div>
          </div>
        <?php
            endwhile; ?>
                <div class="pagination"> 
                <?php echo paginate_links( array(
                    'total' => $newsQuery->max_num_pages
                )); ?>
        </div>
          <?php
            else:
                echo "No more News";
                wp_reset_postdata();
            endif;
          ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>





