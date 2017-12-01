<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductMaterial extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product_materials';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id', 'material_id', 'quantity'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product()
    {
        return $this->hasOne('App\Product');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function material()
    {
        return $this->hasOne('App\Material');
    }


}
