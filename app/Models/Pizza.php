<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $casts = [   // cast an array to json to save in the database and json to array to display in website.
        'toppings' => 'array'
    ];
    use HasFactory;
}
