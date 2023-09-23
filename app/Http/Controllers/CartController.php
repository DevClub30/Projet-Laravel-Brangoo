<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        /*   dd(Cart::content()); */

      return view('cart.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Categorie  $categorie)
    {
        //
       
       $categorie = Categorie::find($request->produit_id);

       $duplicata = Cart::search(function ($cartItem, $rowId) use ($request) {
        return $cartItem->id === $request->produit_id;
    });
        //dd($duplicata);
    if ($duplicata->isNotEmpty())
    {

        return to_route('home')->with('success','cet produit existe deja dans le panier');
    }

       Cart::add($request->produit_id,$categorie->designation, 1, $categorie->prix, ['img'=>$categorie->img])->associate($categorie);

        return to_route('home')->with('success','le produit a ete ajouter au le panier');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function vide()
    {
        Cart::destroy();
        return to_route('cart.index')->with('success','panier vidé! ');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowid)
    {
        
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowid)
    {
       Cart::remove($rowid);
       return to_route('cart.index')->with('success','produit supprime ');
    }
}
