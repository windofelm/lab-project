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
use Illuminate\Support\Facades\Validator;

class PanelController extends Controller
{

    public function index()
    {
        //return view('panel.sample');
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

            $validator = Validator::make($request->all(), [
                "title" => "required",
                "body" => "required|min:300",
                "seo_title" => "required|between:50,60",
                "seo_description" => "required|between:135,160",
                "categories" => "required",
                "image" => "required"
            ]);

            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $article = new Article();
            $article->user_id = Auth::user()->id;
            $article->title = $request->title;
            $article->body = $request->body;
            $article->seo_title = $request->seo_title;
            $article->seo_description = $request->seo_description;
            $article->image = $request->image;
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

    public function upload(Request $request)
    {

        $file = $request->file('upload');

        $imageName = $file->getClientOriginalName().sha1(time()).".".$file->getClientOriginalExtension();

        $file->move('images/', $imageName);

        return url('/')."/images/".$imageName;
    }

    public function show($id)
    {
        $article = Article::find($id);

        return view('panel.article_detail', compact("article"));
    }

    public function update($id)
    {
        $article = Article::find($id);
        $categories = Category::all();

        return view("panel.update_article", compact("article", "categories"));
    }

    public function postUpdate(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            "title" => "required",
            "body" => "required|min:300",
            "seo_title" => "required|between:50,60",
            "seo_description" => "required|between:135,160",
            "categories" => "required",
            "image" => "required"
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $article = Article::find($id);
        $article->user_id = Auth::user()->id;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->seo_title = $request->seo_title;
        $article->seo_description = $request->seo_description;
        $article->image = $request->image;
        ($request->is_active) ? $article->is_active = 1 : $article->is_active = 0;
        $article->save();

        foreach ($article->categories as $old_category){

            $article_category = ArticleCategory::where("article_id", $article->id)->where("category_id", $old_category->id)->first();
            $article_category->delete();
        }

        foreach ($request->categories as $category){
            $article_category = new ArticleCategory();
            $article_category->article_id = $article->id;
            $article_category->category_id = $category;
            $article_category->save();
        }

        return redirect()->route('articles');
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();

        foreach ($article->categories as $category){
            $article_category = ArticleCategory::where("article_id", $article->id)->where("category_id", $category->id)->first();
            $article_category->delete();
        }

        return redirect()->route("articles");
    }
}