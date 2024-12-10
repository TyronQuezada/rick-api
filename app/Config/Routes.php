<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/characters/page/(:num)', 'CharacterController::index/$1');
$routes->get('/charactersEpisodes', 'EpisodesController::epidsodes');
$routes->get('/seasons/page/(:num)', 'EpisodesController::index/$1');
$routes->get('/seasons', 'EpisodesController::Home');
$routes->get('/404', 'errorController::index');
