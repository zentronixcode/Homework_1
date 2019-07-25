<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ec_cat extends Model
{
    protected $fillable=['category_name'];

    public function Ec_item() {
        return $this->belongsTo('App\Ec_item','cat_id','id');
    }
}
