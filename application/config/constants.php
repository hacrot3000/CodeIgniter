<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       https://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       https://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code
 
define("TIME_ONE_YEAR", 31536000);
define("TIME_ONE_DAY", 86400);
define("CACHE_LAST_UPDATE_DATA", 'last_update_data');


define('PAGE_TYPE_INDEX', 1);
define('PAGE_TYPE_POSTLIST', 2);
define('PAGE_TYPE_CATEGORY', 4);
define('PAGE_TYPE_SINGLEPOST', 8);
define('PAGE_TYPE_SINGLEPAGE', 16);
define('PAGE_TYPE_PAGELIST', 32);
define('PAGE_TYPE_IN_ARCHIVES', 64);
define('PAGE_TYPE_SEARCH', 128);
define('PAGE_TYPE_PICASA', 256);
define('PAGE_TYPE_ALLPAGE', 65535);
define('PAGE_TYPE_WELCOME_HOME', 65536);
define('PAGE_TYPE_AJAX', 131072);

define('WIDGET_CUSTOM_HTML', 1);            //Need view, page_type
define('WIDGET_SQL', 2);                    //Need view, page_type, sql, limit, content_column, max_length
define('WIDGET_POST_LIST', 3);              //Need view, detect condition, detect max_length, detect limit
define('WIDGET_CUSTOM_POST_LIST', 301);     //Need view, page_type, condition, max_length, limit, order
define('WIDGET_SINGLE_POST', 4);            //Need view, detect id
define('WIDGET_CUSTOM_SINGLE_POST', 401);   //Need view, page_type, condition, max_length
define('WIDGET_ARCHIVES', 5);               //Need view, page_type, limit (optional), "order" => array("count","desc") (optional)
define('WIDGET_CATEGORY', 6);               //Need view, page_type, limit (optional)
define('WIDGET_LINK_LIST', 7);              //Need view, page_type, position
define('WIDGET_POST_COMMENT', 8);           //Need view, detect post id, max_length
define('WIDGET_CUSTOM_COMMENT', 9);         //Need view, page_type, condition, max_length
define('WIDGET_SLIDESHOW', 10);             //Need view, page_type, position, limit, order
define('WIDGET_PAGE_LIST', 11);             //Need view, page_type, group
define('WIDGET_HOME_PAGE_LIST', 110);       //Need view
define('WIDGET_PAGE_SINGLE', 12);           //Need view, page_type, group, condition = NULL if auto detect, max_length
define('WIDGET_MULTI_PAGE', 13);            //Need view, page_type, group, condition, max_length, limit
define('WIDGET_MENU', 14);                  //Need view, page_type, position
define('WIDGET_POST_PAGINATION', 15);       //Need view
define('WIDGET_ADVERTISES', 16);            //Need view, page_type, group, limit (optional)
define('PAGE_HAVE_IMAGE', 121999);
define('STRIP_TAB_CONTENT', 121998);
define('NO_NEED_CATEGORY_INFO', 121997);
define('ROLE_NORMAL_USER', 0);
define('ROLE_PUBLISHER_USER', 1);
define('ROLE_ADMIN', 2);
define('ROLE_SUPER_ADMIN', 3);
define('PAGE_BREAK_STRING', "<!--more-->");
define('PAGE_BREAK_CKEDITER', '<div style="page-break-after: always;">');
define('FRONT_END_IMAGE_FUNCTION', 'front_end_skin');
define('CUSTOM_FRONT_END_IMAGE_FUNCTION', FALSE);

define('HOMEPAGE_DEFAULT_NEW_TOPIC', 0);
define('HOMEPAGE_DEFAULT_A_TOPIC', 1);
define('HOMEPAGE_DEFAULT_A_PAGE', 2);
define('HOMEPAGE_DEFAULT_A_CATEGORY', 3);


define('TEMPLATE_SLIDE_BIG', "bigslide");
define('TEMPLATE_SLIDE_MASTER_SMALL', "mastersmallslide");
define('TEMPLATE_SLIDE_SMALL', "smallslide");
define('TEMPLATE_SLIDE_MASTER_LISTING', "masterlistingslide");
define('TEMPLATE_SLIDE_LISTING', "listingslide");
define('TEMPLATE_NEWS', "news");
define('TEMPLATE_STATIC_PAGE', "staticpage");
define('TEMPLATE_CONTACT_PAGE', "contact");

define('PER_PAGE_LISTING_SLIDE', 15);
define('PER_PAGE_NEWS', 5);


if (!defined('DS'))
    define ('DS', DIRECTORY_SEPARATOR);

define('ADV_MIDDLE_CONTENT_BREAK', 'GAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA');//Don't forgot to change the ckeditor plugins googleadv
