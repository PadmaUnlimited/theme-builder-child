<?php
add_action( 'wp_enqueue_scripts', 'padma_child_enqueue_styles' );
function padma_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

/*	Allow updates	*/
if (is_admin()) {
	if(class_exists('PadmaUpdater')){
		$PadmaUpdater = new PadmaUpdater();
		$PadmaUpdater->updater('padma-child',__DIR__,true);
	}
}