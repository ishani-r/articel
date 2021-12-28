<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Subcategory;

class Artical extends Model
{
    use HasFactory;

    protected $table = 'articals';

    protected $fillable = [
        'id',
        'category_id',
        'subcategory_id',
        'status',
    ];

    public function category()  
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function subcategory()
    {
        return $this->hasOne(Subcategory::class, 'id', 'subcategory_id');
    }
    
}
