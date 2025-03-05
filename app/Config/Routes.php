<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('task', 'Task::index');
$routes->get('task/product/(:any)', 'Task::product/$1');
