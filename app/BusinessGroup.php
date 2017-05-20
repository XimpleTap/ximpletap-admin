<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessGroup extends Model
{
    protected $table = 'businesses_groups';

    public function business(){
        return $this->hasMany('App\Business');
    }
}
