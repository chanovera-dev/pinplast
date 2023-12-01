<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
	<div class="searchform-wrapper">
		<input type="text" value="" name="s" id="s" class="input-search" placeholder="<?php esc_html__('Buscar', 'pinplast'); ?>">
        <div  id="activate-search">
            <svg width="20px" height="20px">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#search-20"></use>
            </svg>
            <svg width="20px" height="20px">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#cross-20"></use>
            </svg>
        </div>
	</div>
</form>