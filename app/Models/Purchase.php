<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Purchase extends Model
{
    protected $table = 'purchases';
    protected $primaryKey = 'purchase_id';
    public $timestamps = false;

    protected $casts = [
        'time_placed' => 'datetime',
        'user_id' => 'int',
        'game_id' => 'int',
    ];

    protected $fillable = [
        'time_placed',
        'user_id',
        'game_id',
    ];
}