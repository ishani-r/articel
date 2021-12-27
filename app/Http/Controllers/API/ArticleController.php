<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contracts\ArticleContract;

class ArticleController extends Controller
{
    public function __construct(ArticleContract $Article)
    {
        $this->Article = $Article;
    }
    public function showArticle($id=null)
    {
        $article = $this->Article->showArticle($id);
        if(empty($article))
        {
            return "This ID is not stored in the database.";
        } else {
            return $article;
        }

        
    }
}
