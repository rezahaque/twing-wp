<?php

return array(
  
  'slug'      => 'tf-subscription', // Must be unique and singular
  'groups'    => array('subscription'), // Blocks group for filter and plural

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array(
      'name'=>'title', 
      'value' => 'Join Our Mailing List!'
    ),
    array(
      'name'=>'description', 
      'value' => 'Join Our Mailing List!'
    ),
    array(
      'name'=>'subscription_form',
      'label'=> 'Mailchimp Form Code'
    ),
  ),
  
  // Settings - $settings available on view file to access the option
  'settings' => array(    
    
  ),

  // Fields - $styles available on view file to access the option
  'styles' => array(
    array(
      'name'    => 'bg_image',
      'label'   => 'Background',
      'type'    => 'image',
      'value'   => 'http://s3.amazonaws.com/quantum-assets/bg/bg6.jpg'
    ),

  ),

  // 'assets' => function( $path ){
  //   onepager()->asset()->style( 'content-5', $path . 'style.css' );
  // }
);