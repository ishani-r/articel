<?php

namespace App\Repositories;

use App\Contracts\CommentContract;
use App\Models\Comment;


class CommentRepository implements CommentContract
{
   public function comment(array $array)
   {
      $comment = new Comment();
      $comment->user_id = $array['user_id'];
      $comment->artical_id = $array['artical_id'];
      $comment->comment = $array['comment'];
      $comment->save();
      return $comment;
   }

   public function showComment($id)
   {
      $comment = $id ? Comment::find($id) : Comment::all();
      return $comment;
   }
}
