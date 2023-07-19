<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';
    protected $primaryKey = 'game_id';
    public $timestamps = false;

    protected $fillable = [
        'game_name',
        'price',
        'description',
        'Developer',
        'date_released',
        'category',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'image_5',
        'free',
    ];

    protected $casts = [
        'price' => 'float',
        'date_released' => 'date',
    ];
}
