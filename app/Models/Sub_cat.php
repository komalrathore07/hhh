<?php

namespace  App\Models;
use App\Models\Pro_cat;
use App\Models\Sub_cat;
use Illuminate\Database\Eloquent\Model;

class Sub_cat extends Model
{
    public $timestamps=false;
    protected $table="sub_cat";
    protected $fillable=[
       
        'subcat_name',
        'subcat_slug',
        'category_id'
      ];
      public function pro_cat()
{
  return $this->belongsTo(Pro_cat::class,'category_id','id');

}

}

