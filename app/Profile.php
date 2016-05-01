<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $table ='profile';

    //user table relation
    public function users(){
        return $this->belongsTo('User','user_id','id');
    }
}
