<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FloorData extends Model
{
    use HasFactory;

    protected $table='floor_data';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

}
