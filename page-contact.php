<?php get_header(); ?>

<section class="banner-sm" style="background-image:linear-gradient(to right, rgba(22,53,70,1) 35%, rgba(43,106,139,0.5)), url(<?php echo get_field('banner_image')['url']; ?>)">
    <div class="container">
            <div class="banner-sm-wrapper">
                <h2> <?php echo get_field('banner_header') ?> </h2>
                <h3><?php echo get_field('banner_subheader') ?> </h3>
            </div>
    </div>
</section>




<section class="main">
<div class="container">
<div class="row">
<div class="col-md-7">
    <div class="form-wrapper">
        <?php echo do_shortcode('[contact-form-7 id="62" title="FTC Contact"]'); ?>
    </div>
</div>

<div class="col-md-5">
<div class="contact-sidebar-wrapper">
    <!-- <div class="sidebar__block">
        <h3>Email:</h3>
        <ul>
            <li><h4>Judea Delos Santos</h4></li>
            <li><p>Communication &amp; Development Staff<p></li>
            <li><p><a href="mailto:judea.delossantos@thefrontline.asia"><i class="fal fa-envelope"></i> judea.delossantos@thefrontline.asia</a><p></li>
        </ul>

        <ul>
            <li><h4>Michael Gordon</h4></li>
            <li>Spiritual Director</li>
            <li><a href="mailto:mike.gordon@thefrontline.asia"><i class="fal fa-envelope"></i> mike.gordon@thefrontline.asia</a></li>
        </ul>

        <ul>
            <li><h4>John Katigbak</h4></li>
            <li>Managing Director</li>
            <li><a href="mailto:john.katigbak@thefrontline.asia"><i class="fal fa-envelope"></i> john.katigbak@thefrontline.asia</a></li>
        </ul>

        <ul>
            <li><a href="mailto:info@thefrontline.asia"><i class="fal fa-envelope"></i> info@thefrontline.asia</a></li>
        </ul>
    </div>

    <div class="sidebar__block">
        <h3>Phone:</h3>
        <ul>
            <li><i class="fal fa-phone-rotary"></i> Philippines +63-49-543-7775</li>
            <li><i class="fal fa-phone-rotary"></i> USA +815-797-9177</li>
        </ul>
    </div>

    <div class="sidebar__block">
        <h3>Postal Address:</h3>
        <ul>
        <li><i class="fal fa-map-marker-alt"></i>Frontline Mission Center, Sitio Subac, Brgy. Sto Nino, San Pablo City, 4000 Laguna</li>
        </ul>
    </div> -->

    <?php get_sidebar()?>
<div>
</div>

</div>
</div>
</section>










<?php get_footer (); ?>