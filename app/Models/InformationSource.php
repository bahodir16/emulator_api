<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationSource extends Model
{
    use HasFactory;

    protected $connection = 'mysql_performer';

    protected $fillable = [
        'id',
        'name',
        'is_active',
    ];
}
