<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Home
$routes->get('/', 'TaskController::index');

// Create
$routes->get('/create', 'TaskController::create');
$routes->post('/create', 'TaskController::createNewTask');

// Edit
$routes->get('/edit/(:num)', 'TaskController::edit/$1');
$routes->post('/edit/(:num)', 'TaskController::editTask/$1');

// Delete
$routes->get('/delete/(:num)', 'TaskController::delete/$1');
