<?php

function pinplast_theme_custom_breakpoints() {
    ?>
        <style>
            :root{
                --breakpoint:min(100% - 3rem, 575px);
                --scroll-up-header:0;
                --size-logo:13rem;
                --width-attachments:4rem;
                --height-attachments:3.6rem;
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
                    --size-logo:20rem;
                    --grid-columns--middle-bar:22.5rem 47.5rem 1fr;
                    --grid-columns--bottom-bar:21rem 1fr auto;
                    --width-attachments:4.675rem;
                    --height-attachments:4.2rem;
                }
                #responsive-header{display:none;}
                #desktop-header{display:inherit; background-color:var(--wp--preset--color--background);}
            }

            @media(min-width:1199px){
                :root{
                    --breakpoint:min(100% - 3rem, 1110px);
                    --grid-columns--middle-bar:27rem 60.34rem 1fr;
                    --grid-columns--bottom-bar:25.5rem 1fr auto;
                    --width-attachments:5.075rem;
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