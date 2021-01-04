<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KodePromo extends Model
{
    protected $table = 'kodepromos';
    public function Promo()
    {
        return $this->belongsTo('App\Promo');
    }
}
