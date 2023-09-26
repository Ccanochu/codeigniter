<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\News;
use App\Controllers\Pages;

$routes->get('news', 'News::index');
$routes->get('news/create', 'News::create');
$routes->post('news/store', 'News::store');
$routes->get('news/edit/(:num)', 'News::edit/$1');
$routes->post('news/update/(:num)', 'News::update/$1');
$routes->get('news/delete/(:num)', 'News::delete/$1');

$routes->get('pages', [Pages::class, 'index']);

$routes->get('(:segment)', [Pages::class, 'view']);