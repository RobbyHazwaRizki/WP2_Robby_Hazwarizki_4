<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('contoh1', 'Contoh1::index');
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->get('/', 'Home::index');
$routes->get('user/(:num)', 'UserController::userProfile/$1');
$routes->get('latihan1', 'Latihan1::index');
$routes->get('penjumlahan/(:num)/(:num)', 'Latihan1::penjumlahan/$1/$2');

