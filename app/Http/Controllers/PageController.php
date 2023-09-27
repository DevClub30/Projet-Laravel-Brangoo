<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Categorie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function a_propos()
    {
        return view('pages.propos');
    }
    public function blog(User $user)
    {

        return view('pages.blog');
    }
    public function contact()
    {
        return view('pages.contact');
        
    }
    public function service()
    {
        $categories=Categorie::orderBy('created_at','desc')->limit(3)->get();
        return view('pages.services',[
         'categories'=>$categories
        ]);
    }
   
}
