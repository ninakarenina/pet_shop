<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/users/register', 'Users::register');
$routes->post('/users/register', 'Users::postRegister');

$routes->get('/users/login', 'Users::login');
$routes->post('/users/login', 'Users::postLogin');
