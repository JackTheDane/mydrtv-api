<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class SearchController extends Controller {


// ---- Query methods ---- //

  /**
   * Get the results, based on the query string passed
   *
   * @param  string  $query
   * @return string
   */
  public function getByQuery($query) {
    return $query;
  }

  // ---- Genre methods ---- //

  /**
   * Get results, based on genre
   *
   * @param  string  $genre
   * 
   * @return string
   */
  public function getByGenre($genre) {
    return "Genre: $genre";
  }

  // ---- Year methods ---- //

  /**
   * Get results, based on year
   *
   * @param  int  $year 
   * 
   * @return string
   */
  public function getByYear($year) {
    return "Year: $year";
  }

  // ---- Combined query, year and genre methods ---- //

  /**
   * Get results, based on year and genre
   *
   * @param  string  $genre
   * @param  int  $year 
   * 
   * @return string
   */
  public function getByGenreYear($genre, $year) {
    return "Genre: $genre. Year: $year";
  }

   /**
   * Get results, based on query and year
   *
   * @param  string  $query
   * @param  int  $year
   * 
   * @return string
   */
  public function getByQueryYear($query, $year) {
    return "Query: $query. Year: $year";
  }

  /**
   * Get results, based on query and genre
   *
   * @param  string  $query
   * @param  string  $genre
   * 
   * @return string
   */
  public function getByQueryGenre($query, $genre) {
    return "Query: $query. Genre: $genre";
  }

  /**
   * Get results, based on query, genre and year
   *
   * @param  string  $query
   * @param  string  $genre
   * @param  int  $year
   * 
   * @return string
   */
  public function getByQueryGenreYear($query, $genre, $year) {
    return "Query: $query. Genre: $genre. Year: $year";
  }

}