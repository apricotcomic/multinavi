<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandmarkCoordinate extends Model
{
    use HasFactory;

    protected $connection = 'location';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

}
