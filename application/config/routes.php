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
| When you set this option to TRUE, it will replace ALL dashes with
| underscores in the controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = "index";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['robots.txt'] = 'common/robots';

$route['tips/(:any)'] = "welcome/tips/$1";


//Category
$route['category/([0-9]+)/(:any)'] = "index/index/category/$1/$2";
$route['category/([0-9]+)'] = "index/index/category/$1";
//Bài viết
$route['post/([0-9]+)'] = "index/index/post/$1";
$route['post/([0-9]+)/(:any)'] = "index/index/post/$1";
$route['topic/([0-9]+)'] = "index/index/post/$1";
$route['topic/([0-9]+)/(:any)'] = "index/index/post/$1";
$route['(:any).html'] = "index/index/post/$1";

//Phân trang ở trang chủ
$route['p/([0-9]+)'] = "index/index/p/$1";
//Nội dung lưu trữ
$route['archive/([0-9]+)/(:any)/(:any)'] = "index/index/archive/$1/$2/$3/1";
$route['archive/([0-9]+)/(:any)/(:any)/([0-9]+)'] = "index/index/archive/$1/$2/$3/$4";
//Hiển thị trang tin
$route['page/([0-9]+)'] = "index/index/page/$1";
$route['page/([0-9]+)/(.*)'] = "index/index/page/$1";
//Danh sách nhóm trang tin
$route['resource/(:any)'] = "index/index/resource/$1";
//Trang chào mừng
$route['welcome/(:any)'] = "welcome/page/$1";
//Liên kết
$route['link/(:any)'] = "welcome/link/$1";
/*
 * Phần này để chuyển đổi link tương thích từ blogspot
 */
//Chuyển đổi link bài viết
$route['([0-9]+)/([0-9]+)/(:any)'] = "index/index/$1/$2/$3";
//Chuyển đổ link archive - bài viết theo tháng
$route['([0-9]+)_([0-9]+)_([0-9]+)_archive.html'] = "index/index/archive/-1/$1-$2-01 00:00:00/$1-$2-31 23:59:59";
/*
 * Kết thúc phần này để chuyển đổi link tương thích từ blogspot
 */
/* End of file routes.php */
/* Location: ./application/config/routes.php */
