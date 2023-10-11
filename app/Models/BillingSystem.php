<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class BillingSystem extends Model
{
    protected $fillable = [
        'billing_first_name',
        'billing_last_name',
        'billing_company',
        'billing_address_1',
        'billing_address_2',
        'billing_city',
        'billing_postcode',
        'billing_email',
        'billing_phone',
        'products',
        'subtotal',
        'tax',
        'total'
    ];
}
