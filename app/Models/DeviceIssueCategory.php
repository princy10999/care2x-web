<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceIssueCategory extends Model
{
    use HasFactory;
    protected $table = 'device_issue_category';
    protected $fillable = [
        'name',
        'brand_id ',
        'model_id ',
    ];

}
