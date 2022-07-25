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
$routes->get('/confirmation', 'Order::confirmation');

$routes->get('/contact', 'Contact::contact');

$routes->get('/userlogout', 'UserLogout::logout');

$routes->get('/cart', 'Cart::cart');
$routes->get('/buy/(:num)', 'Cart::buy/$1');

// routes get method ends here
// routes post method start here
// $routes->post('/contact-process','Login::userLogin');
$routes->post('/login', 'Login::userLogin');
$routes->post('/registration', 'Login::userSignup');
// routes post method ends here
// routes for user ends here



// routes for admin start here
//Get routes for admin start here
$routes->get('/adminlogin', 'Admin::login');
$routes->get('/admin', 'Admin::index');
$routes->get('/profile', 'Admin::profile');
//Get routes for admin ends here
//Post routes for admin start here
$routes->post('/adminlogin', 'Admin::start');
//Post routes for admin end here
//Get routes for AdminCategory start here
$routes->get('/addmaincategory', 'AdminCategory::mcategory');
$routes->get('/addsubcategory', 'AdminCategory::scategory');
$routes->get('/displaymain', 'AdminCategory::displaymain');
$routes->get('/displaysub', 'AdminCategory::displaysub');
//Get routes for AdminCategory end here
//Post routes for AdminCategory start here
$routes->post('/addsub', 'AdminCategory::subCategory');
$routes->post('/addmain', 'AdminCategory::mainCategory');
//Post routes for AdminCategory end here
//Get routes for AdminLogout start here
$routes->get('/adminlogout', 'AdminLogout::logout');
//Get routes for AdminLogout end here
//Post routes for AdminLogout start here
//Post routes for AdminLogout end here
//Get routes for AdminProduct start here
$routes->get('/inventory', 'AdminProduct::inventory');
$routes->get('/product', 'AdminProduct::product');
$routes->get('/edit/(:num)', 'AdminProduct::edit/$1');
//Get routes for AdminProduct end here
//Post routes for AdminProduct start here
$routes->post('/getSub', 'AdminProduct::getSub');
$routes->post('/action', 'AdminProduct::action');
$routes->post('/addproduct', 'AdminProduct::addproduct');
//Post routes for AdminProduct end here
//Put routes for AdminProduct start here
$routes->put('/update/(:num)', 'AdminProduct::update/$1');
//Put routes for AdminProduct end here
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
