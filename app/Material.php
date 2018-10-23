<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //materials

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'materials';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'quantity', 'price'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany('App\MaterialsOrder');
    }
    public function productMaterials()
    {
        return $this->hasMany('App\ProductMaterial');
    }

}
