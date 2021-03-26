<?php

add_shortcode( 'Page_Banner', 'small_banner');
function small_banner($atts, $content) {  
    $option = shortcode_atts(array(
        'bg_image' => '',
        'header'  => '',
        'body' => '', 
        
        ),
     $atts);
     $output = '<section class="banner-sm" style="background-image:linear-gradient(to right, rgba(22,53,70,1) 55%, rgba(43,106,139,0.5)),url('.$option['bg_image'].')"><div class="container"> <div class="banner-sm-wrapper"><h2>'. $option['header'] .'</h2><h3>'.$option['body'] .'</h3></div></div></section>';
     return $output;  
}

