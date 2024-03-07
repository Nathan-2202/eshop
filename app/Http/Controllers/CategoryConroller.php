<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryConroller extends Controller
{
    public function create(){
        return view('category.create');
    }
    public function index(){
        return view('category.index');
    }

    public function store(Request $request){
        dd($request->all()); //show all the data submitted
    }
}
