<?php

namespace App\Http\Controllers;

use App\Models\Adresse;
use App\Models\Article;
use App\Models\Home_1list;
use App\Models\Home_2list;
use App\Models\Home_button;
use App\Models\Home_descriptif;
use App\Models\Home_img;
use App\Models\Home_title;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index(){
        return view('backoffice.homeback');
    }
    public function i(){
        $bo_home_1list = Home_1list::all();
        return view('backoffice.pages.homeList1', compact('bo_home_1list'));
    }
    public function creatA(){
        $bo_home_2list = Home_2list::all();
        return view('backoffice.pages.homeList2', compact('bo_home_2list'));
    }
    public function creatB(){
        $bo_Articlelist = Article::all();
        return view('backoffice.pages.articleList', compact('bo_Articlelist'));
    }
    public function creatC(){
        $bo_imglist = Home_img::all();
        $bo_descriplist = Home_descriptif::all();
        $bo_buttonlist = Home_button::all();
        $bo_titlelist = Home_title::all();
        $bo_adresslist = Adresse::all();
        return view('backoffice.pages.homeElem', compact('bo_imglist','bo_descriplist','bo_buttonlist','bo_titlelist','bo_adresslist'));
    }
}
