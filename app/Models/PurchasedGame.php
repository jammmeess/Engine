<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
