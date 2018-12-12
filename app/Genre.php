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
   * The videos that belongs to the genre
   */
  public function videos()
  {
      return $this->belongsToMany('App\Video', 'video_genre');
  }

}
