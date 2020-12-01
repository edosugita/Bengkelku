<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


// ------------------------------------Users------------------------------------

$routes->get('/', 'Users::index');
$routes->get('/logout', 'Users::logout');
$routes->get('/home/review/(:segment)', 'Users::review/$1');
$routes->get('/home/detail/(:segment)', 'Users::detail/$1');
$routes->get('/selesai/(:segment)', 'Users::selesai/$1');
$routes->get('/canceled/(:segment)', 'Users::canceled/$1');
$routes->get('/home/pemesanan/(:segment)', 'Users::pemesanan/$1');
$routes->match(['get', 'post'], '/profile', 'Users::profile', ['filter' => 'auth']);
$routes->match(['get', 'post'], '/save', 'Users::save');
$routes->match(['get', 'post'], '/pesan', 'Users::pesan');
$routes->match(['get', 'post'], '/update', 'Users::update');
$routes->match(['get', 'post'], '/ulasan', 'Users::ulasan');
$routes->match(['get', 'post'], '/login', 'Users::login');
$routes->match(['get', 'post'], '/register', 'Users::register');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
