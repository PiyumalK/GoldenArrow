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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;

// accountant routes
$route['accountant/payments'] ='accountant/accountantController';
$route['accountant/delete']='accountant/accountantController/deletePaymentRecord';
$route['accountant/block']='accountant/accountantController/blockPlayerAccount';
$route['accountant/players']='accountant/accountantController/viewPlayers';
$route['accountant/add']='accountant/accountantController/addPaymentRecord';
$route['accountant/update']='accountant/accountantController/updatePaymentRecord';
$route['accountant/trainers']='accountant/trainerPaymentController';
$route['accountant/trainer/add']='accountant/trainerPaymentController/addSalaryRecord';
$route['accountant/dashboard'] ='accountant/AccountantReportController';
$route['accountant/trainer/salary']='accountant/trainerPaymentController/viewSalaryHistory';
$route['accountant/trainer/delete']='accountant//trainerPaymentController/deleteSalaryRecord';

// accountant pagination routes
$route['accountant/trainers/(:num)']='/accountant/trainerPaymentController/index';
$route['accountant/payments/(:num)']='/accountant/accountantController/index';
$route['accountant/players/(:num)']='/accountant/accountantController/viewPlayers';

$route['trainer/dashboard'] = '/trainerController';
$route['logout'] ='/loginController/logout';