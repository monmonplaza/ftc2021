<?php 
/*
  Template Name: Call to action
 */
?>

 <?php get_header(); ?>

 <section class="banner">
      <div class="container">
        <div class="banner-content">
          <h1>
            Make a <span class="text-bold">difference</span> in<br />
            the lives of<span class="text-bold"> street<br />children</span>
          </h1>

          <a href="single-sponsor-child-process.html" class="btn bg-primary">
            Sponsor Now</a
          >
        </div>
      </div>
    </section>

    <?php get_template_part('template/loop', 'standard')?>


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

        <a href="<?php echo get_site_URL('contact')?>" class="btn bg-secondary">Send us an Email</a>
      </div>
    </section>



 <?php get_footer(); ?>