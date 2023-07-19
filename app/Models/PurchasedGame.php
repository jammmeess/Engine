<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchasedGame extends Model
{
    protected $table = 'purchased_game';
    protected $primaryKey = 'pg_id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = ['purchase_id', 'game_id'];

    public function purchase()
    {
        return $this->belongsTo(Purchase::class, 'purchase_id');
    }

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id');
    }
}
