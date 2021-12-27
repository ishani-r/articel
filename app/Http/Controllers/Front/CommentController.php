<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CommentRequest;
use App\Contracts\CommentContract;

class CommentController extends Controller
{
    public function __construct(CommentContract $Comment)
    {
        $this->Comment = $Comment;
    }
    public function comment(CommentRequest $request)
    {
        // dd(1);
        $comment = $this->Comment->comment($request->all());
        
        return redirect()->route('home');
    }

    
}
