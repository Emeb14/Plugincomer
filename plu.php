<?php 
/**
 * License: GPL2
 * Nombre: Sergio Blanco 
 * Carnet: 19-00347-0
 */
add_shortcode( "mi", function($atts, $content){
	$id = $atts['id'];
	return '<div class="responsiveContent"><iframe width="560" height="315" src="https://www.youtube.com/embed/'.$id.'?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
});
?>