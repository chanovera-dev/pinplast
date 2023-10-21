<?php
        echo '<footer id="main-footer" class="container">
            <section class="section">
                <div>
                    <h2>'._('Contacto', 'pinplast').'</h2>
                    <p>'._('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in feugiat lorem. Pellentque ac placerat tellus.', 'pinplast').'</p>';
                    include(TEMPLATEPATH . '/parts/widgets/address.php');
                echo '</div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </section>
        </footer>';
        wp_footer();
    echo '</body>
</html>';