<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home_CTRL/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about'] = 'Home_CTRL/view/about';
$route['ticket'] = 'Ticket_CTRL/view/ticket';
$route['ticket/(:num)'] = 'Ticket_CTRL/detail/$1';

$route['register'] = 'auth/Auth_CTRL/register';
$route['login'] = 'auth/Auth_CTRL/login';
$route['logout'] = 'auth/Auth_CTRL/logout';

$route['order/add/ticket/(:any)'] = 'Order_CTRL/addticket/$1';

$route['dashboard'] = 'Dashboard_CTRL/view/home/';
$route['dashboard/(:any)'] = 'Dashboard_CTRL/view/$1/';

$route['dashboard/change/profile'] = 'Dashboard_CTRL/changeprofile';

$route['dashboard/bus/add'] = 'Dashboard_CTRL/view/busadd/';
$route['dashboard/delete/bus/(:any)'] = 'Dashboard_CTRL/deletebus/$1';
$route['dashboard/change/bus/(:any)'] = 'Dashboard_CTRL/changebus/$1';
$route['dashboard/bus/change/(:any)'] = 'Dashboard_CTRL/view/buschange/$1/';
$route['dashboard/add/bus'] = 'Dashboard_CTRL/addbus';

$route['dashboard/ticket/add'] = 'Dashboard_CTRL/view/ticketadd/';
$route['dashboard/add/ticket'] = 'Dashboard_CTRL/addticket';
$route['dashboard/delete/ticket/(:any)'] = 'Dashboard_CTRL/deleteticket/$1';
$route['dashboard/change/ticket/(:any)'] = 'Dashboard_CTRL/changeticket/$1';
$route['dashboard/ticket/change/(:any)'] = 'Dashboard_CTRL/view/ticketchange/$1/';

$route['dashboard/delete/order/(:any)'] = 'Dashboard_CTRL/deleteorder/$1';
$route['dashboard/change/order/(:any)'] = 'Dashboard_CTRL/changeorder/$1';

$route['dashboard/delete/transaction/(:any)'] = 'Dashboard_CTRL/deletetransaction/$1';
$route['dashboard/delete/user/(:any)'] = 'Dashboard_CTRL/deleteuser/$1';

$route['json/search/ticket'] = 'JSON_CTRL/searchticket';
$route['json/get/villagename'] = 'JSON_CTRL/getvillagename';
