<?php
echo '<div class="bottom-bar-wrapper">
    <section class="section bottom-bar">';
        echo '<div class="">
            <button class="departments-button">
                <div class="menu-mobile--button">
                    <div class="bars">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>
                Comprar por categoría
            </button>
        </div>';
        wp_nav_menu(
            array(
                'container' => 'nav', 
                'container_class' => 'primary', 
                'theme_location' => 'primary',
            ) 
        );
        include(TEMPLATEPATH . '/parts/header/lists.php');
    echo '</section>
</div>';