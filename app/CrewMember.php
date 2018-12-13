<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrewMember extends Model {

  /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'crewmembers';
  
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
   * The videos the crew member has been part of
   */
  public function videos() {
    return $this->belongsToMany('App\Video', 'video_crew', 'crewmember_id', 'video_id');
  }

  /**
   * The role of the crew member
   */
  public function crewRole() {
    return $this->belongsToMany('App\CrewRole', 'video_crew', 'crewmember_id', 'crewrole_id');
  }

}
