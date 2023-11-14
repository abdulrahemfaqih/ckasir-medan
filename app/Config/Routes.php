<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/menu', 'Menu::index');
$routes->get('/jenis', 'Jenis::index');
$routes->get('/transaksi', 'Transaksi::index');
$routes->get('/user', 'User::index');
$routes->get('/laporan', 'Laporan::index');

