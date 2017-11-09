<?php
/**
 * Created by PhpStorm.
 * User: malcolmx
 * Date: 09.11.2017
 * Time: 22:15
 */

namespace App\Http\Controllers;


use App\Article;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function articles()
    {
        $articles = DB::table('articles')->paginate(5);

        return view('blog_list', ['articles' => $articles]);
    }

    public function article($slug, $id)
    {

        $article = Article::find($id);

        return view('blog_detail', ["article" => $article]);
    }
}