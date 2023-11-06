<?php

function pinplast_theme_custom_breakpoints() {
    ?>
        <style>
            :root{
                --breakpoint:min(100% - 3rem, 576px);
                --main-padding-top:5.4rem;
            }

            @media(min-width:768px){
                :root{
                    --breakpoint:min(100% - 3rem, 690px);
                }
            }

            @media(min-width:992px){
                :root{
                    --breakpoint:min(100% - 3rem, 930px);
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