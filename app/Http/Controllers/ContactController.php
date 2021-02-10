<?php

namespace App\Http\Controllers;

use App\Models\Adresse;
use App\Models\Home_title;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $bo_titlelist = Home_title::all();
        $bo_adresslist = Adresse::all();
        return view('pages.contact',compact('bo_titlelist','bo_adresslist'));
    }
}
