<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'payment_description_id', 'card_id', 'invoice_data', 'pay_data', 'invoice_status', 'payment_status'
    ];

//    public function subscription()
//    {
//        return $this->hasOne('App\Models\Subscription', 'invoice_id');
//    }

    public function paymentDescription()
    {
        return $this->belongsTo('App\PaymentDescription');
    }
}
