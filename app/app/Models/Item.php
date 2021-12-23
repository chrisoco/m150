<?php

namespace App\Models;

use App\PurchaseHasItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property int $quantity_available
 * @property float $price
 * @property string $img
 * @property string $created_at
 * @property string $updated_at
 * @property PurchaseHasItem[] $purchaseHasItems
 */
class Item extends Model
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
    protected $fillable = ['name', 'quantity_available', 'price', 'img', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchaseHasItems()
    {
        return $this->hasMany('App\Models\PurchaseHasItem');
    }
}
