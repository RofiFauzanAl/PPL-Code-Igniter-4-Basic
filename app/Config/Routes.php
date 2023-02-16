<?php

namespace Config;

use App\Controllers\c_auth;
use App\Controllers\c_mahasiswa;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// $routes->get('/', 'Home::index');
$routes->get('/mahasiswa_display', 'c_mahasiswa::display');
$routes->get('/mahasiswa_display/create', 'c_mahasiswa::form_display');
$routes->post('/mahasiswa/post', 'c_mahasiswa::postData');
$routes->get('/mahasiswa_display/delete/(:num)', 'c_mahasiswa::deleteMhs/$1');
$routes->post('/mahasiswa_display/form_update/update/(:num)', 'c_mahasiswa::updateMhs/$1');
$routes->get('/mahasiswa_display/form_update/(:num)', 'c_mahasiswa::form_update_mahasiswa/$1');
$routes->get('mahasiswa_display/detail/(:num)', 'c_mahasiswa::detailMahasiswa/$1');
$routes->post('mahasiswa_display/search', 'c_mahasiswa::keywordSearch');

$routes->get('/form_pegawai', 'c_Pegawai::formPegawai');
$routes->post('/form_pegawai/post', 'c_Pegawai::postPegawai');

$routes->get('/', 'c_Home::home');
$routes->get('info', 'c_Info::informasi');

$routes->get('login', 'c_Auth::index');
$routes->post('login/auth', 'c_Auth::login');
$routes->get('logout', 'c_Auth::logout');
/*
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
