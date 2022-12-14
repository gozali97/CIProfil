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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/',  function () {
//     return view('front/index');
// });
$routes->get('/', 'Home::index');


// $routes->get('/logins', function () {
//     return view('front/auth/login');
// });


// auth
$routes->get('/login', 'Login::index');
$routes->get('/register', function () {
    return view('front/auth/register');
});


// $routes->group('/login', ['filter' => 'redirectIfAuthenticated'], function($routes){
//     $routes->get('/','Login::index', ['as' => 'login']);
//     $routes->post('/auth', 'Login::auth');
// });

$routes->get('/login', 'Login::index', ['filter' => 'redirectIfAuthenticated'], ['as' => 'login']);
$routes->post('/login/auth', 'Login::auth',  ['filter' => 'redirectIfAuthenticated']);
$routes->get('/logout', 'Login::logout', ['as' => 'logout']);


//dashboard admin
$routes->group('/dashboard', ['as' => 'dashboard'],  function ($routes) {
    $routes->get('/', 'Profile::index', ['filter' => 'auth']);
});

// $routes->get('/dashboard', 'Profile::index', ['filter' => 'auth']);

$routes->group('/dashboard/product', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'Product::index');
});

$routes->get('/admin/product/create', 'Product::create', ['filter' => 'auth']);
$routes->post('/admin/product/store', 'Product::store', ['filter' => 'auth']);
$routes->get('/admin/product/edit/(:num)', 'Product::edit/$1', ['filter' => 'auth']);
$routes->post('/admin/product/updateData/(:num)', 'Product::updateData/$1', ['filter' => 'auth']);
$routes->get('/admin/product/hapus/(:num)', 'Product::hapus/$1', ['filter' => 'auth']);



//Frontend

$routes->get('/product', 'FrontProduct::index');
$routes->get('/home/cek', 'Home::cek');
$routes->post('/home/add', 'Home::add');
$routes->get('/home/clear', 'Home::clear');
$routes->get('/profil', 'FrontProfil::index');
$routes->get('/profil/detail/(:num)', 'FrontProfil::detail/$1');
$routes->get('/produk/detail/(:num)', 'FrontProduct::detail/$1');


// $routes->group('dashboard', static function ($routes) {
//     $routes->group('product', static function ($routes) {
//         $routes->get('create', 'dashboard\Product::create');
//     });
// });

// $routes->get('/dashboard', function(){
//     echo "selamat datang di dashboard" ."<br>" .session('email'). "</br> <a href= '" . route_to('logout') ."'> Logout</a>";
// });
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
