<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResiController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function articles(){
        return view('pages.articles');
    }
}
