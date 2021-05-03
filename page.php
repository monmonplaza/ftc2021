<?php get_header() ?>

<?php 
      if(is_page('about')) {
            $lgOnly = "lg-only";
      } else {
            $lgOnly = "";
      }
      
?>

<section class="banner-sm <?php echo $lgOnly; ?>" style="background-image:linear-gradient(to right, rgba(22,53,70,1) 35%, rgba(43,106,139,0.5)), url(<?php echo get_field('banner_image')['url']; ?>)">
      <div class="container">
            <div class="banner-sm-wrapper">
                  <h2> <?php echo get_field('banner_header') ?> </h2>
            </div>
      </div>
</section>

      




      <?php get_template_part('template/loop', 'standard')?>

<?php get_footer() ?>