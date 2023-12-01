<?php

function pinplast_theme_custom_breakpoints() {
    ?>
        <style>
            :root{
                --breakpoint:min(100% - 3rem, 575px);
                --scroll-up-header:0;
            }
            #desktop-header{display:none;}

            @media(min-width:576px){
                :root{
                    --breakpoint:min(100% - 3rem, 510px);
                }
            }

            @media(min-width:767px){
                :root{
                    --breakpoint:min(100% - 3rem, 690px);
                }
            }

            @media(min-width:991px){
                :root{
                    --breakpoint:min(100% - 3rem, 930px);
                }
                #responsive-header{display:none;}
                #desktop-header{display:inherit;}
            }

            @media(min-width:1199px){
                :root{
                    --breakpoint:min(100% - 3rem, 1110px);
                }
            }

            @media(min-width:1365px){
                :root{
                    --breakpoint:min(100% - 3rem, 1230px);
                }
            }
        </style>
    <?php
}
add_action('wp_head', 'pinplast_theme_custom_breakpoints');