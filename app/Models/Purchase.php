<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Purchase
 * 
 * @property int $purcahse_id
 * @property Carbon $time_placed
 * @property int $user_id
 *
 * @package App\Models
 */

class Purchase extends Model
{
    protected $table = 'purchases';
    protected $primaryKey = 'purchase_id';
    public $timestamps = false;

    protected $casts = [
        'time_placed' => 'datetime',
        'user_id' => 'int',
    ];

    protected $fillable = [
        'time_placed',
        'user_id',
    ];
}
