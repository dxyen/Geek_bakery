<?php
    defined('ROOT') ?: define('ROOT', dirname(dirname(__DIR__)));


    defined('DS') ?: define('DS', DIRECTORY_SEPARATOR);
    defined('APP') ?: define('APP', ROOT.DS.'App');
    defined('CORE') ?: define('CORE', APP.DS.'Core');
    defined('CONTROLLER') ?: define('CONTROLLER', APP.DS.'Controllers');
    defined('MODEL') ?: define('MODEL', APP.DS.'Models');
    defined('VIEW') ?: define('VIEW', APP.DS.'Views');
    defined('CONFIGS') ?: define('CONFIGS', APP.DS.'Configs');
    defined('PUBLIC') ?: define('PUBLIC', APP.DS.'public');


    require_once(CORE . DS . "App.php");
    require_once(CORE . DS . "Controller.php");
    require_once(CORE . DS . "Database.php");

    // xuli database
    $data = require(CONFIGS.DS."database.php");

    defined('DB_HOSTNAME') ?: define('DB_HOSTNAME', $data['db_hostname']);
    defined('DB_NAME') ?: define('DB_NAME', $data['db_name']);
    defined('DB_USERNAME') ?: define('DB_USERNAME', $data['db_username']);
    defined('DB_PASSWORD') ?: define('DB_PASSWORD', $data['db_password']);


    defined('DOCUMENT_ROOT') ?:  define('DOCUMENT_ROOT', "http://" . $_SERVER['SERVER_NAME'] . ":81/Geek_Bakery");
    defined ('PUBLIC_URL') ?: define('PUBLIC_URL',"http://" . $_SERVER['SERVER_NAME'] . ":81/Geek_bakery" . '/public');
    defined('IMAGES_URL') ?:  define('IMAGES_URL', PUBLIC_URL . '/img');
    defined ('IMAGES_CAKES_URL') ?: define('IMAGES_CAKES_URL', PUBLIC_URL .'/img/cakes');
    defined ('ICONS_URL') ?: define('ICONS_URL', PUBLIC_URL .'/icons');
    defined ('IMAGE_CATEGORY_URL') ?: define('IMAGE_CATEGORY_URL', PUBLIC_URL .'/img/categories');

    defined('USER_AVATAR_URL') ?:  define('USER_AVATAR_URL', PUBLIC_URL . '/uploads/avatar/');
?>
