<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\{Home ,Phone, Collections};

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);
$routes->get('/collections', [Collections::class, 'index']);
$routes->get('/phone', [Phone::class, 'display']);
$routes->get('/phone/(:num)', [Phone::class, 'detail']);
$routes->patch('/phone', [Phone::class, 'insert']);
$routes->delete('/phone/(:num)', [Phone::class, 'delete']);
$routes->patch('/phone/(:num)', [Phone::class, 'update']);
