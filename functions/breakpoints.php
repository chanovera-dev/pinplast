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
                --font-size-title--error404:5rem;
                --font-size--titles-page:3rem;
                --separation-posts:3.6rem;
                --height-map--contact:30rem;
            }
            #desktop-header{display:none;}
            main .posts-wrapper{display:grid; gap:3.6rem;}

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
                    --font-size-title--error404:6rem;
                    --font-size--titles-page:3.6rem;
                    --separation-posts:7rem 3rem;
                    --height-map--contact:44rem;
                }
                main .posts-wrapper .posts{grid-template-columns:1fr 1fr;}
                main .posts-wrapper{gap:3rem;}
            }

            @media(min-width:991px){
                :root{
                    --breakpoint:min(100% - 3rem, 930px);
                    <?php
                        $secondary_menu = wp_get_nav_menu_items('secondary');
                        $tertiary_menu = wp_get_nav_menu_items('tertiary');
                        
                        if ($secondary_menu || $tertiary_menu) {
                            echo '--scroll-up-header:-13.6rem;';
                        } else {
                            echo '--scroll-up-header:-10.4rem;';
                        }
                    ?>
                    --size-logo:20rem;
                    --grid-columns--middle-bar:22.5rem 47.5rem 1fr;
                    --grid-columns--bottom-bar:21rem 1fr auto;
                    --width-attachments:4.675rem;
                    --height-attachments:4.2rem;
                    --grid-footer-widgets:1fr 1.6fr 1fr;
                    --grid-column--footer-newsletter:inherit;
                    --font-size-title--error404:8rem;
                    --height-map--contact:50rem;
                }
                #responsive-header{display:none;}
                #desktop-header{display:inherit; background-color:var(--wp--preset--color--background);}
                main .posts-wrapper{grid-template-columns:1fr 28.4rem; gap:3rem 5rem;}
            }

            @media(min-width:1199px){
                :root{
                    --breakpoint:min(100% - 3rem, 1110px);
                    --grid-columns--middle-bar:27rem 60.34rem 1fr;
                    --grid-columns--bottom-bar:25.5rem 1fr auto;
                    --width-attachments:5.075rem;
                    --grid-footer-widgets:1fr 1fr 1fr;
                    --height-map--contact:54rem;
                }
                main .posts-wrapper{grid-template-columns:1fr 33rem;}
            }
        </style>
    <?php
}
add_action('wp_head', 'pinplast_theme_custom_breakpoints');