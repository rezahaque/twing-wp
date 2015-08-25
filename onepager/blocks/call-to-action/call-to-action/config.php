<?php

return array(
  
  'slug'      => 'tf-call-to-action', // Must be unique and singular
  'groups'    => array('call-to-action'), // Blocks group for filter and plural

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array(
      'name'=>'title', 
      'value' => 'Talk, message, share. In private or with groups.'
    ),
    array(
      'name'=>'description',
      'type'=>'editor', 
      'value'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi assumenda reiciendis id eius, veritatis nemo'
    ),
    array(
      'name'=>'button_text',
      'value'=> 'Discover',
      'lebal'=>'Button Text'
    ),
    array(
      'name'=>'button_link',
      'value'=> 'http://www.themefisher.com',
      'lebal'=>'Button Link'
    ),
    array(
      'name'=>'banner_bg',
      'label'    => 'Banner Background',
      'type'  => 'image',
    ),
  ),
  
  // Settings - $settings available on view file to access the option
  'settings' => array(    
    
  ),

  // Fields - $styles available on view file to access the option
  'styles' => array(

  ),

  // 'assets' => function( $path ){
  //   onepager()->asset()->style( 'content-5', $path . 'style.css' );
  // }
);