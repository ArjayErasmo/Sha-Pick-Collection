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

//LOGIN REGISTRATION
$routes->get('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->post('/save', 'Auth::save');
$routes->post('/check', 'Auth::check');
$routes->get('/check', 'Auth::check');
$routes->get('/logout', 'Auth::logout');
$routes->get('/dashboard', 'Dashboard::dashboard');
$routes->group('',['filter'=>'AuthCheck'], function($routes){
    $routes->get('/dashboard', 'Dashboard::dashboard');
    $routes->get('/dashboard/profile', 'Dashboard::profile');
});
$routes->group('',['filter'=>'AlreadyLoggedin'], function($routes){
    $routes->get('/login', 'Auth::login');
    $routes->get('/register', 'Auth::register');
});


//HOMEPAGE MENU
$routes->get('/mainpage', 'Home::mainpage');
$routes->get('/aboutUs', 'Home::aboutUs');
$routes->get('/privacypolicy', 'Home::privacypolicy');
$routes->get('/termscondition', 'Home::termscondition');
$routes->get('/paymentpolicy', 'Home::paymentpolicy');
$routes->get('/shippingpolicy', 'Home::shippingpolicy');
$routes->get('/returnpolicy', 'Home::returnpolicy');
$routes->get('/log', 'Home::log');
$routes->get('/productlist', 'Home::productlist');
$routes->get('/productdetail', 'Home::productdetail');
$routes->get('/cart', 'Home::cart');
$routes->get('/checkout', 'Home::checkout');
$routes->get('/myaccount', 'Home::myaccount');
$routes->get('/contact', 'Home::contact');
$routes->get('/wishlist', 'Home::wishlist');


//ADMIN LTE
$routes->get('/admin', 'AdminController::index');
$routes->get('/admin/products', 'AdminController::products');
$routes->get('/admin/addproduct', 'AdminController::addproduct');
$routes->post('/admin/saveproduct', 'AdminController::saveproduct');
$routes->get('/admin/editproduct/(:num)', 'AdminController::editproduct/$1');


//Email sending
$routes->get('/sendemail', 'EmailController::index');
$routes->post('/send', 'EmailController::sendEmail');
$routes->post('/contact', 'EmailController::sendEmail');

//Verification
$routes->match(['get', 'post'], '/mail', 'AccountController::mail');


//Register
$routes->match(['get', 'post'], '/registers', 'AccountController::registers');
$routes->match(['get', 'post'], '/store', 'AccountController::store');


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
