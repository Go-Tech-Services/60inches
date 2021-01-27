<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Measurements extends Model
{
    //
    protected $table = 'measurements';

    protected $fillable = [
        'id','client_id','neck','shoulder','upper_bust','bust','cup','under_bust','upper_waist','hips','knee','ankle','thigh_round','calf_round','dark_point','fork','shoe_size','isprimary_flag',
    ];
}
