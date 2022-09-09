<?php
$routes = [
    'tg-admin' => 'trongate_administrators/login',
    'tg-admin/submit_login' => 'trongate_administrators/submit_login',

    //
    'admin' => 'trongate_administrators/login',
    'admin/manage' => 'trongate_administrators/manage'

];
define('CUSTOM_ROUTES', $routes);
