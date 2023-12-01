<form role="search" method="get" id="searchform-wrapper" class="searchform-wrapper" action="<?php echo home_url( '/' ); ?>">
	<div class="searchform">
		<input type="text" value="" name="s" id="s" class="input-search" placeholder="<?= __('Buscar', 'pinplast'); ?>">
        <div  id="search-buttons">
            <svg width="20px" height="20px" id="open-searchbar--button">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#search-20"></use>
            </svg>
            <svg width="20px" height="20px" id="close-searchbar--button">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#cross-20"></use>
            </svg>
        </div>
	</div>
</form>