<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';

    protected $guard = 'web';

    protected $hidden = [
        'password'
    ];

    public function masterUser()
    {
    
        return $this->belongsTo(MasterUser::class);
    
    }


    public function setPasswordAttribute($password)
    {

        $this->attributes['password'] = Hash::make($password);
        
    }

}
