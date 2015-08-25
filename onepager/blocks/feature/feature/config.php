<?php

return array(
  
  'slug'      => 'tf-feature', // Must be unique and singular
  'groups'    => array('feature'), // Blocks group for filter and plural

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array(
      'name'=>'title', 
      'value' => 'It’s beautiful.'
    ),
    array(
      'name'=>'description',
      'type'=>'editor', 
      'value'=> 'The world is a dangerous place to live; not because of the people who are evil, but because of the people who dont do anything about it.'
    ),
    array(
      'name'=>'image', 
      'type'=>'image', 
    ),
    array(
      'name'=>'featured_items', 
      'type'=>'repeater',
      'fields'=> array(
        array(
          array('name'=>'icon', 'type'=>'icon', 'value'=>'ion-laptop'),
          array('name'=>'title', 'value'=>'Responsive Design'),
          array('name'=>'description', 'type'=>'editor', 'value'=> 'The best and most beautiful things in the world cannot be seen or even touched - they must be felt with the heart'),
        ),
        array(
          array('name'=>'icon', 'type'=>'icon', 'value'=>'ion-ios-settings'),
          array('name'=>'title', 'value'=>'Easy Customization'),
          array('name'=>'description', 'type'=>'editor', 'value'=> 'The best and most beautiful things in the world cannot be seen or even touched - they must be felt with the heart'),
        ),
        array(
          array('name'=>'icon', 'type'=>'icon', 'value'=>'ion-ios-glasses-outline'),
          array('name'=>'title', 'value'=>'Notification Active'),
          array('name'=>'description', 'type'=>'editor', 'value'=> 'The best and most beautiful things in the world cannot be seen or even touched - they must be felt with the heart'),
        ),
      ) 
    ),
  ),
  
  // Settings - $settings available on view file to access the option
  'settings' => array(  
    array(
      'name' => 'icon-color',
      'label' => 'Icon Color',
      'value' => '#00A1EA',
      'type' => 'colorpicker',
    ), 
  ),

  // Fields - $styles available on view file to access the option
  'styles' => array(
  ),

  'assets' => function( $path ){
    onepager()->asset()->style( 'content-1', $path . '/style.css' );
  }
);