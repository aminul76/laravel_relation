<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 use App\tag;
class post extends Model
{
    public function tag()
    {
        return $this->belongsToMany('App\tag');
    }

}
