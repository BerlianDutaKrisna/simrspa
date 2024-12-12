<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index'); // Menampilkan form login
$routes->get('register', 'Login::register'); // Menampilkan form register