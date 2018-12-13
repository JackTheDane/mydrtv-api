<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// Example of a functional route
// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

// -- Search routes
$router->group(['prefix' => 'search'], function () use ($router) {

  // Endpoints needed
  // search/:query
  // videos
  // videos/:id
  // genres

  $router->get('/', function () {
    return;
  });

  // Query only
  $router->get('/{query}', 'SearchController@getByQuery');

});

$router->get('/videos', 'SearchController@getVideos');

$router->get('/videos/{query}', 'SearchController@getVideoById');

$router->get('/genres', 'SearchController@getAllGenres');
