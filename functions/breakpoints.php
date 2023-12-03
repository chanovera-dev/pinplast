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
                --text-align--footer:center;
                --grid-footer-widgets:1fr;
                --li-justify-content--footer-widgets:center;
                --grid-column--footer-newsletter:1/-1;
                --social-menu-footer--alignment:center;
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
                    --grid-footer-widgets:1fr 1fr;
                    --text-align--footer:left;
                    --li-justify-content--footer-widgets:flex-start;
                    --social-menu-footer--alignment:flex-start;
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
                    --grid-footer-widgets:1fr 1.6fr 1fr;
                    --grid-column--footer-newsletter:inherit;
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
                    --grid-footer-widgets:1fr 1fr 1fr;
                }
            }
        </style>
    <?php
}
add_action('wp_head', 'pinplast_theme_custom_breakpoints');