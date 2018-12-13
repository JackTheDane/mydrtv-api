<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model 
{
  // Turns off timestamps on the table
  public $timestamps = false;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name',
      'image_path'
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
   * The videos that belongs to the Actor
   */
  public function videos()
  {
      return $this->belongsToMany('App\Video', 'video_actor');
  }

}
