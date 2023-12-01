<form role="search" method="get" id="searchform-wrapper" class="searchform-wrapper" action="<?php echo home_url( '/' ); ?>">
	<div class="searchform">
		<input type="text" value="" name="s" id="s" class="input-search" placeholder="<?= __('Buscar', 'pinplast'); ?>">
        <div  id="search-buttons">
            <button id="open-searchbar--button">
                <svg width="20px" height="20px">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#search-20"></use>
                </svg>
            </button>
            <button id="close-searchbar--button">
                <svg width="20px" height="20px">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#cross-20"></use>
                </svg>
            </button>
            
        </div>
	</div>
</form>