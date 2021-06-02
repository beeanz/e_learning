<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'user_id', 'title', 'username', 'card_date', 'card_no', 'verify', 'card_token', 'default', 'recurrent'
    ];
}
