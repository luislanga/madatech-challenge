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
$routes->get('/edit', 'TaskController::edit');
