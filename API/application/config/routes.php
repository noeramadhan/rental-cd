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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// ADMIN ROUTING 
$route['admins'] = 'admins/admin';
$route['admins/(:any)'] = 'admins/admin/username/$1';
// CUTOMER ROUTING
$route['customers'] = 'customers/customer';
$route['customers/(:any)'] = 'customers/customer/username/$1';
// CD ROUTING
$route['cds'] = 'cds/cd';
$route['cds/(:any)'] = 'cds/cd/id/$1';
$route['cds/search/(:any)/(:any)'] = 'cds/search/key/$1/value/$2';
// TRANSACTION ROUTING
$route['transactions'] = 'transactions/transaction';
$route['transactions/(:any)'] = 'transactions/transaction/id/$1';
$route['transactions/customer/(:any)'] = 'transactions/customer/username/$1';
$route['transactions/peminjaman/(:any)'] = 'transactions/peminjaman/id/$1';
$route['transactions/pengembalian/(:any)'] = 'transactions/pengembalian/id/$1';
// GENRE ROUTING
$route['genre'] = 'genre/genre';
$route['genre/(:any)'] = 'genre/genre/id/$1';
// NEGARA ROUTING
$route['negara'] = 'negara/negara';
$route['negara/(:any)'] = 'negara/negara/id/$1';
// PEMAIN ROUTING
$route['pemain'] = 'pemain/pemain';
$route['pemain/(:any)'] = 'pemain/pemain/id/$1';
$route['pemain/attatch/(:any)/(:any)'] = 'pemain/attatch/id/$1/cd/$2';
$route['pemain/detatch/(:any)/(:any)'] = 'pemain/detatch/id/$1/cd/$2';