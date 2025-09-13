<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/* $routes->get('/', 'Home::index'); */

use App\Controllers\Pages;
$routes->get('/', 'Pages::home');
$routes->get('pages', [Pages::class, 'home']);
$routes->get('(:segment)', [Pages::class, 'view']);
