<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment(Request $request)
    {
        $comment = new Comment();
        $comment->user_id = $request->user_id;
        $comment->artical_id = $request->artical_id;
        $comment->comment = $request->comment;
        $comment->save();
        return redirect()->route('home');
    }

    
}
