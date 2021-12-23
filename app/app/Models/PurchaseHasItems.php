<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $purchase_id
 * @property integer $item_id
 * @property int $quantity
 * @property string $created_at
 * @property string $updated_at
 * @property Purchase $purchase
 * @property Item $item
 */
class PurchaseHasItems extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['purchase_id', 'item_id', 'quantity', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function purchase()
    {
        return $this->belongsTo('App\Models\Purchase');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function item()
    {
        return $this->belongsTo('App\Models\Item');
    }
}
