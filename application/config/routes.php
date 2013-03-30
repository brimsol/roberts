<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "backend/admin";
/*404*/
$route['404_override'] = '';
/*Login*/
$route['admin'] = "backend/admin";
/*Login*/
$route['dashboard'] = "backend/dashboard";
/*Admin Logout*/
$route['admin/logout'] = "backend/admin/logout";
/*Admin Change Pass*/
$route['admin/change_password'] = "backend/admin/change_password";
/*List All Testimonial*/
$route['admin/testimonials'] = "backend/testimonials/index";
$route['admin/testimonials/(:num)'] = "backend/testimonials/index";
/*Add New Testimonial*/
$route['admin/testimonial/add'] = "backend/testimonials/add";
/*Edit Testimonial*/
$route['admin/testimonial/edit/(:num)'] = "backend/testimonials/edit/$1";
/*Delete Testimonial*/
$route['admin/testimonial/delete/(:num)/(:any)'] = "backend/testimonials/delete/$1/$2";
/*List All Slider*/
$route['admin/slider'] = "backend/slider";
/*Add New Slider*/
$route['admin/slider/add'] = "backend/slider/add";
/*Edit Slider*/
$route['admin/slider/edit/(:num)'] = "backend/slider/edit/$1";
/*Delete Slider*/
$route['admin/slider/delete/(:num)/(:any)'] = "backend/slider/delete/$1/$2";
/*Add New Online Store*/
$route['admin/video/add'] = "backend/videos/add";
/*Edit Online Store*/
$route['admin/video/edit/(:num)'] = "backend/videos/edit/$1";
/*Delete Online Store*/
$route['admin/video/delete/(:num)'] = "backend/videos/delete/$1";
/*List All Online Stores*/
$route['admin/videos'] = "backend/videos";
$route['admin/video'] = "backend/videos";

/* End of file routes.php */
/* Location: ./application/config/routes.php */