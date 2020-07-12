<?php 
	function company_file(){
		wp_enqueue_script('js-main-theme',get_theme_file_uri('/js/scirpts-bundled.js'),NULL,'microtime()',true);
		wp_enqueue_style('cmp_style',get_stylesheet_uri());
	}
	add_action('wp_enqueue_scripts','company_file');
?>