<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandmarkData extends Model
{
    use HasFactory;

    protected $table = 'landmark_data';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
}
