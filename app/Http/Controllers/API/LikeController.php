<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Like;
use App\Http\Requests\Admin\LikeRequest;

use App\Contracts\LikeContract;
use App\Repositories\LikeRepository;

class LikeController extends Controller
{
    public function __construct(LikeContract $Like)
    {
        $this->Like = $Like;
    }

    public function likeStatus(Request $request)
    {
        $like = $this->Like->likeStatus($request->all());
        return response()->json([
            'message' => 'like inserted/update successfully',   
            'like' => $like
        ]);
    }

}