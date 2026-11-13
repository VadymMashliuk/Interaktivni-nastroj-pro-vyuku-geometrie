<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('ctverec', 'Home::ctverec');
$routes->get('obdelnik', 'Home::obdelnik');