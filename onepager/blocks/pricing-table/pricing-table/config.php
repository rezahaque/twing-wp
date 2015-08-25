<?php 

return array(
	'slug'      => 'pricing-table', // Must be unique
  	'groups'    => array('pricing-tables'), // Blocks group for filter

  	'contents' => array(
      array(
        'name' => 'pricing',
        'type' => 'repeater',
        'fields' => array(
          array(
            array('name' => 'highlight', 'type' => 'switch'),
            array('name' => 'title'),
            array('name' => 'price'),
            array('name' => 'items', 'value' => array(''))
          )
        )
      ),
	),

	'styles' => array(
    array(
      'name'=>'pricing-highlited-color',
      'type'=>'colorpicker',
      'value' => '#2ba7de',
    ),
    array(
      'name'=>'pricing-color',
      'type'=>'colorpicker',
      'value' => '#2ba7de',
    ),
		
	),


);
