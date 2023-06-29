<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'property_name',
        'user_name',
        'user_email',
        'property_id',
        'isInspected',
        'isRequested',
    'propertyType'
    ];
}
