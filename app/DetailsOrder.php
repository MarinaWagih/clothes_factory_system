<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailsOrder extends Model
{
    //
    //'detail_id', 'trader_id', 'product_id', 'quantity', 'delivered', 'total_cost'
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'detail_orders';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['detail_id', 'trader_id', 'product_id',
                           'quantity','price','date',
                           'delivered', 'total_cost'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function detail()
    {
        return $this->belongsTo('App\Detail');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trader()
    {
        return $this->belongsTo('App\Trader');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
