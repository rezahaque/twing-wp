<?php

return array(
  'slug'    => 'tf-content',
  'groups'    => array('content'),

  'contents' => array(
    array(
      'name'=>'title',
      'value'=>'It’s everywhere ,It’s pure.'
    ),
    array(
      'name'=>'description',
      'type'=>'editor',
      'value' => 'Dont limit yourself. Many people limit themselves to what they think they can do. You can go as far as your mind lets you. What you believe, remember, you can achieve'
    ),
    array(
      'name' => 'showcase_img_1',
      'type' => 'image',
      'label'=>'Showcase Image 1',
    ),
  ),

  'settings' => array(


  ),

  'styles' => array(
    
  ),

  'assets' => function( $path ){
    onepager()->asset()->style( 'content-3', $path . '/style.css' );
  }
);
