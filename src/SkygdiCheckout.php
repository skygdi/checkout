<?php

namespace Skygdi\Checkout;

use Illuminate\Database\Eloquent\Model;

class SkygdiCheckout extends Model
{
    protected $table = 'skygdi_checkouts';

    protected $fillable = [
        'invoice_id', 'paid'
    ];
}
