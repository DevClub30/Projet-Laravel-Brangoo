<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Cart;
use App\Http\Requests\StoreCommandeRequest;
use App\Http\Requests\UpdateCommandeRequest;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Cart $cart,Request $request)
    {
       /*  $data = $cart->content();
  
        foreach($data as $dat)
        {
            $commande->produit_id=$dat->id;
           $commande->rowId=$dat->rowId;
        }
       dd($dat->id);
        $commandes = [];
        $i=0;

        foreach($data as $commande)
        {
        
           $commandes['produit_'.$i][]=$commande->qty;
           $commandes['produit_'.$i][]= $commande->name;
           $commandes['produit_'.$i][]= $commande->price;
          $i++;

        }
        $commande->commandes->serialize($commandes);
        $commande->user_id=Auth()->user()->id;
        $commande->save();
        dd($commande); */
       /*  dd($cart->content()); */
        dd(Auth()->user()->id);
            dd($request->session()->all());

        return view('commande');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommandeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommandeRequest $request ,Cart $cart,Commande $commande)
    {
        $data = $cart->content();
        foreach($data as $data)
        {
            $commande->produit_id=$data->id;
           $commande->rowId=$data->rowId;
        }
       
        $commandes = [];
        $i=0;

        foreach($data as $commande)
        {
        
           $commandes['produit_'.$i][]=$commande->qty;
           $commandes['produit_'.$i][]= $commande->name;
           $commandes['produit_'.$i][]= $commande->price;
          $i++;

        }
        $commande->commandes->serialize($commandes);
        $commande->user_id=Auth()->user()->id;
        $commande->save();
        dd(Cart::content());
       return view('commande');
      

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function show(Commande $commande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function edit(Commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommandeRequest  $request
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommandeRequest $request, Commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commande $commande)
    {
        //
    }
}
