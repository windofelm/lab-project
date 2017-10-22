<?php
/**
 * Created by PhpStorm.
 * User: malcolmx
 * Date: 22.10.2017
 * Time: 21:33
 */

namespace App\Http\Controllers;


use App\Article;
use App\ArticleCategory;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanelController extends Controller
{

    public function index()
    {
        return view('panel.dashboard');
    }

    public function articles()
    {
        $articles = Article::orderBy('id', 'DESC')->get();

        return view('panel.articles', [
            'articles' => $articles
        ]);
    }

    public function store(Request $request)
    {

        if($request->method() == "GET"){

            $categories = Category::all();
            return view('panel.add_article', [
                "categories" => $categories
            ]);

        }elseif ($request->method() == "POST"){

            //dd($request->all());

            $article = new Article();
            $article->user_id = Auth::user()->id;
            $article->title = $request->title;
            $article->body = $request->body;
            $article->seo_title = $request->seo_title;
            $article->seo_description = $request->seo_description;
            ($request->is_active) ? $article->is_active = 1 : $article->is_active = 0;
            $article->save();

            foreach ($request->categories as $category){
                $article_category = new ArticleCategory();
                $article_category->article_id = $article->id;
                $article_category->category_id = $category;
                $article_category->save();
            }

            return redirect()->route('articles');
        }

    }
}