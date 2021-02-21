<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FloorShopBind extends Model
{
    use HasFactory;

    protected $table='floor_shop_binds';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
}
