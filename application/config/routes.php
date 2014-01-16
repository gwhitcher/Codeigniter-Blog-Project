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

$route['default_controller'] = "blog";
$route['login'] = "login";
$route['logout'] = "admin/logout";
$route['verifylogin'] = 'verifylogin';
$route['admin'] = "admin";
$route['about'] = "pages/about";
$route['contact'] = "pages/contact";
$route['rss'] = "blog/rss";
$route['google'] = "pages/google";
$route['search'] = "blog/search";
$route['category/(:any)'] = 'blog/category/$1';
$route['blog/(:any)'] = 'blog/view/$1';
$route['articles/(:any)'] = 'blog/index/$1';
$route['admin/add_article'] = 'admin/add_article';
$route['admin/edit_article/(:any)'] = 'admin/edit_article/$1';
$route['admin/delete_article/(:any)'] = 'admin/delete_article/$1';
$route['admin/add_category'] = 'admin/add_category';
$route['admin/edit_category/(:any)'] = 'admin/edit_category/$1';
$route['admin/delete_category/(:any)'] = 'admin/delete_category/$1';
$route['admin/add_sidebar'] = 'admin/add_sidebar';
$route['admin/edit_sidebar/(:any)'] = 'admin/edit_sidebar/$1';
$route['admin/delete_sidebar/(:any)'] = 'admin/delete_sidebar/$1';
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */