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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FrontController extends Controller
{
    public function articles(Request $request, $category_slug = null)
    {

        if($category_slug){

            $articles = Category::where("slug", $category_slug)->first()->articles()
                ->orderBy("id", "DESC")->paginate(3);

        }elseif ($request->month){

            $articles = DB::table("articles")
                ->whereMonth('created_at', '=', $request->month)
                ->orderBy("id", "DESC")
                ->paginate(3);

            if(!$articles->total()){
                return back()->with('error', 'Aradığınız ay girilmiş makale kaydı bulunamadı.');
            }

        }elseif ($request->search) {

            $articles = DB::table('articles')
                ->where("title", "LIKE", "%".$request->search."%")
                ->orWhere("body", "LIKE", "%".$request->search."%")
                ->orWhere("seo_title", "LIKE", "%".$request->search."%")
                ->orWhere("seo_description", "LIKE", "%".$request->search."%")
                ->orderBy("id", "DESC")->paginate(3);

            if(!$articles->total()){
                return back()->with('error', 'Aradığınız ay girilmiş makale kaydı bulunamadı.');
            }
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
            return back()->with('error', 'Aradığınız makale bilgisine ulaşılamadı.');
        }

        return view('blog_detail', ["article" => $article]);
    }
}