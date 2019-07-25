<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ec_item extends Model
{
    protected $fillable=['product_name','amount','price','photo','cat_id'];

    public function Ec_cat(){
        return $this->hasMany('App\Ec_cat','id','cat_id');
    }
}

