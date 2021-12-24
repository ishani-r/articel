<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Artical;
use App\Models\Comment;
use App\Models\Subcategory;
use App\DataTables\ArticleListDatatable;

class ArticelController extends Controller
{
    public function showArticelPage()
    {
        $category = Category::all();
        return view('admin.Article.create', compact('category'));
    }

    public function create(Request $request)
    {
        $data = new Artical();
        $data->category_id = $request->category_id;
        $data->subcategory_id = $request->subcategory_id;
        $data->article = $request->article;
        $data->status = "Active";
        $data->save();
        return redirect()->route('admin.articel_list');
    }

    public function list(ArticleListDatatable $ArticleListDatatable)
    {
        return $ArticleListDatatable->render('admin.Article.list');
    }

    public function show($id)
    {
        $data = Artical::find($id);
        $category = Category::where('id', $data->category_id)->first();
        $subcategory = Subcategory::where('id', $data->subcategory_id)->first();
        return view('admin.Article.show', compact('data', 'category', 'subcategory'));
    }

    public function edit($id)
    {
        $data = Artical::find($id);
        $categorys = Category::get();
        $subcategorys = Subcategory::get();
        return view('admin.Article.edit', compact('data', 'categorys', 'subcategorys'));
    }

    public function update(Request $request, $id)
    {
        $data = Artical::find($id);
        $data->category_id = $request->categorys_id;
        $data->subcategory_id = $request->subcategory_id;
        $data->article = $request->article;
        $data->save();
        return redirect()->route('admin.articel_list');
    }

    public function deleteArticle($id)
    {
        $help = Artical::find($id);
        $help->delete();
        return $help;
    }

    public function statusArticle(Request $request)
    {
        $id = $request['id'];
        $data = Artical::find($id);

        if ($data->status == "Active") {
            $data->status = "Deactive";
        } else {
            $data->status = "Active";
        }
        $data->save();
        return $data;
    }

    public function setSubcategory(Request $request)
    {
        $category_id = $request->categorys_id;
        $sub = Subcategory::where('category_id', $category_id)->get();
        return $sub;
    }

    public function countLike()
    {
        $artical = Artical::all();
        return view('admin.Like.count-like', compact('artical'));
    }

    public function showComment()
    {
        $comment = Comment::all();
        return view('admin.Like.comment', compact('comment'));
    }

    
}
