<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'home::index');

$routes->group('buku', ['filter' => 'authenticate'], function($routes) {
    $routes->get('/', 'BukuController::index');
    $routes->get('create', 'BukuController::create');
    $routes->post('store', 'BukuController::store');
    $routes->get('edit/(:num)', 'BukuController::edit/$1');
    $routes->put('update/(:num)', 'BukuController::update/$1');
    $routes->delete('destroy/(:num)', 'BukuController::destroy/$1');
});

$routes->group('register', function($routes){
    $routes->get('/', 'RegisterController::index');
    $routes->post('/', 'RegisterController::store');
});

$routes->group('login', ['filter' => 'redirectIfAuthenticated'], function ($routes) {
    $routes->get('/', 'LoginController::index');
    $routes->post('/', 'LoginController::login');
});

$routes->group('logout', function ($routes) {
    $routes->get('/', 'LogoutController::index');
});

