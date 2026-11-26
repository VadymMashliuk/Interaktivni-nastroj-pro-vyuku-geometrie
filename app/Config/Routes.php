<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('ctverec', 'Home::ctverec');
$routes->get('obdelnik', 'Home::obdelnik');
$routes->get('kruh', 'Home::kruh');
$routes->get('lichobeznik', 'Home::lichobeznik');
$routes->get('rovnobeznik', 'Home::rovnobeznik');
$routes->get('kosoctverec', 'Home::kosoctverec');
$routes->get('pravidelnyMnohouhelnik', 'Home::pravidelnyMnohouhelnik');