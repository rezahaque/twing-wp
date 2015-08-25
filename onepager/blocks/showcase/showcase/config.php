<?php

return array(
  'slug'    => 'tf-showcase',
  'groups'    => array('showcase'),

  'contents' => array(
    array(
      'name'=>'title',
      'value'=>'We Build Fun Creative Mobile Products'
    ),
    array(
      'name'=>'description',
      'type'=>'textarea',
      'value' => 'A Fast and easy way to share the products you buy that define you. Lorem ipsum dolor 
sit amet, consectetur adipisicing elit. Ut, veritatis?'
    ),
    array(
      'name'=>'image',
      'type'=>'image',
    ),
  ),

  'settings' => array(
    array(
      'name'=>'background-color',
      'type'=>'colorpicker',
      'value' => '#2ba7de',
    ),
 
  ),

  'styles' => array(

  ),

  'assets' => function( $path ){
    onepager()->asset()->style( 'content-2', $path . '/style.css' );
  }
);
