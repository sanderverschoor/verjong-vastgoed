<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
 'building_name',
    'street_name',
    'house_number',
        'house_number_addition',
    'city',
    'postal_code',
    'country',
    'description',
        'rent',
        'rooms',
        'floors',
        'pets_allowed',
        'smoking_allowed',
        'garden',
        'image',
        'balcony',
        'province',
        'furnished',


    ];

}
