<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\RechercheCategoriesRequest;

class CategoriesController extends Controller
{
    public function index(RechercheCategoriesRequest $request)
    {
        $query = Categorie::query();
        if($request->validated('prix'))
        {
            $query=$query->where('prix','<=',$request->validated('prix'));
        }
      if($region=$request->validated('region'))
        {
            $query=$query->where('region','like',"%{$region}%");
            
        }
      
        if($desi=$request->validated('designation'))
        {
            $query=$query->where('designation','like',"%{$desi}%");
            
        }
         return view('categories.index',[
            'categories' => $query->paginate(16),
            'input'=>$request->validated()
         ]);
    }


    public function show(string $slug,Categorie $categorie)
    {
        if ($slug !== $categorie->getslug()){
            return to_route('categorie.show',[
                'slug' => $categorie->getslug(),
                'categorie' =>$categorie
            ]);

        }

        return view('categories.show',['categorie'=>$categorie]);
    }
}

