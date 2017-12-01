<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'details';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','price'];

    public function orders()
    {
        return $this->hasMany('App\DetailsOrder');
    }


}
