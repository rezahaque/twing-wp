<?php

return array(

  'slug'      => 'tf-header', // Must be unique
  'groups'    => array('headers'), // Blocks group for filter

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array(
      'name'=>'logo',
      'type'=> 'image',
    ),
  
    array('name'=>'menu','type'=>'menu'),
    array(
      'name'=>'title',
      'value' => 'An Explosion of Possibilities'
    ),
    array(
      'name'=>'description',
      'type' =>'textarea',
      'value' => 'Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur.'
    ),
    array(
      'name'=>'button_link',
      'label'=> 'Button Link ',
      'value' => 'http://www.themefisher.com',
    ),
    array(
      'name'=>'button_text',
      'label'=> 'Button Text',
      'value' => 'Download Now',
    ),


  ),

  // Settings - $settings available on view file to access the option
  'settings' => array(
      array(
      'name'=>'banner_bg',
      'label'    => 'Banner Background',
      'type'  => 'image',
    ),
    array(
      'name' => 'banner-color',
      'type' => 'colorpicker',
    ),
    array(
      'name' => 'button-color',
      'type' => 'colorpicker',
    ),

  ),
  'styles' => array(


  ),

  'assets' => function( $path ){
    onepager()->asset()->style( 'header-1', $path . '/style.css' );
  }
);
