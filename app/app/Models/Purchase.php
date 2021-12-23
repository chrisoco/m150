<?php

namespace App\Models;

use App\PurchaseHasItem;
use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property float $price
 * @property boolean $payed
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property PurchaseHasItem[] $purchaseHasItems
 */
class Purchase extends Model
{
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
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchaseHasItems()
    {
        return $this->hasMany('App\PurchaseHasItem');
    }
}
