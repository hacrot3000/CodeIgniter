<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['dsn']      The full DSN string describe a connection to the database.
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database driver. e.g.: mysqli.
|			Currently supported:
|				 cubrid, ibase, mssql, mysql, mysqli, oci8,
|				 odbc, pdo, postgre, sqlite3, sqlsrv
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Query Builder class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['encrypt']  Whether or not to use an encrypted connection.
|
|			'mysql' (deprecated), 'sqlsrv' and 'pdo/sqlsrv' drivers accept TRUE/FALSE
|			'mysqli' and 'pdo/mysql' drivers accept an array with the following options:
|
|				'ssl_key'    - Path to the private key file
|				'ssl_cert'   - Path to the public key certificate file
|				'ssl_ca'     - Path to the certificate authority file
|				'ssl_capath' - Path to a directory containing trusted CA certificates in PEM format
|				'ssl_cipher' - List of *allowed* ciphers to be used for the encryption, separated by colons (':')
|				'ssl_verify' - TRUE/FALSE; Whether verify the server certificate or not
|
|	['compress'] Whether or not to use client compression (MySQL only)
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|	['ssl_options']	Used to set various SSL options that can be used when making SSL connections.
|	['failover'] array - A array with 0 or more data for connections if the main should fail.
|	['save_queries'] TRUE/FALSE - Whether to "save" all executed queries.
| 				NOTE: Disabling this will also effectively disable both
| 				$this->db->last_query() and profiling of DB queries.
| 				When you run a query, with this setting set to TRUE (default),
| 				CodeIgniter will store the SQL statement for debugging purposes.
| 				However, this may cause high memory usage, especially if you run
| 				a lot of SQL queries ... disable this to avoid that problem.
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $query_builder variables lets you determine whether or not to load
| the query builder class.
*/

//$active_group = 'live';
$active_group = 'default';//blogs.com - local
if (IS_PRODUCTION || IS_PRODUCTION_CHUVANAN || IS_PRODUCTION_BACKUP)
    $active_group = 'live';
if (IS_X10)
    $active_group = 'x10live';
if (IS_CONYEU_COM)
    $active_group = 'conyeu.com';
if (IS_CONYEU_US)
    $active_group = 'conyeu.us';
if(IS_PRODUCTION_HOSTINGER)
    $active_group = 'live.hostinger';

$active_group = $active_group . IS_ON_VPS;

$active_record = TRUE;

$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => 'password',
	'database' => 'hacrot3000_blogs',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['conyeu.com'] = $db['default'];
$db['conyeu.com']['dbprefix'] = 'conyeu_';

$db['conyeu.us'] = $db['default'];
$db['conyeu.us']['username'] = 'chuongdu_data';
$db['conyeu.us']['password'] = '%Kky_GIXt]G#';
$db['conyeu.us']['database'] = 'chuongdu_2278750blogs';
$db['conyeu.us']['save_queries'] = FALSE;
$db['conyeu.us']['dbprefix'] = 'conyeu_';

$db['conyeu.us_vps'] = $db['default'];
$db['conyeu.us_vps']['username'] = 'hacrot3000_cony';
$db['conyeu.us_vps']['password'] = 'V4fAm6tF';
$db['conyeu.us_vps']['database'] = 'hacrot3000_cony';
$db['conyeu.us_vps']['save_queries'] = FALSE;
$db['conyeu.us_vps']['dbprefix'] = 'conyeu_';

$db['live'] = $db['default'];
$db['live']['username'] = 'chuongdu_data';
$db['live']['password'] = '%Kky_GIXt]G#';
$db['live']['database'] = 'chuongdu_2278750blogs';
$db['live']['save_queries'] = FALSE;

$db['live_vps'] = $db['default'];
$db['live_vps']['hostname'] = 'db1.duongtc.com';
$db['live_vps']['username'] = 'hacrot3000_blogs';
$db['live_vps']['password'] = 'a9AMAVBc';
$db['live_vps']['database'] = 'hacrot3000_blogs';

$db['live.hostinger'] = $db['default'];
$db['live.hostinger']['hostname'] = 'localhost';
$db['live.hostinger']['username'] = 'u228443728_blogs';
$db['live.hostinger']['password'] = 'VwVVpA4YWL';
$db['live.hostinger']['database'] = 'u228443728_blogs';
$db['live.hostinger']['save_queries'] = FALSE;

$db['x10live'] = $db['default'];
$db['x10live']['hostname'] = 'localhost';
$db['x10live']['username'] = 'hacrot30_blogs';
$db['x10live']['password'] = '%Kky_GIXt]G#';
$db['x10live']['database'] = 'hacrot30_blogs';
$db['x10live']['save_queries'] = FALSE;

$db['bongsen'] = $db['default'];
$db['bongsen']['hostname'] = 'localhost';
$db['bongsen']['username'] = 'gottrave_bongsen';
$db['bongsen']['password'] = 'C*+#W(,Ign-d';
$db['bongsen']['database'] = 'gottrave_bongsen';
$db['bongsen']['save_queries'] = FALSE;

/*

Database:	hacrot3000_piwi
Host:	localhost
Username:	hacrot3000_piwi
Password:	M23qz6fD

*/