<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $table = 'subcategories';
    protected $fillable = [
         'id',
         'category_id',
         'name',
     ];

    public function category()
    {
        // return $this->hasOne(InterestCategory::class, 'id', 'interest_category_id')->select('id', 'interest_category_name');
        return $this->hasOne(Category::class,'id','category_id');
    }
}




            