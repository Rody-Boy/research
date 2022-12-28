<?php
if(!defined('base_url')) define('base_url',dirname(__FILE__).DIRECTORY_SEPARATOR);
if(!defined('base_app')) define('base_app', str_replace('\\','/',__DIR__).'/' );
define('PAGES', base_app.'/pages'.DIRECTORY_SEPARATOR);
define('ACTIONS', base_app.'/actions'.DIRECTORY_SEPARATOR);
if(!defined('DB_SERVER')) define('DB_SERVER',"localhost");
if(!defined('DB_USERNAME')) define('DB_USERNAME',"root");
if(!defined('DB_PASSWORD')) define('DB_PASSWORD',"");
if(!defined('DB_NAME')) define('DB_NAME',"research");
//define('DIROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);
//define('PAGES', dirname(__FILE__).'/pages'.DIRECTORY_SEPARATOR);
