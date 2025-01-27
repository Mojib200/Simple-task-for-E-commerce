<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    function relation_to_category(){

        return $this->belongsTo(Category::class,'category_id');
    }
    function relation_to_sub_category(){

        return $this->belongsTo(Subcategory::class,'subcategory_id');
    }
}
