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
$route['default_controller'] = 'website';

// setting route for admin
$route['admin'] = 'admin/auth';

$route['admin/dashboard2'] = 'admin/dashboard/index2';

$route['adminlte'] = 'admin/auth';
$route['adminlte/(:any)'] = 'admin/adminlte/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// products ****************
$route['products/add_products'] = 'admin/products/add_products';
$route['products/products_submit_data'] = 'admin/products/products_submit_data';
$route['products/view_products']        = 'admin/products/products_view';
$route['products/edit_products/(:any)'] = 'admin/products/products_edit/$1';
$route['products/products_update_data'] = 'admin/products/products_update_data';
$route['products/products_delete/(:any)'] = 'admin/products/products_delete/$1';
















//website
$route['index'] = 'website/index';
$route['about'] = 'website/about';
$route['contact'] = 'website/contact';
$route['menu'] = 'website/menu';
$route['service'] = 'website/service';
$route['team'] = 'website/team';
$route['testimonial'] = 'website/testimonial';
$route['product'] = 'website/product';
$route['cart'] = 'website/cart';
$route['checkout'] = 'website/checkout';
$route['order-success'] = 'website/order_success';
//api
$route['api/register'] = 'api/User/register';
$route['api/login'] = 'api/User/login';
$route['api/logout'] = 'api/User/logout';