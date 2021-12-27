<?php
namespace App\Contracts;

Interface CommentContract
{
   public function comment(array $array);
   public function showComment($id);

}
?>