<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model 
{
  
  public $timestamps = false;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'title', 
      'description',
      'release_date',
      'poster_path',
      'backdrop_path',
      'runtime'
  ];

  /**
   * The attributes that are hidden from being outputted with the JSON response.
   *
   * @var array
   */
  protected $hidden = [
    'pivot'
  ];

  /**
   * The genres the movie belongs to
   */
  public function genres() {
      return $this->belongsToMany('App\Genre', 'video_genre');
  }

  /**
   * The actors that star in the movie
   */
  public function actors() {
    return $this->belongsToMany('App\Actor', 'video_actor');
  }

  /**
   * The crew members associated with the movie
   */
  public function crewMembers() {
    return $this->belongsToMany('App\CrewMember', 'video_crew', 'video_id', 'crewmember_id');
  }

}
