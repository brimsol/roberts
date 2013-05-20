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

$route['default_controller'] = "home";
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
/*List All Client of the month*/
$route['admin/clients'] = "backend/clients/index";
$route['admin/clients/(:num)'] = "backend/clients/index";
/*Add New Client of the month*/
$route['admin/client/add'] = "backend/clients/add";
/*Edit Client of the month*/
$route['admin/client/edit/(:num)'] = "backend/clients/edit/$1";
/*Delete Client of the month*/
$route['admin/client/delete/(:num)/(:any)'] = "backend/clients/delete/$1/$2";
/*List All Testimonial*/
$route['admin/testimonials'] = "backend/testimonials/index";
$route['admin/testimonials/(:num)'] = "backend/testimonials/index";
/*Add New Testimonial*/
$route['admin/testimonial/add'] = "backend/testimonials/add";
/*Edit Testimonial*/
$route['admin/testimonial/edit/(:num)'] = "backend/testimonials/edit/$1";
/*Delete Testimonial*/
$route['admin/testimonial/delete/(:num)/(:any)'] = "backend/testimonials/delete/$1/$2";
/*List All Products*/
$route['admin/products'] = "backend/products/index";
$route['admin/products/(:num)'] = "backend/products/index";
/*Add New Products*/
$route['admin/product/add'] = "backend/products/add";
/*Edit Products*/
$route['admin/product/edit/(:num)'] = "backend/products/edit/$1";
/*Delete Products*/
$route['admin/product/delete/(:num)/(:any)'] = "backend/products/delete/$1/$2";
/*List All Categories*/

/*List All Products*/
$route['admin/signs'] = "backend/signs/index";
$route['admin/signs/(:num)'] = "backend/signs/index";
/*Add New Products*/
$route['admin/sign/add'] = "backend/signs/add";
/*Edit Products*/
$route['admin/sign/edit/(:num)'] = "backend/signs/edit/$1";
/*Delete Products*/
$route['admin/sign/delete/(:num)/(:any)'] = "backend/signs/delete/$1/$2";
/*List All Categories*/

$route['admin/ourworks/categories'] = "backend/ourworks/categories";
$route['admin/ourworks/categories/(:num)'] = "backend/ourworks/categories";
/*Add New Categories*/
$route['admin/ourworks/category/add'] = "backend/ourworks/add_category";
/*Edit Categories*/
$route['admin/ourworks/category/edit/(:num)'] = "backend/ourworks/edit_category/$1";
/*Delete Categories*/
$route['admin/ourworks/category/delete/(:num)'] = "backend/ourworks/delete_category/$1";
/*List All Categories*/
$route['admin/ourworks'] = "backend/ourworks/index";
$route['admin/ourworks/(:num)'] = "backend/ourworks/index";
/*Add New Categories*/
$route['admin/ourworks/add'] = "backend/ourworks/add";
/*Edit Categories*/
$route['admin/ourworks/edit/(:num)'] = "backend/ourworks/edit/$1";
/*Delete Categories*/
$route['admin/ourworks/delete/(:num)/(:any)'] = "backend/ourworks/delete/$1/$2";
/*List All Categories*/
$route['admin/ourwork'] = "backend/ourworks/index";
$route['admin/ourwork/(:num)'] = "backend/ourworks/index";
/*Add New Categories*/
$route['admin/ourwork/add'] = "backend/ourworks/add";
/*Edit Categories*/
$route['admin/ourwork/edit/(:num)'] = "backend/ourworks/edit/$1";
/*Delete Categories*/
$route['admin/ourwork/delete/(:num)/(:any)'] = "backend/ourworks/delete/$1/$2";
/*List All Spotlights*/
$route['admin/spotlights'] = "backend/spotlights/index";
$route['admin/spotlights/(:num)'] = "backend/spotlights/index";
/*Add New Testimonial*/
$route['admin/spotlight/add'] = "backend/spotlights/add";
/*Edit Testimonial*/
$route['admin/spotlight/edit/(:num)'] = "backend/spotlights/edit/$1";
/*Delete Testimonial*/
$route['admin/spotlight/delete/(:num)/(:any)'] = "backend/spotlights/delete/$1/$2";
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
/*Add New Page*/
$route['admin/page/add'] = "backend/pages/add";
/*Edit Page*/
$route['admin/page/edit/(:num)'] = "backend/pages/edit/$1";
/*List All Pages*/
$route['admin/pages'] = "backend/pages";
$route['admin/page'] = "backend/pages";
/*Delete Page*/
$route['admin/page/delete/(:num)'] = "backend/pages/delete/$1";
/*About us*/
$route['about'] = "home/about";

$route['testimonials'] = "home/testimonials";
$route['testimonials/(:num)'] = "home/testimonials/$1";

/*FAQ*/
$route['faq'] = "home/contact";
/*Contact Us*/
$route['contact'] = "home/contact";
/*Frontend Product View*/
$route['products/view/(:num)'] = "home/products_view/$1";
/*Frontend Product list*/
$route['products'] = "home/products/";
/*Frontend Spotlight more list*/
$route['spotlights'] = "home/spotlights/";
/*Frontend Our work list*/
$route['ourworks'] = "home/ourworks/";

$route['admin/settings'] = "backend/settings/index/";

$route['admin/client/featured/(:num)'] = "backend/clients/featured/$1";
$route['admin/video/featured/(:num)'] = "backend/videos/featured/$1";
$route['admin/testimonial/featured/(:num)'] = "backend/testimonials/featured/$1";
$route['admin/spotlight/featured/(:num)'] = "backend/spotlights/featured/$1";

$route['admin/client/unfeatured/(:num)'] = "backend/clients/unfeatured/$1";
$route['admin/video/unfeatured/(:num)'] = "backend/videos/unfeatured/$1";
$route['admin/testimonial/unfeatured/(:num)'] = "backend/testimonials/unfeatured/$1";
$route['admin/spotlight/unfeatured/(:num)'] = "backend/spotlights/unfeatured/$1";

/*List All Officials*/
$route['admin/staffs'] = "backend/staffs/index";
$route['admin/staffs/(:num)'] = "backend/staffs/index";
/*Add New Officials*/
$route['admin/staffs/add'] = "backend/staffs/add";
/*Edit Officials*/
$route['admin/staffs/edit/(:num)'] = "backend/staffs/edit/$1";
/*View Officials*/
$route['admin/staffs/view/(:num)'] = "backend/staffs/view/$1";
/*Delete Officials*/
$route['admin/staffs/delete/(:num)/(:any)'] = "backend/staffs/delete/$1/$2";
/*Delete Officials*/
$route['admin/staffs/delete/(:num)'] = "backend/staffs/delete/$1";


/*List All Officials*/
$route['admin/gifts'] = "backend/gifts/index";
$route['admin/gifts/(:num)'] = "backend/gifts/index";
/*Add New Officials*/
$route['admin/gifts/add'] = "backend/gifts/add";
/*Edit Officials*/
$route['admin/gifts/edit/(:num)'] = "backend/gifts/edit/$1";
/*View Officials*/
$route['admin/gifts/view/(:num)'] = "backend/gifts/view/$1";
/*Delete Officials*/
$route['admin/gifts/delete/(:num)/(:any)'] = "backend/gifts/delete/$1/$2";
/*Delete Officials*/
$route['admin/gifts/delete/(:num)'] = "backend/gifts/delete/$1";
/* End of file routes.php */
/* Location: ./application/config/routes.php */