<?php

namespace App\Repositories;

use App\Contracts\ArticleContract;
use App\Models\Artical;


class ArticleRepository implements ArticleContract
{
   public function showArticle($id)
   {
      $article = $id ? Artical::find($id) : Artical::all();
      return $article;

   }
}
