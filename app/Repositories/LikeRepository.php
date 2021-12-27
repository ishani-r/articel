<?php

namespace App\Repositories;

use App\Contracts\LikeContract;
use App\Models\Like;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LikeRepository implements LikeContract
{
    public function likeStatus(array $array)
    {
        $id = $array['id'];
        $likes = Like::where('article_id', $id)->where('user_id',Auth::user()->id)->first();
        
        if (empty($likes)) {
            $like = new Like();
            $like->user_id = Auth::user()->id;
            $like->article_id = $id;
            $like->status = "Like"; 
            $like->save();
            return $like;
        } elseif ($likes->status == "Like") {
            $likes->status = "DisLike";
        } elseif ($likes->status == "DisLike") {
            $likes->status = "Like";
        }
        $likes->save();
        return $likes;
    }

}
