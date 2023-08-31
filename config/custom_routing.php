<?php
$routes = [
    'tg-admin' => 'trongate_administrators/login',
    'trongate-pages' => 'trongate_pages/index',
    'tg-admin/submit_login' => 'trongate_administrators/submit_login'
];

// Include custom routes from modules.
foreach (glob($dir . 'modules/*/*_routes.php') as $file) {

    $moduleName = basename(dirname($file));

    include_once $file;

    // Merge the routes
    if (isset(${$moduleName . '_routes'})) {
        $routes = array_merge($routes, ${$moduleName . '_routes'});
    }
}

define('CUSTOM_ROUTES', $routes);