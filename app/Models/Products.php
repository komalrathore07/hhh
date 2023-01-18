<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table='products';
    protected $fillable=[
        'priority',
        'name',
        'description',
        'rating',
        'subcategory_id',
        'price',
        'discount',
        'url',
        'image1',
        'image2',
        'image3',
        'image4',
        'title',
        'keywords',
        'meta_description',
        'status'
        ];
    public function sub_cat()
    {
      return $this->belongsTo(Sub_cat::class,'subcategory_id','id');
    
    }
}
