<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Home_element;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $dataHomeElement = Home_element::all();
       

    
        return view('welcome',compact('dataHomeElement'));
    }
}
