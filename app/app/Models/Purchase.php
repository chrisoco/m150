<?php

namespace App\Models;

use App\Models\PurchaseHasItems;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property float $price
 * @property boolean $payed
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property PurchaseHasItems[] $purchaseHasItems
 */
class Purchase extends Model
{
    use HasFactory;
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'price', 'payed', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchaseHasItems()
    {
        return $this->hasMany('App\Models\PurchaseHasItems');
    }
}
