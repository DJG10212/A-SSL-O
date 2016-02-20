<?php

return [
    
    'theme' => [
        
        'folder' => 'themes',
        'active' => 'default'
        
    ],
	
	'templates' => [
		
		'home'  => house\Templates\HomeTemplate::class,
		'properties'  => house\Templates\PropertiesTemplate::class,
		'properties.post'  => house\Templates\PropertiesPostTemplate::class,
	]
    
];