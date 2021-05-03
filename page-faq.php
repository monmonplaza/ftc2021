<?php get_header(); ?>

<section class="banner-sm" style="background-image:linear-gradient(to right, rgba(22,53,70,1) 35%, rgba(43,106,139,0.5)), url(<?php echo get_field('banner_image')['url']; ?>)">
            <div class="container">
                  <div class="banner-sm-wrapper">
                        <h2> <?php echo get_field('banner_header') ?> </h2>
                        <h3><?php echo get_field('banner_subheader') ?> </h3>
                  </div>
            </div>
      </section>

<section class="faq">
    <div class="container">
        <div class="faq__wrapper">
			<div class="faq__header">
				<h2>How can we help you?</h2>
			</div>
			
            <div class="faq__inner">
                <div class="qna">
                <?php
                  $terms = get_terms( 'Groups');
                    foreach( $terms as $index => $term ) {
                        if($term->name == "General") {
                            $query_general  = new WP_Query(array(
                                'post_type'  =>  'faq',
                                'tax_query' => array(array(
                                    'taxonomy' => 'Groups',
                                    'field'    => 'slug',
                                    'terms'    => 'General'
                                    ))
                                )
                            );
                        } elseif($term->name == "Security") {
                            $query_security  = new WP_Query(array(
                                'post_type'  =>  'faq',
                                'tax_query' => array(array(
                                    'taxonomy' => 'Groups',
                                    'field'    => 'slug',
                                    'terms'    => 'Security'
                                    ))
                                )
                            );
                        } elseif($term->name == "Other") {
                            $query_other  = new WP_Query(array(
                                'post_type'  =>  'faq',
                                'tax_query' => array(array(
                                    'taxonomy' => 'Groups',
                                    'field'    => 'slug',
                                    'terms'    => 'Other'
                                    ))
                                )
                            );
                        } elseif($term->name == "Sponsorship") {
                            $query_sponsorship  = new WP_Query(array(
                                'post_type'  =>  'faq',
                                'tax_query' => array(array(
                                    'taxonomy' => 'Groups',
                                    'field'    => 'slug',
                                    'terms'    => 'Sponsorship'
                                    ))
                                )
                            );
                        }
                    }       
                ?>
                    <div class="qna__item">
                        <div class="qna__group" id="sect-0">
                            <h2>General</h2>
                            <?php if( $query_general->have_posts()) : while($query_general->have_posts()) : $query_general->the_post();  ?>
                                <div class="qna__block">
                                    <h3 class="questions"><?php echo get_the_title(); ?></h3>
                                    <div class="answer">
                                        <?php echo get_the_content(); ?>
                                    </div>
                                </div>
                            <?php endwhile;
                                else :
                                    echo esc_html('No more FAQ General on to load');
                            endif; ?>
                        </div>
                        <div class="qna__group" id="sect-2">
                            <h2>Security</h2>
                            <?php if( $query_security->have_posts()) : while($query_security->have_posts()) : $query_security->the_post();  ?>
                                <div class="qna__block">
                                    <h3 class="questions"><?php echo get_the_title(); ?></h3>
                                    <div class="answer">
                                        <?php echo get_the_content(); ?>
                                    </div>
                                </div>
                            <?php endwhile;
                                else :
                                    echo esc_html('No more FAQ Security on to load');
                            endif; ?>
                        </div>
                        <div class="qna__group" id="sect-1">
                            <h2>Other</h2>
                            <?php if( $query_other->have_posts()) : while($query_other->have_posts()) : $query_other->the_post();  ?>
                                <div class="qna__block">
                                    <h3 class="questions"><?php echo get_the_title(); ?></h3>
                                    <div class="answer">
                                        <?php echo get_the_content(); ?>
                                    </div>
                                </div>
                            <?php endwhile;
                                else :
                                    echo esc_html('No more FAQ Other on to load');
                            endif; ?>
                        </div>
                    </div>
                 
                    <div class="qna__item">
                    <div class="qna__group" id="sect-3">
                            <h2>Sponsorship</h2>
                            <?php if( $query_sponsorship->have_posts()) : while($query_sponsorship->have_posts()) : $query_sponsorship->the_post();  ?>
                                <div class="qna__block">
                                    <h3 class="questions"><?php echo get_the_title(); ?></h3>
                                    <div class="answer">
                                        <?php echo get_the_content(); ?>
                                    </div>
                                </div>
                            <?php endwhile;
                                else :
                                    echo esc_html('No more FAQ Sponsorship on to load');
                            endif; ?>
                        </div>
                      
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="go_to_contact">
	<h2>Can't find what you are looking for?</h2>
    <p>If your questions is not listed above, you can use the form below to send directly to us your questions</p>
    <?php echo do_shortcode('[contact-form-7 id="174" title="FAQ Form"]')?>

</section>



<?php get_footer (); ?>