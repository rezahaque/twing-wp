<?php

return array(
  'slug'    => 'tf-service',
  'groups'    => array('service'),

  'contents' => array(
    array(
      'name'=>'title',
      'value'=>'Start Investing Today',
      'help'=>"some help text"
    ),
    array(
      'name'=>'description',
      'type'=>'textarea',
      'value' => 'Unlimited deposits & withdrawls',
    ),

    array(
      'name'=>'items',
      'type'=>'repeater',
      'fields' => array(
        array(
          array('name'=>'title', 'value' => 'Notification Active'),
          array('name'=>'description', 'type'=> 'textarea', 'value'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, in?'),
          array('name'=>'media', 'type'=>'media', 'value'=> 'ion-ios-ionic-outline'),
        ),
        array(
          array('name'=>'title', 'value' => 'Fully Responsive'),
          array('name'=>'description', 'type'=> 'textarea', 'value'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, in?'),
          array('name'=>'media', 'type'=>'media', 'value'=> 'ion-ios-checkmark-outline'),
        ),
        array(
          array('name'=>'title', 'value' => 'Well Documenation'),
          array('name'=>'description', 'type'=> 'textarea', 'value'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, in?'),
          array('name'=>'media', 'type'=>'media', 'value'=> 'ion-ios-plus-outline'),
        ),
        array(
          array('name'=>'title', 'value' => 'Well Documenation'),
          array('name'=>'description', 'type'=> 'textarea', 'value'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, in?'),
          array('name'=>'media', 'type'=>'media', 'value'=> 'ion-ios-plus-outline'),
        ),
        array(
          array('name'=>'title', 'value' => 'Well Documenation'),
          array('name'=>'description', 'type'=> 'textarea', 'value'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, in?'),
          array('name'=>'media', 'type'=>'media', 'value'=> 'ion-ios-plus-outline'),
        ),
        array(
          array('name'=>'title', 'value' => 'Well Documenation'),
          array('name'=>'description', 'type'=> 'textarea', 'value'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, in?'),
          array('name'=>'media', 'type'=>'media', 'value'=> 'ion-ios-plus-outline'),
        ),
      )
    )
  ),

  'settings' => array(
      array(
        'name'=>'hover-color',
        'type'=>'colorpicker',
        'label'=>'Hover Color',
        'value' => '#333'
      ),
  ),

  'styles' => array(
  ),

  'assets' => function( $path ){
    onepager()->asset()->style( 'content-3', $path . '/style.css' );
  }
);
