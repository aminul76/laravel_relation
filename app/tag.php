<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\post;

class tag extends Model
{
    public function post()
    {
        return $this->belongsToMany('App\post');
    }
}
