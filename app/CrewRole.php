<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrewRole extends Model {

  /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'crewroles';
  
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
   * The videos the crew member has been part of
   */
  public function crewMembers() {
    return $this->belongsToMany('App\Video', 'video_crew', 'crewrole_id', 'crewmember_id');    
  }

}
