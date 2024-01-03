<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = [
        'first_name',
        'last_name',
        'email_id',
        'mobile_no',
        'other_city',
        'extra_payment',
        'issue',
        'address',
        'user_id',
        'brand_id',
        'model_id',
        'device_issue_category_id',
        'city',
        'status',
    ];

}
