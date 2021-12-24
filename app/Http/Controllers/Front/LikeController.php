<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function likeStatus(Request $request)
    {
        $id = $request['id'];
        // dd(Auth::Guard('web')->user()->id,$id);
        $like = Like::where('article_id', $id)->where('user_id', Auth::Guard('web')->user()->id)->where('id', $id)->first();
        // dd($like);
        // $a = Like::where('id',$id)->where('user_id',Auth::Guard('web')->user()->id)->first();
        // dd($article);

        // $like = Like::find($id);
        // $likes = Like::where('user_id',$id)->where('user_id',Auth::Guard('web')->user()->id)->first();
        if ($like == NULL) {
            $like = new Like();
            $like->user_id = Auth::Guard('web')->user()->id;
            $like->article_id = $id;
            $like->status = "Like";
            $like->save();
        } elseif ($like->status == "Like") {
            $like->status = "DesLike";
        } else {
            $like->status = "Like";
        }

        $like->save();
        return $like;
    }
}
