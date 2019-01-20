<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['company'] = 'company/dashboard';
$route['admin'] = 'admin/dashboard';
$route['transaction'] = 'transaction/queue';
$route['default_controller'] = 'homepage_control';
$route['404_override'] = 'homepage_control/er404';
$route['push'] = 'homepage_control/er404';
$route['firebase'] = 'homepage_control/er404';
$route['translate_uri_dashes'] = FALSE;
