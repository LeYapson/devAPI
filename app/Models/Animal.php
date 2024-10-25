<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Animal extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'color', 'birthday', 'deathday'];


    // This is the same as the factory definition
    protected $casts = [
        'birthday' => 'date',
        'deathday' => 'date',
    ];
}
