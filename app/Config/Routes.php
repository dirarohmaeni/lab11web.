<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/artikel', 'Artikel::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
$routes->get('/artikel/(:any)', 'Artikel::view/$1');
$routes->get('/page/tos', 'Page::tos');
$routes->group('admin', function($routes) {
$routes->get('artikel', 'Artikel::admin_index');});
$routes->get('/admin/artikel/add', 'Artikel::add');
$routes->post('/admin/artikel/add', 'Artikel::add');
$routes->get('/admin/artikel/edit/(:num)', 'Artikel::edit/$1');
$routes->post('/admin/artikel/edit/(:num)', 'Artikel::edit/$1');
$routes->get('/admin/artikel/delete/(:num)', 'Artikel::delete/$1');
$routes->get('/user/login', 'User::login');
$routes->post('/user/login', 'User::login');
$routes->get('/user/logout', 'User::logout');
$routes->get('/admin/artikel', 'Artikel::admin_index', ['filter' => 'auth']);
$routes->post('/login', 'User::apiLogin');
$routes->resource('post');
$routes->setAutoRoute(false);
$routes->get('/user/logout', 'User::logout');
$routes->get('/ajax', 'AjaxController::index');
$routes->get('/ajax/getData', 'AjaxController::getData');
$routes->delete('/ajax/delete/(:num)', 'AjaxController::delete/$1');
$routes->post('/login', 'User::apiLogin');

/*
|--------------------------------------------------------------------------
| REST API Artikel
|--------------------------------------------------------------------------
*/

// GET tetap bebas untuk menampilkan data
$routes->resource('post');

// POST, PUT, DELETE diamankan dengan Token
$routes->post('post', 'Post::create', ['filter' => 'apiauth']);

$routes->put('post/(:segment)', 'Post::update/$1', ['filter' => 'apiauth']);

$routes->delete('post/(:segment)', 'Post::delete/$1', ['filter' => 'apiauth']);

$routes->setAutoRoute(false);