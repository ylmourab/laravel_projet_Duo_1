<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $dataArticle = Article::all();
        
    


        return view('pages.articles',compact('dataArticle'));
    }
}
