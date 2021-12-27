<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;
use App\Contracts\LikeContract;

class LikeController extends Controller
{
    public function __construct(LikeContract $Like)
    {
        $this->Like = $Like;
    }

    public function likeStatus(Request $request)
    {
        $like = $this->Like->likeStatus($request->all());
        return $like;
    }
}
