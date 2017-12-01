<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrderItem extends Model
{
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product_order_details';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['product_order_id', 'product_id', 'quantity', 'cost'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productOrders()
    {
        return $this->belongsTo('App\ProductsOrder');
    }
    public function product()
    {
        /** @var TYPE_NAME $this */
        return $this->belongsTo('App\Product');
    }
}
