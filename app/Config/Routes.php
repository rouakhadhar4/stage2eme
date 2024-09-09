<?php
$routes->get('accueil', 'Acceuil::index');
$routes->get('page', 'Page::index');
$routes->get('pages', 'Pages::index');
$routes->get('pages', 'Pages::index');

$routes->get('/articles/search_shop', 'Articles::search_shop');

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
   
});
$routes->get('categories/search', 'Categories::search');


$routes->get('articles', 'Articles::index');
$routes->get('articles/create', 'Articles::create');
$routes->post('articles/store', 'Articles::store');
$routes->get('articles/edit/(:num)', 'Articles::edit/$1');
$routes->post('articles/update/(:num)', 'Articles::update/$1');
$routes->get('articles/delete/(:num)', 'Articles::delete/$1');
$routes->get('articles/search', 'Articles::search');
$routes->get('articles/search_article', 'Articles::search_article');

$routes->get('articles/category-one', 'Articles::showCategoryOneArticles');


$routes->get('articles/luminaires', 'Articles::showCategoryTwoArticles'); 

$routes->get('articles/decor', 'Articles::showCategoryFourArticles');







$routes->group('contacts', function ($routes) {
    
    $routes->get('/', 'Contacts::index');

   
    $routes->get('create', 'Contacts::create');

   
    $routes->post('store', 'Contacts::store');

    
    $routes->get('edit/(:num)', 'Contacts::edit/$1');

 
    $routes->post('update', 'Contacts::update');

    $routes->get('delete/(:num)', 'Contacts::delete/$1');
});








$routes->get('articles/search', 'Articles::search');
$routes->get('clients', 'Clients::index');

$routes->get('clients/login', 'Clients::login');
$routes->post('clients/login', 'Clients::processLogin');
$routes->get('clients/register', 'Clients::register');
$routes->post('clients/register', 'Clients::processRegister');


$routes->get('articles/cards', 'Articles::showArticleCards');

$routes->get('/meuble-articles', 'Articles::showMeubleArticles');
$routes->get('commande/order/(:num)', 'CommandeController::order/$1');

$routes->post('commande/processOrder', 'CommandeController::processOrder');


$routes->get('commande/liste', 'CommandeController::listOrders');

$routes->get('commande/details', 'CommandeController::showOrderDetails');
$routes->post('commande/deleteOrder', 'CommandeController::deleteOrder');


$routes->delete('commande/delete/(:num)', 'CommandeController::delete/$1');
$routes->get('articles/search', 'Articles::search_article');





















