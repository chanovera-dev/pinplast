<?php
    echo '
    <div class="bottom-bar--wrapper">
        <section class="section bottom-bar">';
            echo '
            <div class="">
                <button class="departments-button">
                    <svg width="20px" height="20px">
                        <use xlink:href="'.get_template_directory_uri().'/assets/img/sprite.svg#cross-20"></use>
                    </svg>'
                    .esc_html__('Comprar por categoría', 'pinplast').'
                    <svg class="departments__button-arrow" width="9px" height="6px">
                        <use xlink:href="'.get_template_directory_uri().'/assets/img/sprite.svg#arrow-rounded-down-9x6"></use>
                    </svg>
                </button>
            </div>';
            wp_nav_menu(
                array(
                    'container' => 'nav', 
                    'container_class' => 'primary', 
                    'theme_location' => 'primary',
                ) 
            );
            include(TEMPLATEPATH . '/parts/header/attachments.php');
        echo '
        </section>
    </div>';