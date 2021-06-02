<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentDescription extends Model
{

    protected $fillable = [
        'payment_method_id', 'user_id', 'course_id', 'amount', 'auto_payment', 'payed_at'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course', 'course_id');
    }

    public function invoices()
    {
        return $this->hasMany('App\Invoice');
    }
}
