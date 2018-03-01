<?php
/**
 * Created by PhpStorm.
 * User: malcolmx
 * Date: 09.11.2017
 * Time: 22:15
 */

namespace App\Http\Controllers;


use App\Article;
use App\ArticleComment;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class FrontController extends Controller
{
    public function index()
    {

        $articles = Article::orderBy("id", "DESC")->active()->take(9)->get();

        return view('index', ['articles' => $articles]);
    }

    public function articles(Request $request, $category_slug = null)
    {

        if($category_slug){

            $articles = Category::where("slug", $category_slug)->first()->articles()
                ->orderBy("id", "DESC");

        }elseif ($request->month){

            $articles = Article::
                whereMonth('created_at', '=', $request->month)
                ->orderBy("id", "DESC");

        }elseif ($request->search) {

            $articles = Article::where("title", "LIKE", "%".$request->search."%")
                ->orWhere("body", "LIKE", "%".$request->search."%")
                ->orWhere("seo_title", "LIKE", "%".$request->search."%")
                ->orWhere("seo_description", "LIKE", "%".$request->search."%")
                ->orderBy("id", "DESC");

        }else{

            $articles = Article::orderBy("id", "DESC");
        }

        $articles = $articles->active()->paginate(3);

        if(!$articles->total()){
            return back()->with('error', 'Aradığınız kriterlerde girilmiş makale kaydı bulunamadı.');
        }

        return view('blog_list', ['articles' => $articles, "tags" => Tag::all()]);
    }

    public function article($slug)
    {
        $ids = explode("-", $slug);
        $index = count($ids) - 1;

        $article = Article::find($ids[$index]);
        $tags = Tag::all();

        if(is_null($article)){
            return back()->with('error', 'Aradığınız makale bilgisine ulaşılamadı.');
        }

        return view('blog_detail', ["article" => $article, "tags" => $tags]);
    }

    public function comment(Request $request, $article_id)
    {
        $validator = Validator::make($request->all(), [
            "author" => "required",
            "email" => "required|email",
            "comment" => "required|min:15"
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $comment = new ArticleComment();
        $comment->article_id = $article_id;
        $comment->name = $request->author;
        $comment->comment = $request->comment;
        $comment->email = $request->email;
        $comment->ip_address = $request->ip();
        $comment->save();

        return back()->with("success", "Yorumunuz başarılı şekilde eklendi.");
    }

    public function sample()
    {
        return view("sample");
    }

    public function tagArticles($tag_slug)
    {
        $articles = Tag::where("name", $tag_slug)->first()->articles()
            ->orderBy("id", "DESC")->active()->paginate(3);

        if(!$articles->total()){
            return back()->with('error', 'Aradığınız kriterlerde girilmiş makale kaydı bulunamadı.');
        }

        return view('blog_list', ['articles' => $articles, "tags" => Tag::all()]);
    }

    public function questions()
    {
        $questions = [
            "sorular" => [
                [
                    "soru_metni" => "Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.",
                    "dogru_cevap" => "cevap_2",
                    "secenekler" => [
                        "cevap_1" => "Cevap 1",
                        "cevap_2" => "Cevap 2",
                        "cevap_3" => "Cevap 3",
                        "cevap_4" => "Cevap 4",
                    ]
                ],
                [
                    "soru_metni" => "Lorem Ipsum kullanmanın amacı, sürekli 'buraya metin gelecek, buraya metin gelecek' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır.",
                    "dogru_cevap" => "cevap_4",
                    "secenekler" => [
                        "cevap_1" => "Cevap 1",
                        "cevap_2" => "Cevap 2",
                        "cevap_3" => "Cevap 3",
                        "cevap_4" => "Cevap 4",
                    ]
                ],
                [
                    "soru_metni" => "Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir.",
                    "dogru_cevap" => "cevap_1",
                    "secenekler" => [
                        "cevap_1" => "Cevap 1",
                        "cevap_2" => "Cevap 2",
                        "cevap_3" => "Cevap 3",
                        "cevap_4" => "Cevap 4",
                    ]
                ]
            ]
        ];

        return response()->json($questions);
    }
}