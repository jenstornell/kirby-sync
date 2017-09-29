<?php
namespace KirbySync;
use str;

require_once __DIR__ . DS . 'lib' . DS . 'option.php';
require_once __DIR__ . DS . 'lib' . DS . 'core.php';

$Option = new Option();

if($Option->domains()) {
    require_once __DIR__ . DS . 'lib' . DS . 'trigger.php';
    require_once __DIR__ . DS . 'lib' . DS . 'hooks.php';
    require_once __DIR__ . DS . 'lib' . DS . 'registry.php';
}

if(get('token') == $Option->token()) {
    if(!file_exists(kirby()->roots()->plugins() . DS . 'kirby-blueprint-reader')) {
        require_once __DIR__ . DS. 'kirby-blueprint-reader' . DS . 'kirby-blueprint-reader.php';
    }
    
    require_once __DIR__ . DS . 'lib' . DS . 'read.php';
    require_once __DIR__ . DS . 'lib' . DS . 'write.php';
    require_once __DIR__ . DS . 'lib' . DS . 'delete.php';
    require_once __DIR__ . DS . 'lib' . DS . 'rename.php';

    require_once __DIR__ . DS . 'lib' . DS . 'routes.php';
}