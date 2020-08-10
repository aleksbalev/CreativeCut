<?php
/**
 *  MODX Configuration file
 */
$localPath =  realpath(__DIR__) . '/local/local_config.php';
if (file_exists($localPath)) {
    include 'local/local_config.php';
} else {
    $DNS = 'basic.indyn.de';

    $database_type = 'mysql';
    $database_server = '10.35.47.161';
    $database_user = 'k72734_basic';
    $database_password = 'w212dscwv3E61s7n';
    $database_connection_charset = 'utf8';
    $dbase = 'k72734_basic';
    $table_prefix = 'inside_';

    $config_options = array (
        'override_table' => 'MyISAM',
    );
    $driver_options = array ();
}

$CORE_PATH = dirname(dirname(dirname(__FILE__)));

$database_dsn = $database_type.':host='.$database_server.';dbname='.$dbase.';charset='.$database_connection_charset;


$lastInstallTime = 1556093829;

$site_id = 'modx5cc01b85a54ac8.86503627';
$site_sessionname = 'SN5a8dc1570dca3';
$https_port = '443';
$uuid = '1b32fa57-b958-4bf0-bfee-4f6e862e00cf';

if (!defined('MODX_CORE_PATH')) {
    $modx_core_path= $CORE_PATH . '/core/';
    define('MODX_CORE_PATH', $modx_core_path);
}
if (!defined('MODX_PROCESSORS_PATH')) {
    $modx_processors_path= $CORE_PATH . '/core/model/modx/processors/';
    define('MODX_PROCESSORS_PATH', $modx_processors_path);
}
if (!defined('MODX_CONNECTORS_PATH')) {
    $modx_connectors_path= $CORE_PATH . '/co-rs/';
    $modx_connectors_url= '/co-rs/';
    define('MODX_CONNECTORS_PATH', $modx_connectors_path);
    define('MODX_CONNECTORS_URL', $modx_connectors_url);
}
if (!defined('MODX_MANAGER_PATH')) {
    $modx_manager_path= $CORE_PATH . '/m-adm/';
    $modx_manager_url= '/m-adm/';
    define('MODX_MANAGER_PATH', $modx_manager_path);
    define('MODX_MANAGER_URL', $modx_manager_url);
}
if (!defined('MODX_BASE_PATH')) {
    $modx_base_path= $CORE_PATH . '/';
    $modx_base_url= '/';
    define('MODX_BASE_PATH', $modx_base_path);
    define('MODX_BASE_URL', $modx_base_url);
}
if(defined('PHP_SAPI') && (PHP_SAPI == "cli" || PHP_SAPI == "embed")) {
    $isSecureRequest = false;
} else {
    $isSecureRequest = ((isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off') || $_SERVER['SERVER_PORT'] == $https_port);
}
if (!defined('MODX_URL_SCHEME')) {
    $url_scheme=  $isSecureRequest ? 'https://' : 'http://';
    define('MODX_URL_SCHEME', $url_scheme);
}
if (!defined('MODX_HTTP_HOST')) {
    if(defined('PHP_SAPI') && (PHP_SAPI == "cli" || PHP_SAPI == "embed")) {
        $http_host=$DNS;
        define('MODX_HTTP_HOST', $http_host);
    } else {
        $http_host= array_key_exists('HTTP_HOST', $_SERVER) ? htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES) : $DNS;
        if ($_SERVER['SERVER_PORT'] != 80) {
            $http_host= str_replace(':' . $_SERVER['SERVER_PORT'], '', $http_host); // remove port from HTTP_HOST
        }
        $http_host .= ($_SERVER['SERVER_PORT'] == 80 || $isSecureRequest) ? '' : ':' . $_SERVER['SERVER_PORT'];
        define('MODX_HTTP_HOST', $http_host);
    }
}
if (!defined('MODX_SITE_URL')) {
    $site_url= $url_scheme . $http_host . MODX_BASE_URL;
    define('MODX_SITE_URL', $site_url);
}
if (!defined('MODX_ASSETS_PATH')) {
    $modx_assets_path= $CORE_PATH . '/assets/';
    $modx_assets_url= '/assets/';
    define('MODX_ASSETS_PATH', $modx_assets_path);
    define('MODX_ASSETS_URL', $modx_assets_url);
}
if (!defined('MODX_LOG_LEVEL_FATAL')) {
    define('MODX_LOG_LEVEL_FATAL', 0);
    define('MODX_LOG_LEVEL_ERROR', 1);
    define('MODX_LOG_LEVEL_WARN', 2);
    define('MODX_LOG_LEVEL_INFO', 3);
    define('MODX_LOG_LEVEL_DEBUG', 4);
}
