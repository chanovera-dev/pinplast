<?php

function pinplast_theme_custom_breakpoints() {
    ?>
        <style>
            :root{
                --breakpoint:min(100% - 3rem, 576px);
                --main-padding-top:5.4rem;
                --scroll-up-header:0;
                --font-size-title-slide:2.6rem;
                --line-height-title-slide:1.3;
                --margin-bottom-title-slide:2rem;
                --height-header--nosotros:33rem;
                --top-content-nosotros:-29rem;
                --padding-content-nosotros:3rem 2.4rem;
            }

            @media(min-width:768px){
                :root{
                    --breakpoint:min(100% - 3rem, 690px);
                    --font-size-title-slide:3rem;
                    --line-height-title-slide:1.1;
                    --margin-bottom-title-slide:1.5rem;
                    --height-header--nosotros:46rem;
                    --top-content-nosotros:-38rem;
                    --padding-content-nosotros:5rem;
                }
            }

            @media(min-width:992px){
                :root{
                    --breakpoint:min(100% - 3rem, 930px);
                }
            }

            @media(min-width:1024px){
                :root{
                    --breakpoint:min(100% - 3rem, 960px);
                    <?php
                        $secondary_menu = wp_get_nav_menu_items('secondary');
                        $tertiary_menu = wp_get_nav_menu_items('tertiary');
                        
                        if ($secondary_menu || $tertiary_menu) {
                            echo '--main-padding-top:19rem;'.
                            '--scroll-up-header:-13.6rem;';
                        } else {
                            echo '--main-padding-top:15.8rem;'.
                            '--scroll-up-header:-10.4rem;';
                        }
                    ?>
                    --height-header--nosotros:50rem;
                    --padding-content-nosotros:7.5rem 9.2rem;
                }
            }

            @media(min-width:1140px){
                :root{
                    --breakpoint:min(100% - 3rem, 1110px);
                    <?php
                        $secondary_menu = wp_get_nav_menu_items('secondary');
                        $tertiary_menu = wp_get_nav_menu_items('tertiary');
                        
                        if ($secondary_menu || $tertiary_menu) {
                            echo '--main-padding-top:21.2rem;'.
                            '--scroll-up-header:-15rem;';
                        } else {
                            echo '--main-padding-top:17.59rem;'.
                            '--scroll-up-header:-11.6rem;';
                        }
                    ?>
                    --font-size-title-slide:3.3rem;
                }
            }

            @media(min-width:1200px){
                :root{
                    --breakpoint:min(100% - 3rem, 1230px);
                }
            }
        </style>
    <?php
}
add_action('wp_head', 'pinplast_theme_custom_breakpoints');