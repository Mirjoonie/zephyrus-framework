<?php

/**
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 * !!!!! BOOTSTRAP FILE AUTOMATICALLY LOADED                              !!!!!
 * !!!!! Make sure to properly link the framework.                        !!!!!
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 */
define('ROOT_DIR', __DIR__ . '/..');
require ROOT_DIR . '/vendor/autoload.php';

use Zephyrus\Application\Configuration;
use Zephyrus\Application\Bootstrap;
use Zephyrus\Security\Router;

$router = new Router();

include(Bootstrap::getHelperFunctionsPath());
if (Configuration::getApplicationConfiguration('env') == 'prod') {
    include('handlers.php');
}
Bootstrap::start();

include('security.php');
