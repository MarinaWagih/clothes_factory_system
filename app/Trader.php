<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trader extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'traders';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'phone', 'address', 'instalment', 'type'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materialOrders()
    {
        return $this->hasMany('App\MaterialsOrder');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detailOrders()
    {
        return $this->hasMany('App\DetailsOrder');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productOrders()
    {
        return $this->hasMany('App\ProductsOrder');
    }
}
