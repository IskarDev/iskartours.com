<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/* $routes->get('/', 'Home::index'); */


$routes->get('/', 'Pages::home');
$routes->get('contact', 'Pages::view/contact');