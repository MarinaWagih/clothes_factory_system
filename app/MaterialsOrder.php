<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialsOrder extends Model
{
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'material_Orders';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['material_id', 'trader_id', 'quantity',
                           'total_price', 'payed', 'date'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function material()
    {
        return $this->belongsTo('App\Material');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trader()
    {
        return $this->belongsTo('App\Trader');
    }

}
