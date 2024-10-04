<?php


return [

    'paths' => ['api/*'],
    
    'allowed_origins' => ['http://localhost:4200'],  // Angular runs on this port
    
    'allowed_methods' => ['*'],
    
    'allowed_headers' => ['*'],
    
    'exposed_headers' => [],
    
    'max_age' => 0,
    
    'supports_credentials' => false,

];

?>