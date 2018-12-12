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
        'length',
        'release_date',
        'poster_path'
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
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password',
    // ];

    /**
     * The genres the movie belongs to
     */
    public function genres() {
        return $this->belongsToMany('App\Genre', 'video_genre');
    }


}
