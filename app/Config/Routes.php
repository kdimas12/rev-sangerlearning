<?php

namespace Config;

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
$routes->group('', static function ($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('kelas', 'Kelas::index');
    $routes->get('hubungi-kami', 'Kontak::index');
    $routes->post('hubungi-kami', 'Kontak::index');
});

$routes->group('', ['filter' => 'AlreadyLoggedInUser'], static function ($routes) {
    $routes->get('masuk', 'Autentikasi::masuk');
    $routes->post('masuk', 'Autentikasi::masuk');
    $routes->get('daftar', 'Autentikasi::daftar');
    $routes->post('daftar', 'Autentikasi::daftar');
});

$routes->group('', ['filter' => 'AuthCheckUser'], static function ($routes) {
    $routes->get('keluar', 'Autentikasi::keluar');
    $routes->get('akun', 'Akun::index');
    $routes->post('akun', 'Akun::index');
    $routes->get('dashboard', 'Dashboard::index');
    $routes->get('pendaftaran-kelas', 'Kelas::daftar');
    $routes->post('pendaftaran-kelas', 'Kelas::daftar');
    $routes->get('invoice/(:segment)', "Invoice::index/$1");
    $routes->post('invoice/(:segment)', "Invoice::index/$1");
});

$routes->group('admin', ['filter' => 'AlreadyLoggedInAdmin'], static function ($routes) {
    $routes->get('masuk', 'Admin\Autentikasi::masuk');
    $routes->post('masuk', 'Admin\Autentikasi::masuk');
});

$routes->group('admin', ['filter' => 'AuthCheckAdmin'], static function ($routes) {
    $routes->get('/', 'Admin\Home::index');
    $routes->get('keluar', 'Admin\Autentikasi::keluar');
    $routes->group('kategori-kelas', static function ($routes) {
        $routes->get('/', 'Admin\Kategori::index');
        $routes->get('tambah', 'Admin\Kategori::tambah');
        $routes->post('tambah', 'Admin\Kategori::tambah');
        $routes->get('(:segment)/ubah', 'Admin\Kategori::ubah/$1');
        $routes->post('(:segment)/ubah', 'Admin\Kategori::ubah/$1');
        $routes->get('(:segment)/hapus', 'Admin\Kategori::hapus/$1');
    });
    $routes->group('harga-kelas', static function ($routes) {
        $routes->get('/', 'Admin\HargaKelas::index');
        $routes->get('tambah', 'Admin\HargaKelas::tambah');
        $routes->post('tambah', 'Admin\HargaKelas::tambah');
        $routes->get('(:segment)/ubah', 'Admin\HargaKelas::ubah/$1');
        $routes->post('(:segment)/ubah', 'Admin\HargaKelas::ubah/$1');
        $routes->get('(:segment)/hapus', 'Admin\HargaKelas::hapus/$1');
    });
    $routes->group('kelas', static function ($routes) {
        $routes->get('/', 'Admin\Kelas::index');
        $routes->get('tambah', 'Admin\Kelas::tambah');
        $routes->post('tambah', 'Admin\Kelas::tambah');
        $routes->get('(:segment)/ubah', 'Admin\Kelas::ubah/$1');
        $routes->post('(:segment)/ubah', 'Admin\Kelas::ubah/$1');
        $routes->get('(:segment)/hapus', 'Admin\Kelas::hapus/$1');
    });
    $routes->get('siswa', 'Admin\Laporan::siswa');
    $routes->get('pembayaran', 'Admin\Laporan::pembayaran');
    $routes->get('pembayaran/(:segment)/konfirmasi', 'Admin\Laporan::konfirmasi/$1');
});
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
