<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// $routes->get('/', 'Home::index');
$routes->get('/', 'User::index');
$routes->get('/User', 'User::index');
$routes->get('/User/edit/(:segment)', 'User::edit/$1');
$routes->post('/User/updatePhoto/(:num)', 'User::updatePhoto/$1');
$routes->post('/User/update/(:num)', 'User::update/$1');
$routes->get('/dashboard', 'User::dashboard');

$routes->get('/Smp/export/(:segment)', 'Export::export/$1');
$routes->get('/Sma/export/(:segment)', 'Export::exportSma/$1');

$routes->get('/Smp', 'Smp::index', ['filter' => 'role:admin,co_walas']);
$routes->get('/Smp/indukSmp', 'Smp::indukSmp', ['filter' => 'role:admin,co_walas']);
$routes->get('/Smp/search', 'Smp::search', ['filter' => 'role:admin,co_walas']);
$routes->get('/Smp/lulus', 'Smp::lulus', ['filter' => 'role:admin,co_walas']);
$routes->get('/Smp/edit/(:segment)/(:segment)', 'Smp::editSmp/$2', ['filter' => 'role:admin,co_walas']);
$routes->post('/Smp/update/(:segment)', 'Smp::updateSmp/$1', ['filter' => 'role:admin,co_walas']);
$routes->post('/Smp/delete/(:num)', 'Smp::deleteSmp/$1', ['filter' => 'role:admin,co_walas']);
$routes->post('/Smp/save', 'Smp::saveSmp', ['filter' => 'role:admin,co_walas']);
$routes->get('/Smp/kelas/(:segment)', 'Smp::kelasSmp/$1', ['filter' => 'role:admin,co_walas']);
$routes->get('/Smp/tahun/(:segment)', 'Smp::tahunSmp/$1', ['filter' => 'role:admin,co_walas']);
$routes->get('/Smp/export', 'Smp::export', ['filter' => 'role:admin,co_walas']);
$routes->get('/Smp/input', 'Smp::inputSmp', ['filter' => 'role:admin,co_walas']);
$routes->get('/Smp/create', 'Smp::createSmp', ['filter' => 'role:admin,co_walas']);
// $routes->post('/Smp/importSiswa', 'Smp::importSiswa');
$routes->post('/Smp/importSiswa', 'Smp::importSiswa', ['filter' => 'role:admin,co_walas']);
$routes->post('/Smp/updateSiswa', 'Smp::updateSiswa', ['filter' => 'role:admin,co_walas']);
$routes->post('/Smp/importSiswaFormatBraja', 'Smp::importSiswaFormatBraja', ['filter' => 'role:admin,co_walas']);

$routes->get('/Sma', 'Sma::index', ['filter' => 'role:admin,co_walas']);
$routes->get('/Sma/indukSma', 'Sma::indukSma', ['filter' => 'role:admin,co_walas']);
$routes->get('/Sma/search', 'Sma::search', ['filter' => 'role:admin,co_walas']);
$routes->get('/Sma/lulus', 'Sma::lulus', ['filter' => 'role:admin,co_walas']);
$routes->get('/Sma/edit/(:segment)/(:segment)', 'Sma::editSma/$2', ['filter' => 'role:admin,co_walas']);
$routes->post('/Sma/update/(:segment)', 'Sma::updateSma/$1', ['filter' => 'role:admin,co_walas']);
$routes->delete('/Sma/delete/(:num)', 'Sma::deleteSma/$1', ['filter' => 'role:admin,co_walas']);
$routes->post('/Sma/save', 'Sma::saveSma', ['filter' => 'role:admin,co_walas']);
$routes->get('/Sma/kelas/(:segment)', 'Sma::kelasSma/$1', ['filter' => 'role:admin,co_walas']);
$routes->get('/Sma/tahun/(:segment)', 'Sma::tahunSma/$1', ['filter' => 'role:admin,co_walas']);
$routes->get('/Sma/export', 'Sma::export', ['filter' => 'role:admin,co_walas']);
$routes->get('/Sma/input', 'Sma::inputSma', ['filter' => 'role:admin,co_walas']);
$routes->get('/Sma/create', 'Sma::createSma', ['filter' => 'role:admin,co_walas']);
// $routes->post('/Sma/importSiswa', 'Sma::imaortSiswa');
$routes->post('/Sma/importSiswa', 'Sma::importSiswa', ['filter' => 'role:admin,co_walas']);
$routes->post('/Sma/updateSiswa', 'Sma::updateSiswa', ['filter' => 'role:admin,co_walas']);
$routes->post('/Sma/importSiswaFormatBraja', 'Sma::importSiswaFormatBraja', ['filter' => 'role:admin,co_walas']);

$routes->get('/Admin/All-Users', 'Admin::all_users', ['filter' => 'role:admin']);
$routes->get('/User/user-status', '_UserStatus\GetUserStatus::update_user_status');

