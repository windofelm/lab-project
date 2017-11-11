<?php
/**
 * Created by PhpStorm.
 * User: malcolmx
 * Date: 09.11.2017
 * Time: 22:15
 */

namespace App\Http\Controllers;


use App\Article;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FrontController extends Controller
{
    public function articles($category_slug = null)
    {
        if($category_slug){
            $articles = Category::where("slug", $category_slug)->first()->articles()
                ->orderBy("id", "DESC")->paginate(3);
        }else{
            $articles = DB::table('articles')->orderBy("id", "DESC")->paginate(3);
        }


        return view('blog_list', ['articles' => $articles]);
    }

    public function article($slug)
    {
        $ids = explode("-", $slug);
        $index = count($ids) - 1;

        $article = Article::find($ids[$index]);

        if(is_null($article)){
            return back();
        }

        return view('blog_detail', ["article" => $article]);
    }
}