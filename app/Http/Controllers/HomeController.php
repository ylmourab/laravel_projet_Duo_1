<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Home_1list;
use App\Models\Home_2list;
use App\Models\Home_element;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $dataHomeElement = Home_element::all();
        $dataHomelist1 = Home_1list::all();
        $dataHomelist2 = Home_2list::all();

    
        return view('welcome',compact('dataHomeElement','dataHomelist1','dataHomelist2'));
    }
}
