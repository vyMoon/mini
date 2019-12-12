<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class IndexController extends Controller
{
    //

    protected $message;
    protected $header;
    protected $messageNewArticle;

    public function __construct() {
        $this->message = 'You can read the article here';
        $this->header = 'Articles';
        $this->messageNewArticle = 'You can ad an article here easily';
    }

    public function index() {
        // $message = 'You can read the article here';
        // $header = 'Articles';

        // возврязает все выбранное из таблицы
        $articles = Article::select(['id','title','description'])->get();
        // dump($articles);

        return view('page')->with([
                'message'=>$this->message,
                'header'=>$this->header,
                'articles'=>$articles
            ]);
    }

    public function show($id) {
        // dump($id);
        // возвращает единственную запись из таблицы по ее индентияикатору
        // $article = Article::find($id);
        $article = Article::select(['id', 'title', 'text'])->where('id', $id)->first();

        // dump($article);
        return view('article-content')->with([
            'message'=>$this->message,
            'header'=>$this->header,
            'article'=>$article
        ]);
    }

    public function add() {
        return view('add-content')->with([
            'message'=>$this->messageNewArticle,
            'header'=>$this->header
        ]);
    }

    public function store(Request $request) {
        // print('1234');
        dump($request->all());
    }
}
