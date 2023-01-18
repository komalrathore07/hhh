<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;

class Pro_cat extends Model
{
    public $timestamps=false;
    protected $table="pro_cat";
    protected $fillable=[
       
        'cat_name',
        'cat_slug'
      ];
}
