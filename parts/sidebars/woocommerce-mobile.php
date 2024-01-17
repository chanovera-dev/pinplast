<?php
    echo '
    <aside id="sidebar-woocommerce--wrapper" class="sidebar-woocommerce--wrapper">
        <div class="name-sidebar--wrapper">
            <p class="name-sidebar"><b>' . esc_html__('Filtros', 'pinplast') . '</b></p>
            <button id="close-sidebar-mobile" onclick="closeSidebarMobile()">
            <svg width="20px" height="20px">
                <use xlink:href="'.get_template_directory_uri().'/assets/img/sprite.svg#cross-20"></use>
            </svg>
            </button>
        </div>';
        if ( is_active_sidebar( 'woocommerce_sidebar' ) ) {
            dynamic_sidebar( 'woocommerce_sidebar' );
        }
    echo '
    </aside>';