<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model 
{
  // Turns off timestamps on the table
  public $timestamps = false;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name'
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
   * The videos that belongs to the genre
   */
  public function videos()
  {
      return $this->belongsToMany('App\Video', 'video_genre');
  }

}
