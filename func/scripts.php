<?php 

// scripts que vao no topo
function load_scripts_top() { ?>
	
<?php }
add_action( 'wp_head', 'load_scripts_top' );


// scripts em geral (vao no rodape)
function load_scripts(){  

		wp_enqueue_script('jquery');
		wp_enqueue_script('jquery-ui-core');
		wp_register_script('jquery-svg', get_template_directory_uri().'/js/jquery-svg.js' );
		wp_enqueue_script('jquery-svg');
		wp_register_script('jquery-svgdom', get_template_directory_uri().'/js/jquery-svgdom.js' );
		wp_enqueue_script('jquery-svgdom');
		wp_register_script('script', get_template_directory_uri().'/js/script.js' );
		wp_enqueue_script('script');

} 
add_action( 'wp_footer', 'load_scripts', 1 );


// scripts no rodape
function load_scripts_bottom() { ?>


<?php }
add_action( 'wp_footer', 'load_scripts_bottom' );

?>