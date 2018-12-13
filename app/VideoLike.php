<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoLike extends Model 
{
  
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     * @var user_id string
     * @var video_id string
     * @var like_type string | like || disliked
     * 
     */
    protected $fillable = [
        'user_id',
        'video_id',
        'like_type'
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
    // public function videos() {
    //     return $this->belongsToMany('App\Genre', 'video_genre');
    // }

}
