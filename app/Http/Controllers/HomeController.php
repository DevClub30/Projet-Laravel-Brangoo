<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories=Categorie::orderBy('created_at','desc')->limit(3)->get();
        return view('home',[
         'categories'=>$categories
        ]);
    } 
}
