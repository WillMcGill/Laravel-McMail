<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function emails_sender(){
        return $this->hasMany('App\Email', 'sender_id');
    }

    function emails_receiver(){
        return $this->hasMany('App\Email', 'receiver_id');
    }

    function chats_sender(){
        return $this->hasMany('App\Chats', 'sender_id');
    }

    function transactions_sender(){
        return $this->hasMany('App\Transactions', 'sender_id');
    }
}
