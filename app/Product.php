<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'quantity', 'cost_price', 'selling_price'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detailsOrder()
   {
       return $this->hasMany('App\DetailsOrder');
   }
    public function orders()
    {
        return $this->hasMany('App\ProductOrderItem');
    }
}
