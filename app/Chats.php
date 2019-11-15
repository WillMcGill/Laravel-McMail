<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Chats extends Model
{
    function sender(){
        return $this.BelongsTo('App\User');
    }

    function receiver(){
        return $this.BelongsTo('App\User');
    }
}
