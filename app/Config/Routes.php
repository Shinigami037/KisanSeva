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
$routes->setDefaultMethod('');
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



// routes for user start here

// routes get method start here
$routes->get('/', 'Home::index');
$routes->get('/index', 'Home::index');
$routes->get('/category', 'Category::category');
$routes->get('/single-product', 'Product::single_product');
$routes->get('/login', 'Login::login');
$routes->get('/registration', 'Login::signup');
$routes->get('/checkout', 'Order::checkout');
$routes->get('/tracking', 'Order::tracking');
$routes->get('/contact', 'Contact::contact');
$routes->get('/cart', 'Product::cart');
$routes->get('/confirmation', 'Order::confirmation');
// routes get method ends here
// routes post method start here
// $routes->post('/contact-process','Login::userLogin');
$routes->post('/login', 'Login::userLogin');
$routes->post('/registration', 'Login::userSignup');
// routes post method ends here
// routes for user ends here



// routes for admin start here
$routes->get('/adminlogin', 'Admin::login');
$routes->get('/admin', 'Admin::index');
$routes->get('/addmaincategory', 'AdminCategory::mcategory');
$routes->get('/addsubcategory', 'AdminCategory::scategory');
$routes->get('/product', 'AdminProduct::product');
$routes->get('/profile', 'Admin::profile');
$routes->get('/adminlogout', 'AdminLogout::logout');
$routes->get('/inventory', 'AdminProduct::inventory');

// routes post method start here
$routes->post('/addsub', 'AdminCategory::subCategory');
$routes->post('/addmain', 'AdminCategory::mainCategory');
$routes->post('/addproduct', 'AdminProduct::addproduct');
$routes->post('/adminlogin', 'Admin::start');
// routes post method ends here
// routes for admin end here



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
