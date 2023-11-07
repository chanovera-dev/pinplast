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
            }

            @media(min-width:768px){
                :root{
                    --breakpoint:min(100% - 3rem, 690px);
                    --font-size-title-slide:3rem;
                    --line-height-title-slide:1.1;
                    --margin-bottom-title-slide:1.5rem;
                }
            }

            @media(min-width:992px){
                :root{
                    --breakpoint:min(100% - 3rem, 930px);
                }
            }

            @media(min-width:1024px){
                :root{
                    --main-padding-top:21.2rem;
                    --scroll-up-header:-151px;
                }
            }

            @media(min-width:1200px){
                :root{
                    --breakpoint:min(100% - 3rem, 1110px);
                }
            }
        </style>
    <?php
}
add_action('wp_head', 'pinplast_theme_custom_breakpoints');