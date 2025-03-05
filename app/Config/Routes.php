<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'TaskController::index');
$routes->get('/create', 'TaskController::create');
$routes->get('/edit', 'TaskController::edit');
