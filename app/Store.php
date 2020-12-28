<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Store;

class Store extends Model
{
    //
    protected $table = 'store_owner_info';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name','email','password','store_name','phone','store_address','filename',
       
    ];

    
}
