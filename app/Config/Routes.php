<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\News;

$routes->group('news', function ($routes) {
    $routes->get('/', [News::class, 'index']);
    $routes->get('view/(:segment)', [News::class, 'view/$1']);
    $routes->get('create', [News::class, 'create']);
    $routes->post('store', [News::class, 'store']);
    $routes->get('edit/(:segment)', [News::class, 'edit/$1']);
    $routes->post('update', [News::class, 'update']);       
    $routes->get('delete/(:segment)', [News::class, 'delete/$1']);
});
