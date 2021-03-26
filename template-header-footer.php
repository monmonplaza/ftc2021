<?php 
/*
  Template Name: Header & Footer only
 */
?>
<?php if(!is_user_logged_in()) {
    wp_redirect(wp_login_url());
    exit;
}?>


<?php get_header(); ?>
    <?php if(have_posts()) : while(have_posts()) : the_post(); 

        the_content();
                endwhile;
            else: 
                echo "No more page to post";
            endif;
    ?>






<?php get_footer(); ?>