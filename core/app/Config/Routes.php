<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Halaman Admin
$routes->get('/', 'Page::login_');
$routes->get('/Dashboard_', 'Page::dashboard_');
$routes->get('/User_', 'Page::user_');
$routes->get('/Pendataan_', 'Page::pendataan_');
$routes->get('/Login_', 'Page::login_');

// Proses Data
// User
$routes->post('/Login', 'User_::login');
$routes->post('/TambahUser', 'User_::create');
$routes->post('/EditUser/(:num)', 'User_::edit/$1');
$routes->post('/GantiPassword/(:num)', 'User_::gantiPassword/$1');
$routes->get('/HapusUser/(:num)', 'User_::hapus/$1');
$routes->get('/Keluar', 'User_::keluar');

// Pendataan
$routes->post('/TambahPendataan', 'Pendataan_::create');
$routes->get('/Hapus/(:num)', 'Pendataan_::hapus/$1');
$routes->post('/SinkronisasiData', 'Pendataan_::sinkronisasiData');
