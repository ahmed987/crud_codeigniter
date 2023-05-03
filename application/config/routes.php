<?php
defined('BASEPATH') or exit('No direct script access allowed');
/////////////////////////////////////////
$route['create'] = 'CRUDController/create';
$route['list'] = 'CRUDController/list';
$route['update'] = 'CRUDController/update';
$route['edit/(:any)'] = 'CRUDController/edit/$1';
$route['edit/'] = 'CRUDController/edit';
$route['delete/(:any)'] = 'CRUDController/delete/$1';
// $route['create'] = 'AHMEDController/create';