<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/sahin/(:segment)', 'ServerFisik::detail/$1');
$routes->get('/dashboard', 'Home::index', ['filter' => 'role:admin']);

$routes->get('/user', 'User::index', ['filter' => 'role:admin']);
$routes->get('/user/index', 'User::index', ['filter' => 'role:admin']);
$routes->get('/user/register', 'User::register', ['filter' => 'role:admin']);
$routes->get('/user/edit/(:segment)', 'User::edit/$1', ['filter' => 'role:admin']);
$routes->post('/user/update/(:segment)', 'User::update/$1', ['filter' => 'role:admin']);
$routes->delete('/user/(:num)', 'User::delete/$1', ['filter' => 'role:admin']);

$routes->get('/order', 'Order::index', ['filter' => 'role:admin,user']);
$routes->get('/order/index', 'Order::index', ['filter' => 'role:admin,user']);
