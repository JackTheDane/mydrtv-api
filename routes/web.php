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
  // Search query
  // query/year
  // query/genre
  // query/genre/year

  $router->get('/', function () {
    return;
  });

  // Query only
  $router->get('/{query}', 'SearchController@getByQuery');

  // Query and year
  $router->get('/{query}/year/{year}', 'SearchController@getByQueryYear');

  // Query and genre
  $router->get('/{query}/genre/{genre}', 'SearchController@getByQueryGenre');

  // All
  $router->get('/{query}/genre/{genre}/year/{year}', 'SearchController@getByQueryGenreYear');
  $router->get('/{query}/year/{year}/genre/{genre}', 'SearchController@getByQueryGenreYear');

});

// -- Year routes
$router->group(['prefix' => 'year'], function () use ($router) {

  $router->get('/', function () {
    return;
  });

  // Year only
  $router->get('/{year}', 'SearchController@getByYear');

  // Year and genre
  $router->get('/{year}/genre/{genre}', 'SearchController@getByGenreYear');

});

// -- Genre routes
$router->group(['prefix' => 'genre'], function () use ($router) {

  $router->get('/', function () {
    return;
  });

  // Genre only
  $router->get('/{genre}', 'SearchController@getByGenre');

  // Genre and year
  $router->get('/{genre}/year/{year}', 'SearchController@getByGenreYear');

});