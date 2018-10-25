<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['cache_override'] = array(
                                'class'    => 'CacheOverride',
                                'function' => 'hooks',
                                'filename' => 'CacheOverride.php',
                                'filepath' => 'hooks',
                                'params'   => array()
                                );

