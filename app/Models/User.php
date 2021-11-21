<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable 
{
    use Notifiable;

    protected $guarded = ['id'];
    protected $hidden = ['password', 'id'];
    
    # BOOT 
    public static function boot()
    {
        parent::boot();
        self::creating(function ($user) {
            # Generate referrence UID
            $user->uid = generateReferenceKey('u_');
        });
    }


    /*************************************************
     
                    MODEL RELATIONSHIP 

    **************************************************/
     
    # Function to access merchant 
    public function merchant()
    {
        return $this->hasOne('App\Models\Merchant','id','merchant_id');
    }


}
