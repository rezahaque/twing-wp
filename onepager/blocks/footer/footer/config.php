<?php 

return array(
	'slug'      => 'tf-footer', // Must be unique
  	'groups'    => array('footer'), // Blocks group for filter

  	'contents' => array(
  		array('name'=> 'social', 'label' => 'Social Links', 'value' => array('http://facebook.com/themefisher', 'http://twitter.com/themefisher', 'http://linkedin.com/themefisher', 'http://behance.net/themefisher', 'http://dribbble.com/themefisher') ),
  		array('name'=> 'copyright', 'type'=>'textarea', 'value'=> 'If You want to change the copyright text then buy License')
	),


	'styles' => array(
		
	),

	'assets' => function( $path ){
    	onepager()->asset()->style( 'footer-1', $path . '/style.css' );
  	}
);
