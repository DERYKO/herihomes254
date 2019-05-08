<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transcation extends Model
{
    //
    protected $fillable=[
        'transaction_code','amount','transaction_date','phone_number','CheckoutRequestID','Balance'
    ];
}