$routes->get('/Siswa', 'Siswa::index', ['filter' => 'role:admin,co_walas']);
$routes->post('/Siswa/get-siswa', 'Siswa::get_siswa', ['as' => 'get.siswa']);
$routes->get('/Siswa/data/(:segment)/(:segment)', 'Siswa::detail/$2', ['filter' => 'role:admin,co_walas']);
$routes->get('/SiswaSma/data/(:segment)/(:segment)', 'Siswa::detailSma/$2', ['filter' => 'role:admin,co_walas']);

$routes->get('/Siswa/generate/(:segment)', 'PrintPdf::generate/$1', ['filter' => 'role:admin,co_walas']);
$routes->get('/Smp/pemeriksaanInduk/', 'PrintPdf::pemeriksaanInduk');
$routes->get('/Smp/pengesahanInduk/', 'PrintPdf::pengesahanInduk');
$routes->get('/Smp/sampulInduk/', 'PrintPdf::sampulInduk');
$routes->get('/Smp/generatePeserta1/(:segment)', 'PrintPdf::generatePeserta1/$1', ['filter' => 'role:admin,co_walas']);
$routes->get('/Smp/generatePeserta2/(:segment)', 'PrintPdf::generatePeserta2/$1', ['filter' => 'role:admin,co_walas']);
$routes->get('/Smp/generatePeserta3/(:segment)', 'PrintPdf::generatePeserta3/$1', ['filter' => 'role:admin,co_walas']);
$routes->get('/Smp/generatePeserta4/(:segment)', 'PrintPdf::generatePeserta4/$1', ['filter' => 'role:admin,co_walas']);
$routes->get('/Smp/generatePeserta5/(:segment)', 'PrintPdf::generatePeserta5/$1', ['filter' => 'role:admin,co_walas']);
$routes->get('/Smp/generatePeserta6/(:segment)', 'PrintPdf::generatePeserta6/$1', ['filter' => 'role:admin,co_walas']);
$routes->get('/Smp/generatePeserta7/(:segment)', 'PrintPdf::generatePeserta7/$1', ['filter' => 'role:admin,co_walas']);
$routes->get('/Smp/generatePeserta8/(:segment)', 'PrintPdf::generatePeserta8/$1', ['filter' => 'role:admin,co_walas']);

$routes->get('/SiswaSma/generate/(:segment)', 'PrintPdfSma::generate/$1', ['filter' => 'role:admin,co_walas']);
// $routes->get('/Sm/pemeriksaanInduk/', 'PrintPdf::pemeriksaanInduk');
// $routes->get('/Sma/pengesahanInduk/', 'PrintPdf::pengesahanInduk');
$routes->get('/Sma/sampulInduk/', 'PrintPdfSma::sampulInduk');
$routes->get('/Sma/generatePeserta1/(:segment)', 'PrintPdfSma::generatePeserta1/$1', ['filter' => 'role:admin,co_walas']);
$routes->get('/Sma/generatePeserta2/(:segment)', 'PrintPdfSma::generatePeserta2/$1', ['filter' => 'role:admin,co_walas']);
$routes->get('/Sma/generatePeserta3/(:segment)', 'PrintPdfSma::generatePeserta3/$1', ['filter' => 'role:admin,co_walas']);
$routes->get('/Sma/generatePeserta4/(:segment)', 'PrintPdfSma::generatePeserta4/$1', ['filter' => 'role:admin,co_walas']);
$routes->get('/Sma/generatePeserta5/(:segment)', 'PrintPdfSma::generatePeserta5/$1', ['filter' => 'role:admin,co_walas']);
$routes->get('/Sma/generatePeserta6/(:segment)', 'PrintPdfSma::generatePeserta6/$1', ['filter' => 'role:admin,co_walas']);
$routes->get('/Sma/generatePeserta7/(:segment)', 'PrintPdfSma::generatePeserta7/$1', ['filter' => 'role:admin,co_walas']);
$routes->get('/Sma/generatePeserta8/(:segment)', 'PrintPdfSma::generatePeserta8/$1', ['filter' => 'role:admin,co_walas']);

// $routes->post('/User/get-status', '_UserStatus\GetUserStatus::get_user_status');
$routes->post('/Admin/get-status', 'Admin::get_user_status', ['filter' => 'role:admin']);
$routes->post('/Admin/get-status?page=(:num)', 'Admin::get_user_status');
$routes->get('/Admin/edit/(:segment)', 'Admin::edit/$1', ['filter' => 'role:admin']);
$routes->get('/Admin/detail/(:segment)', 'Admin::detail/$1', ['filter' => 'role:admin']);
$routes->post('/Admin/update/(:segment)', 'Admin::update/$1', ['filter' => 'role:admin']);
$routes->delete('/Admin/delete/(:num)', 'Admin::delete/$1', ['filter' => 'role:admin']);

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
