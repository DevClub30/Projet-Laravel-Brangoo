<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use App\Http\Requests\StoreProduitRequest;
use App\Http\Requests\UpdateProduitRequest;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.produit.index',[
            'produits' => produit::orderBy('created_at','desc')->paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.produit.create',[
            'produit'=> new Produit(),
           ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProduitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduitRequest $request)
    { 
        $produit =  produit::create($request->validated());
        return to_route('admin.produit.index')->with('success','categorie ajoutée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        return view('admin.produit.create',[
            'produit'=>$produit,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProduitRequest  $request
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduitRequest $request, Produit $produit)
    {
        $produit->update($request->validated());
        return to_route('admin.produit.index')->with('success','categorie a bien été modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return to_route('admin.produit.index')->with('success','categorie a bien été suppeimée');
    }
  
}
