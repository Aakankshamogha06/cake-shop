<?php
defined('BASEPATH') or exit('No direct script access allowed');

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



// instrument ****************
$route['instrument/add_instrument'] = 'admin/instrument/add_instrument';
$route['instrument/instrument_submit_data'] = 'admin/instrument/instrument_submit_data';
$route['instrument/view_instrument']        = 'admin/instrument/instrument_view';
$route['instrument/edit_instrument/(:any)'] = 'admin/instrument/instrument_edit/$1';
$route['instrument/instrument_update_data'] = 'admin/instrument/instrument_update_data';
$route['instrument/instrument_delete/(:any)'] = 'admin/instrument/instrument_delete/$1';
/////////////////////website////////////////


$route['about'] = 'website/about';
$route['regulations'] = 'website/regulations';
$route['why-trade-forex'] = 'website/why_trade_forex';
$route['expos'] = 'website/expos';
$route['expo-gallery/(:any)'] = 'website/expo_gallery/$1';
$route['videos'] = 'website/videos';
$route['awards'] = 'website/awards';
$route['faq'] = 'website/faq';
$route['we-are-hiring'] = 'website/we_are_hiring';
$route['forex'] = 'website/forex';
$route['crypto-currencies'] = 'website/crypto_currencies';
$route['commodities'] = 'website/commodities';
$route['trading-conditions'] = 'website/trading_conditions';
$route['indices'] = 'website/indices';
$route['account-types'] = 'website/account_types';
$route['instruments-list'] = 'website/instruments_list';
$route['analytics'] = 'website/analytics';
$route['conversion-rate'] = 'website/conversion _rate';
$route['analytics'] = 'website/analytics';
$route['webinars'] = 'website/webinars';
$route['seminars'] = 'website/seminars';
$route['economic-calender'] = 'website/economic_calender';
$route['calculator'] = 'website/calculator';
$route['blog'] = 'website/blog';
$route['blog-detail/(:any)'] = 'website/blog_detail/$1';
$route['mt5-platform'] = 'website/mt5_platform';
$route['mt4-platform'] = 'website/mt4_platform';
$route['nfp'] = 'website/nfp';
$route['aml-policy'] = 'website/aml_policy';
$route['nfp-winners'] = 'website/nfp_winners';
$route['deposit-funding'] = 'website/deposit_funding';
$route['local-currencies'] = 'website/local_currencies';
$route['disclaimer'] = 'website/disclaimer';
$route['expo-gallery'] = 'website/expo_gallery';
$route['kyc-policy'] = 'website/kyc_policy';
$route['market-news'] = 'website/market_news';
$route['privacy-policy'] = 'website/privacy_policy';
$route['refund-policy'] = 'website/refund_policy';
$route['risk-disclosure'] = 'website/risk_disclosure';
$route['why-choose-us'] = 'website/why_choose_us';
$route['contact-us'] = 'website/contact_us';
$route['account-types'] = 'website/account_types';
$route['comparison'] = 'website/comparison';



/* API */
$route['product'] = 'api/Product';
$route['product/(:any)'] = 'api/Product/$1';
$route['product/(:num)']['PUT'] = 'api/Product/$1';
$route['product/(:num)']['DELETE'] = 'api/Product/$1';
$route['api/register'] = 'api/User/register';
$route['api/login'] = 'api/User/login';
$route['api/logout'] = 'api/User/logout';
$route['reGenToken'] = 'api/Token/reGenToken';
$route['course_api/course_data'] = 'course_api/course_data_get';
$route['course_api/frm_data'] = 'course_api/frm_data_get';
$route['course_api/new_course_data'] = 'course_api/new_course_data_get'; // Add this line for the new API endpoint

