<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PurchasedGame
 * 
 * @property int $pg_id
 * @property int $purchase_id
 * @property int $game_id
 *
 * @package App\Models
 */

class PurchasedGame extends Model
{
    protected $table = 'purchased_game';
    protected $primaryKey = 'pg_id';
    public $timestamps = false;

    protected $casts = [
        'purchase_id' => 'int',
        'game_id' => 'int',
    ];

    protected $fillable = [
        'purchase_id',
        'game_id',
    ];
}
