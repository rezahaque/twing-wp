<?php

return array(
  
  'slug'      => 'tf-counter', // Must be unique and singular
  'groups'    => array('counter'), // Blocks group for filter and plural

  // Fields - $contents available on view file to access the option
  'contents' => array(
     array(
      'name'=>'items',
      'type'=>'repeater',
      'fields' => array(
        array(
          array('name'=>'title', 'value' => 'Downloads'),
          array('name'=>'counter', 'value' => '18000'),
          array('name'=>'icon', 'type'=>'media','value'=>'ion-ios-cloud-download-outline'),
        ),
        array(
          array('name'=>'title', 'value' => 'Email Subscriber'),
          array('name'=>'counter', 'value' => '11000'),
          array('name'=>'media', 'type'=>'media','value'=>'ion-ios-email-outline'),
        ),
        array(
          array('name'=>'title', 'value' => 'Color Style'),
          array('name'=>'counter', 'value' => '8000'),
          array('name'=>'media', 'type'=>'media','value'=>'ion-ios-color-filter-outline'),
        ),
        array(
          array('name'=>'title', 'value' => 'Project Completed'),
          array('name'=>'media', 'type'=>'media','value'=>'ion-ios-box-outline'),
        ),
      )
    )
  ),
  
  // Settings - $settings available on view file to access the option
  'settings' => array(    
    
  ),

  // Fields - $styles available on view file to access the option
  'styles' => array(
    array(
        'name'=>'icon-color',
        'type'=>'colorpicker',
        'label'=>'Icon Color',
        'value' => '#333'
    ),
  ),

  // 'assets' => function( $path ){
  //   onepager()->asset()->style( 'content-5', $path . 'style.css' );
  // }
);