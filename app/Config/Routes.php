<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index'); // Menampilkan form Auth
$routes->get('login', 'Auth::index'); // Menampilkan form Auth
$routes->get('register', 'Auth::register'); // Menampilkan form register
$routes->post('auth/insert', 'Auth::insert'); // Menangani form POST dari register
$routes->post('auth/save', 'Auth::save'); // Menangani form POST dari register

// Route untuk pengujian
$routes->get('/test', 'Test::index');
