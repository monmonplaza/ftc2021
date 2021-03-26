<?php

    if(have_posts()) : while(have_posts()) : the_post();

            if(is_page('contact')) {
                the_content();
            } else {
                echo get_the_content();
            }

        endwhile;

    else :

        echo "<p>No more post available</p>";

    endif;