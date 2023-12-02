<?php
    echo '
    <div class="bottom-bar-wrapper">
        <section class="section bottom-bar">';
            echo '
            <div class="">
                <button class="departments-button">'
                
                    .esc_html__('Comprar por categoría', 'pinplast').'
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