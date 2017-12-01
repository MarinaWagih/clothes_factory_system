<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsOrder extends Model
{
    //product_orders
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product_orders';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['trader_id', 'total_Price', 'date', 'discount'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trader()
    {
        return $this->belongsTo('App\Trader');
    }
    public function items()
    {
        return $this->hasMany('App\ProductOrderItem');
    }

}
