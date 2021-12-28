<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $fillable = [
        'id',
        'user_id',
        'artical_id',
        'comment',
    ];

    // public function user()
    // {
    //     return $this->hasOne(User::class, 'id', 'user_id');
    // }
}
