<?php

function pinplast_theme_custom_breakpoints() {
    ?>
        <style>
            :root{
                /* media queries */
                --breakpoint:min(100% - 3rem, 575px);

                /* cabecera */
                --background--header:#ffd333;
                --translate3d-y--scroll-up--header:0;
                --size-logo--header:13rem;
                --width-attachments:4rem;
                --height-attachments:3.6rem;
                --display--header-desktop:none;
                --position--counter:0;

                /* página */
                --height-header:33rem;
                --content-upload:-29rem;
                --margin-bottom--title:3rem;
                --font-size--titles-page:3rem;
                --padding-content--page:2.6rem 2rem 4rem;
                --margin-bottom--post:3rem;
                --margin-bottom-post-thumbnail--single:2.4rem;
                --margin-blockquote:3.6rem;
                --margin-h2--single:4rem 0 1.6rem;
                --margin-h3--single:3.5rem 1.4rem;
                --margin-lists--single:2.4rem 0;

                /* contacto */
                --height-map--contact:30rem;
                --padding-address-contact:2.2rem;
                --grid-address-contact:1fr;

                /* error 404 */
                --font-size-title--error404:5rem;

                /*  blog */
                --separation-posts:3.6rem;
                --gap--posts-wrapper:3.6rem;

                /* single */
                --margin-top--comments:5rem;

                /* tienda */
                --display--sidebar--woocommerce:none;
                --grid-template-columns--lists:1fr 1fr;
                --padding--top--product:3.5rem;
                --top--onsale:1.5rem;
                --left--onsale:1.5rem;
                --padding--link-to-product:1.5rem;
                --padding--product-card-info:0 1.5rem;
                --position--product-card__buttons:relative;
                --padding--product-card__buttons:0 1.5rem 1.5rem 1.5rem;
                --max-height--product-card__buttons:30rem;

                /* single product */
                --display--avatar:none;
                --margin--comment-text:0;

                /* frontpage */
                    /* hero */
                    --font-size-title-slide:2.6rem;
                    --line-height-title-slide:1.3;
                    --margin-bottom-title-slide:2rem;

                /* pie de página */
                --text-align--footer:center;
                --grid-footer--widgets:1fr;
                --grid-column--newsletter--footer:1/-1;
                --margin-bottom--h2--footer:1.2rem;
                --font-size--xx--h2--footer:2.8rem;
                --margin-bottom--xx--h2--footer:1.6rem;
                --justify-content--li--footer:center;
                --justify-content--social--footer:center;
                --margin-bottom--payments--footer:2.4rem;
            }

            @media screen and (min-width: 31px) and (max-width: 1023px){

            }

            @media(min-width:419px){
                :root{
                    /* tienda */
                    --gap--lists:1rem;
                }
            }

            @media(min-width:575px){
                :root{
                    /* media queries */
                    --breakpoint:min(100% - 3rem, 510px);
                }
            }

            @media(max-width:767px){
                /* cabecera · mobile · caja de búsqueda · inactiva */
                #mobile-header .searchform-wrapper{width:4rem;height:3.6rem;border-radius:.3rem;transition:all .3s ease;}
                #mobile-header .searchform-wrapper:hover{background-color:#ffffff7a;}
                #mobile-header .searchform-wrapper .searchform{display:flex;align-items:center;justify-content:center;}
                    /* botones */
                    #mobile-header .searchform-wrapper .searchform #search-buttons div{transition:all .3s ease;}
                    #mobile-header .searchform-wrapper .searchform #search-buttons div:hover{cursor:pointer;}
                    #mobile-header .searchform-wrapper .searchform #search-buttons div svg{fill:var(--wp--preset--color--text);}
                    #mobile-header .searchform-wrapper .searchform #search-buttons #open-searchbar--button{width:4rem;height:3.6rem;display:grid;place-content:center;}
                    #mobile-header .searchform-wrapper .searchform #search-buttons #close-searchbar--button{display:none;}
                    /* formulario */
                    #mobile-header .searchform-wrapper .searchform input[type=text]{height:3.6rem;width:0;padding:0;border:none;border-radius:0;background-color:transparent;}
                /* cabecera · mobile · caja de búsqueda · activa */
                #mobile-header .searchform-wrapper.active{position:absolute;top:0;left:0;width:100%;height:100%;border-radius:0;background-color:var(--wp--preset--color--background);box-shadow:0 1px 7px rgba(0, 0, 0, 0.25);z-index:4;}
                #mobile-header .searchform-wrapper.active .searchform{position:relative;justify-content:flex-start;}
                    /* botones */
                    #mobile-header .searchform-wrapper.active .searchform #search-buttons{position:absolute;top:0;right:0;display:flex;}
                    #mobile-header .searchform-wrapper.active .searchform #search-buttons :is(#open-searchbar--button,#close-searchbar--button){width:5.4rem;height:5.4rem;display:grid;place-content:center;}
                    #mobile-header .searchform-wrapper.active .searchform #search-buttons div svg{fill:var(--wp--preset--color--attenuated);}
                    #mobile-header .searchform-wrapper.active .searchform #search-buttons #close-searchbar--button{display:grid;transition:all .3s ease;}
                    #mobile-header .searchform-wrapper.active .searchform #search-buttons #close-searchbar--button:hover{cursor:pointer;color:var(--wp--preset--color--text);}
                    /* formulario */
                    #mobile-header .searchform-wrapper.active .searchform input[type=text]{width:min(100% - 5rem); height:5.4rem; border-right:1px solid var(--wp--preset--color--border);background-color:var(--wp--preset--color-background-input);padding:0 5.4rem 0 1rem;font-family:'Roboto';font-size:1.6rem;}
                    #mobile-header .searchform-wrapper.active .searchform input[type=text]:focus{outline:none;}
            }

            @media(min-width:768px){
                :root{
                    /* media queries */
                    --breakpoint:min(100% - 3rem, 690px);

                    /* página */
                    --height-header:46rem;
                    --content-upload:-38rem;
                    --margin-bottom--title:6rem;
                    --font-size--titles-page:3.6rem;
                    --padding-content--page:4.5rem 3.5rem 6rem;
                    --margin-bottom--post:5rem;
                    --margin-bottom-post-thumbnail--single:3rem;
                    --margin-blockquote:5.4rem 0 4.5rem;
                    --margin-lists--single:2.72rem 0;

                    /* contacto */
                    --height-map--contact:44rem;
                    --padding-address-contact:2.4rem;

                    /* error 404 */
                    --font-size-title--error404:6rem;

                    /* blog */
                    --separation-posts:7rem 3rem;
                    --gap--posts-wrapper:3rem;
                    --grid-template-columns--posts:1fr 1fr;

                    /* tienda */
                    --grid-template-columns--lists:repeat(auto-fill, minmax(207px, 1fr));
                    --gap--lists:1.6rem 1.2rem;

                    /* single product */
                    --display--avatar:inherit;
                    --margin--comment-text:8.4rem;

                    /* frontpage */
                        /* hero */
                        --font-size-title-slide:3rem;
                        --line-height-title-slide:1.1;
                        --margin-bottom-title-slide:1.5rem;

                    /* pie de página */
                    --text-align--footer:left;
                    --grid-footer--widgets:1fr 1fr;
                    --margin-bottom--h2--footer:2.2rem;
                    --font-size--xx--h2--footer:2rem;
                    --margin-bottom--xx--h2--footer:2.2rem;
                    --justify-content--li--footer:flex-start;
                    --justify-content--social--footer:flex-start;
                    --margin-bottom--payments--footer:0;
                }

                /* cabecera · mobile · caja de búsqueda */
                #mobile-header .searchform-wrapper{width:63%;height:3.6rem;padding:0 1.5rem;}
                #mobile-header .searchform-wrapper .searchform{position:relative;}
                    /* botones */
                    #mobile-header .searchform-wrapper .searchform #search-buttons{height:3.6rem;position:absolute;top:0;right:0;}
                    #mobile-header .searchform-wrapper .searchform #search-buttons #open-searchbar--button{width:3.6rem;height:3.6rem;display:grid;place-content:center;}
                    #mobile-header .searchform-wrapper .searchform #search-buttons #open-searchbar--button svg{fill:var(--wp--preset--color--attenuated);transition:all .3s ease;}
                    #mobile-header .searchform-wrapper .searchform #search-buttons #open-searchbar--button:hover svg{fill:var(--wp--preset--color--text);}
                    #mobile-header .searchform-wrapper .searchform #search-buttons #close-searchbar--button{display:none;}
                    /* formulario */
                    #mobile-header .searchform-wrapper .searchform input[type=text]{height:3.6rem;width:100%;padding:0 3.6rem 0 1rem;border:none; border-radius:.3rem;background-color:#ffffff7a;font-size:1.5rem;transition:all .3s ease;}
                    #mobile-header .searchform-wrapper .searchform input[type=text]:hover{background-color:#ffffffc2;}
                    #mobile-header .searchform-wrapper .searchform input[type=text]:focus{outline:none;background-color:#fff;box-shadow:0 1px 7px rgba(0, 0, 0, 0.25);}
                    #mobile-header .searchform-wrapper .searchform input[type=text]::placeholder{color:var(--wp--preset--color--text);font-size:1.5rem;}
                    #mobile-header .searchform-wrapper .searchform input[type=text]:focus::placeholder{color:var(--wp--preset--color--attenuated);}

                /* frontpage */
                    /* más vendidos */
                    #main .container .best-selling.section{width:var(--breakpoint);}
                    /* recien llegados */
                    #main .container .arrivals.slideshow.section .slideshow-products--wrapper .woocommerce .products{width:300%;gap:1.5rem;}
                    
                /* pie de página */
                    /* dirección */
                    .footer-widgets address li:nth-child(5){margin-left:2.4rem;}
                    .footer-widgets address li:nth-child(7),
                    .footer-widgets address li:nth-child(8){margin-left:2.4rem;}
                    /* copyright */
                    #main-footer .copyright{display:flex;flex-direction:row-reverse;height:5.4rem;padding:0;align-items:center;justify-content:space-between;}
            }

            @media screen and (min-width: 768px) and (max-width: 1023px){
                /* frontpage */
                    /* más vendidos */
                    #main .container .best-selling.section .woocommerce .products .product:nth-child(1){grid-column:span 3;}
                    #main .container .best-selling.section .woocommerce .products .product:nth-child(1) .products-list__item{grid-template-columns:16.8rem 1fr;grid-template-rows:auto;}
                    #main .container .best-selling.section .woocommerce .products .product:nth-child(1) .products-list__item .woocommerce-LoopProduct-link.woocommerce-loop-product__link{grid-row:1/4;}
            }

            @media(min-width:991px){
                :root{
                    /* media queries */
                    --breakpoint:min(100% - 3rem, 930px);

                    /* cabecera */
                    --background--header:#fff;
                    <?php
                        $secondary_menu = wp_get_nav_menu_items('secondary');
                        $tertiary_menu = wp_get_nav_menu_items('tertiary');
                        
                        if ($secondary_menu || $tertiary_menu) {
                            echo '--translate3d-y--scroll-up--header:-13.6rem;';
                        } else {
                            echo '--translate3d-y--scroll-up--header:-10.4rem;';
                        }
                    ?>
                    --size-logo--header:20rem;
                    --width-attachments:4.675rem;
                    --height-attachments:4.2rem;
                    --display--mobile-header:none;
                    --display--header-desktop:inherit;
                    --grid-columns--middle-bar:22.5rem 47.5rem 1fr;
                    --grid-columns--bottom-bar:22rem 1fr auto;

                    /* página */
                    --height-header:50rem;
                    --padding-content--page:7.5rem 11rem 11rem;
                    --margin-bottom-post-thumbnail--single:4rem;
                    --margin-h2--single:5.6rem 0 2.6rem;
                    --margin-h3--single:3.5rem 1.4rem;

                    /* contacto */
                    --height-map--contact:50rem;
                    --padding-address-contact:3.2rem;
                    --grid-address-contact:1fr 1fr;

                    /* error 404 */
                    --font-size-title--error404:8rem;

                    /* blog */
                    --gap--posts-wrapper:3rem 5rem;
                    --grid-template-columns--posts-wrapper:1fr 28.4rem;

                    /* tienda */
                    --display--sidebar--woocommerce:inherit;

                    /* frontpage */
                        /* hero */
                        --grid-columns--hero:21rem 1fr;

                    /* pie de página */
                    --grid-footer--widgets:1fr 1fr 1fr;
                    --grid-column--newsletter--footer:inherit;
                }

                select{margin-left:auto;}
                
                /* frontpage */
                    /* más vendidos */
                    #main .container .best-selling.section .woocommerce .products{grid-template-columns:1.8fr 1fr 1fr 1fr;}
                    #main .container .best-selling.section .woocommerce .products .product:nth-child(1){grid-column:span 1;grid-row:span 2;}
                    #main .container .best-selling.section .woocommerce .products .product:nth-child(1) .products-list__item{grid-template-rows:auto 1fr;}
                    #main .container .best-selling.section .woocommerce .products .product:nth-child(1) .products-list__item .product-card__info .title-wrapper.product-permalink .woocommerce-loop-product__title{font-size:1.7rem;margin-bottom:1.5rem;}
                    #main .container .best-selling.section .woocommerce .products .product:nth-child(1) .products-list__item .price{font-size:2rem;}
                    #main .container .best-selling.section .woocommerce .products .product:nth-child(1) .products-list__item .product-card__buttons :is(.button.product_type_simple.add_to_cart_button.ajax_add_to_cart,.button.button.product_type_variable.add_to_cart_button,.button.product_type_simple){height:3.8rem;font-size:1.7rem;display:flex;align-items:center;padding:0 2rem;}
                    #main .container .best-selling.section .woocommerce .products .product:nth-child(1) .products-list__item .product-card__buttons .yith-wcwl-add-button,
                    #main .container .best-selling.section .woocommerce .products .product:nth-child(1) .products-list__item .product-card__buttons .yith-wcwl-add-to-wishlist .feedback{width:3.8rem;}
                    #main .container .best-selling.section .woocommerce .products .product:nth-child(1) .products-list__item .product-card__buttons{max-height:30rem;width:100%!important;left:0!important;position:relative;padding-bottom:var(--top--onsale);align-self:end;padding-left:0;}
                    #main .container .best-selling.section .woocommerce .products .product:nth-child(1):hover .products-list__item .product-card__buttons{bottom:0;padding:0 1.8rem 1.8rem 1.8rem;border:none!important;}
                    /* recien llegados */
                    #main .container .arrivals.slideshow.section .slideshow-products--wrapper .woocommerce .products{width:200%;}
            }

            @media(min-width:1199px){
                :root{
                    /* media queries */
                    --breakpoint:min(100% - 3rem, 1110px);

                    /* cabecera */
                    --width-attachments:5.075rem;
                    --grid-columns--middle-bar:27rem 60.34rem 1fr;
                    --grid-columns--bottom-bar:25.5rem 1fr auto;
                    --position--counter:5px;

                    /* página */
                    --max-width--content-upload:98rem;

                    /* contacto */
                    --height-map--contact:54rem;

                    /* blog */
                    --grid-template-columns--posts-wrapper:1fr 33rem;

                    /* single */
                    --margin-top--comments:7rem;

                    /* frontpage */
                        /* hero */
                        --grid-columns--hero:25.5rem 1fr;

                    /* tienda */
                    --padding--top--product:3.8rem;
                    --top--onsale:1.8rem;
                    --left--onsale:1.8rem;
                    --padding--link-to-product:1.8rem 1.8rem 2rem;
                    --padding--product-card-info:0 1.8rem;
                    --padding--product-card__buttons:0 1.8rem 1.8rem 1.8rem;
                }
            }

            @media(min-width:1366px){
                :root{
                    /* tienda */
                    --padding--product-card__buttons:0 1.8rem 0 1.8rem;
                    --position--product-card__buttons:absolute;
                    --max-height--product-card__buttons:0;
                }

                /* tienda */
                ul.products li{border:1px solid #ededed;}
                ul.products li:hover{border:1px solid var(--wp--preset--color--yellow);}
                ul.products li:hover .products-list__item{border:1px solid var(--wp--preset--color--yellow);}
                ul.products li:before{content:none;}
                ul.products li:hover:before{content:none;}
                ul.products li .product-card__buttons{bottom:0;z-index:4;width:calc(100% + 2px)!important;left:-1px;}
                ul.products li:hover .product-card__buttons{bottom:-4.8rem;max-height:30rem;padding:.4rem 1.8rem 1.8rem 1.8rem;border-left:2px solid var(--wp--preset--color--yellow);border-bottom:2px solid var(--wp--preset--color--yellow);border-right:2px solid var(--wp--preset--color--yellow);}
            }
        </style>
    <?php
}
add_action('wp_head', 'pinplast_theme_custom_breakpoints');
