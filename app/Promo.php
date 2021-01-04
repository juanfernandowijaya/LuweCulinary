<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    //
    public function KodePromos()
    {
        return $this->hasMany('App\KodePromo');
    }
}
