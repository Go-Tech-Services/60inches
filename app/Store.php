<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Store;

class Store extends Model
{
    //
    protected $table = 'store_info';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','owner_name','store_name','store_address','email','phone','store_logo','created_by','updated_by',
    ];
    
    // public function get_users(){
    //     return $this->hasMany('App\User', 'id', 'store_id');
    // }

    
}
