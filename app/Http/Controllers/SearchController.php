<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Video;
use App\Genre;

class SearchController extends Controller {

  // TODO: Tilføj validering for data, for at undgår syntax errors


// ---- Query methods ---- //

  /**
   * Get the results, based on the query string passed
   *
   * @param  string  $query
   * @return string
   */
  public function getByQuery(Request $request, $query) {
    $decodedQuery = trim(urldecode($query));

    $videos = $this->generateBaseQuery($request);

    return $videos->where('title', 'like', "%$decodedQuery%")->get();
  }


  /**
   * Get the first videos, based on the parameters
   *
   * @return string
   */
  public function getVideos(Request $request) {
    $videos = $this->generateBaseQuery($request);

    return $videos->get();
  }


  public function getVideoById(Request $request, $videoId) {
    $video = Video::with('actors')
      ->with('genres')
      ->with('crewMembers.crewRole');

    return $video->find($videoId);
  }

  // Checks the request and generates a base query from it
  private function generateBaseQuery(Request $request) {
    // Check if a limit was set, if not
    $limit = !empty($request->get('limit'))
    ? $request->get('limit')
    : 20;

    // If genre param was set, get videos via genre instead
    $videos = empty($request->get('genre'))
      ? (Video::take($limit))
      : (Genre::find( $request->get('genre') )
        ->videos()
        ->take($limit));
      

    $videos = $videos->with('genres');

    if ( !empty($request->get('year')) ) {
      $year = $request->get('year');

      $videos = $videos->where('release_date', 'like', "$year%");
    }

    if ( !empty($request->get('offset')) ) {
      $offset = $request->get('offset');

      $videos = $videos->skip($offset);
    }

    return $videos;
  }

  // ---- Get all genres ---- //
  /**
   * Get results, based on query and year
   * 
   * @return array
   */
  public function getAllGenres() {
    return Genre::all();
  }

}