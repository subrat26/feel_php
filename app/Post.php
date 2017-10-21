<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
        public function comments()
        {
            return $this->hasMany('App\Comment');
        }

        public function users(){
            return $this->belongsTo('App\User','post_user_id');
        }
}
