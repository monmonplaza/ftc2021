<?php get_header() ?>

      <section class="banner-sm" style="background-image:linear-gradient(to right, rgba(22,53,70,1) 35%, rgba(43,106,139,0.5)), url(<?php echo get_field('banner_image')['url']; ?>)">
            <div class="container">
                  <div class="banner-sm-wrapper">
                        <h2> <?php echo get_field('banner_header') ?> </h2>
                        <h3><?php echo get_field('banner_subheader') ?> </h3>
                  </div>
            </div>
      </section>


      <?php get_template_part('template/loop', 'standard')?>

<?php get_footer() ?>