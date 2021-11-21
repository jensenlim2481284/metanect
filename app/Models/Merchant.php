<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model 
{

    protected $table = 'merchant';
    protected $guarded = ['id'];
    protected $hidden = ['id'];


    # BOOT  
    public static function boot()
    {
        parent::boot();
        self::creating(function ($client) {
            $client->uid = generateReferenceKey('m_');            
        });

    }



    
    /*************************************************
     
                    MODEL RELATION 

    **************************************************/
         


    # Function to access merchant owner  
    public function owner()
    {  
        return User::where('merchant_id', $this->id)->where('role_id', getConfig('role.merchant_admin'))->first();
    }

    
}
