<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $connection = 'mysql_location';

    protected $fillable = [
        'name',
        'translations',
        'iso2',
    ];
}
