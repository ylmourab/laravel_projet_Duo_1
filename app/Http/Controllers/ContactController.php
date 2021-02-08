<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('pages.contact');
    }
    
    public function create(){
        return view('createCat');
    }

    public function store(Request $request){
        $newEntry = new Cat;

        $newEntry->name = $request->name;

        $newEntry->save();
        return redirect()->back();
    }
}
