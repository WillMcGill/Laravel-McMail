<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    function sender(){
        return $this->belongsTo('App\User');
    }
}
