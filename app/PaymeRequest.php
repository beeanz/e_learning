<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymeRequest extends Model
{
    protected $fillable = [
        'request_data', 'response_data', 'failed'
    ];
}
