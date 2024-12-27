<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/parfum', 'ParfumController::index');
$routes->get('/parfum/create', 'ParfumController::create');
$routes->post('/parfum/store', 'ParfumController::store');
$routes->get('/parfum/edit/(:num)', 'ParfumController::edit/$1');
$routes->put('/parfum/update/(:num)', 'ParfumController::update/$1');
$routes->get('/parfum/delete/(:num)', 'ParfumController::delete/$1');
