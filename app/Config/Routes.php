<?php


$routes->get('accueil', 'Acceuil::index');

$routes->group('admin', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Admin::index');
    $routes->post('login', 'Admin::login');
});

$routes->group('categories', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Categories::index');
    $routes->get('create', 'Categories::create');
    $routes->post('store', 'Categories::store');
    $routes->get('edit/(:num)', 'Categories::edit/$1');
    $routes->post('update/(:num)', 'Categories::update/$1');
    $routes->get('delete/(:num)', 'Categories::delete/$1');
    $routes->get('search', 'Categories::search'); 
});
$routes->group('articles', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Articles::index');      // Display a list of articles
    $routes->get('create', 'Articles::create'); // Display the create form
    $routes->post('store', 'Articles::store');  // Handle form submission for creating an article
    $routes->get('edit/(:num)', 'Articles::edit/$1'); // Display the edit form for a specific article
    $routes->post('update/(:num)', 'Articles::update/$1'); // Handle form submission for updating an article
    $routes->get('delete/(:num)', 'Articles::delete/$1'); // Handle deletion of a specific article
    // app/Config/Routes.php

$routes->get('articles/search', 'Articles::search');
// app/Config/Routes.php



$routes->group('contacts', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'Contacts::index');
    $routes->get('create', 'Contacts::create');
    $routes->post('store', 'Contacts::store');
    $routes->get('edit/(:num)', 'Contacts::edit/$1');
    $routes->post('update', 'Contacts::update');
    $routes->get('delete/(:num)', 'Contacts::delete/$1');
});








});



