<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contracts\CommentContract;

class CommentController extends Controller
{
    public function __construct(CommentContract $Comment)
    {
        $this->Comment = $Comment;
    }
    public function comment(Request $request)
    {
        $comment = $this->Comment->comment($request->all());
        return response([
            'message' => 'Comment Inserted Successfully',
            'comment' => $comment
        ]);
    }

    public function showComment($id=null)
    {
        $comment = $this->Comment->showComment($id);
        if(empty($comment)){
            return "This ID is not stored in the database.";
        } else {
            return $comment;
        }
    }
}
