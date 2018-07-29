<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

$route['default_controller'] = 'front/landingnew';
$route['format'] = 'front/format';
// $route['main/(:any)'] = 'front/page/$1';
$route['backend/forum'] = 'backend/forum/thread';
$route['backend/database'] = 'backend/database/master';

// $route['informasi-publik/(:any)'] = 'Informasipublik/$1';

$route['404_override'] = 'kk';
$route['translate_uri_dashes'] = FALSE;
