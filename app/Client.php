<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;

class Client extends Model
{
    //
    protected $table = 'client_info';

    protected $fillable = [
        'id','client_name','phone','altern_phone','email','birth_date','client_address','client_city','pin_code','created_by','updated_by',
    ];
    //protected $dates = ['birth_date'];
}