<?php

namespace App\Http\Controllers;

use App\Models\CartBd;
use App\Models\Panier;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,Cart $cart,Panier $panier,Categorie $categorie)
    {
       $data=[];
       $user_id = Auth()->user()->id;

         /* 
       foreach($cart->content() as $cat)
       {
          $data[] = $categorie->find($cat->id);
      
       } */
      $p = $panier->all();
       $cpt=0;
      
     foreach ($p as  $unp) {
       if($unp->identifier==$user_id)
       {
            foreach(unserialize($unp->content) as $produit)
            {
                $data[]=$produit;
                $cpt++;
            }

       }
        
    }

    /* dd($data); */
    
          

      return view('cart.index',[
        'data'=>$data,
        'cpt'=>$cpt,
        'user_id'=>$user_id

      ]);
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
    public function store(Request $request,Categorie  $categorie,User $user,Cart $cart)
    {
        
       
       $categorie = Categorie::find($request->produit_id);

       $duplicata =  $cart->search(function ($cartItem, $rowId) use ($request) {
        return $cartItem->id === $request->produit_id;
    });
        //dd($duplicata);
    if ($duplicata->isNotEmpty())
    {

        return to_route('home')->with('error','cet produit existe deja dans le panier');
    }
if(Auth()->check())
{
    $cart->add($request->produit_id,$categorie->designation, 1, $categorie->prix, ['img'=>$categorie->img])->associate($categorie);
    $cart->store(Auth()->user()->id);
}
    
        
       

        return to_route('home')->with('success','le produit a ete ajouter au le panier');
     


     /*  Cart::add($request->produit_id,$categorie->designation, 1, $categorie->prix, ['img'=>$categorie->img])->associate($categorie);
            

        return to_route('home')->with('success','le produit a ete ajouter au le panier');  */
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
    public function vide(Panier $panier)
    {
        $user_id = Auth()->user()->id;
        $panier->where('identifier',$user_id )->delete();
     /*    $temp = $panier->all();
        foreach ($temp as  $unp) {
            if($unp->identifier==$user_id)
            {
                $unp->delete();
            }
        }
     
        dd($panier->where('identifier',$user_id )->get()); */
        
        
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
    public function destroy($rowid,Panier $panier)
    {
        $user_id = Auth()->user()->id;
        $panier=$panier->where('identifier',$user_id )->get();
        foreach(unserialize($panier->content) as $item)
        {
            $item->where('rowId',$rowid )->delete();
        }
        return to_route('cart.index')->with('success','produit supprime ');
    }
}
