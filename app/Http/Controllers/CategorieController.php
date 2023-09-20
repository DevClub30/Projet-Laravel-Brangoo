<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categorie.index',[
            'categories' => Categorie::paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie = new Categorie();
        

        
        $categorie-> fill([
            'designation'=>'ceci est une categorie de manioc',
            'prix'=>2500,
            'region'=>'region du belier',
            'tagsA'=>'Elle est tres ....',
            'tagsG'=>'Elle est tres ....'
 ]);
        return view('admin.categorie.create',[
            'categorie'=> $categorie,
            'produits' => Produit::pluck('nom','id' ),
           ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategorieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorieRequest $request,Categorie $categorie)
    { 
        $data = $request->validated();
        /** @var UploadedFile $image  */
       $image=$request->validated('img');

       if(!($image===null) || !$image->getError())
       {
        $data['img']=$image->store('images','public');
       }
      
      // $data['img']=$image->store('images','public');

       if($categorie->img)
       {
        Storage::disk('public')->delete($categorie->img);
       }

       $categorie =  Categorie::create($data);
       //dd($image);
     return to_route('admin.categorie.index')->with('success','categorie ajouté');
       

       //$categorie->update($data);
       // $categorie =  Categorie::create($request->validated());
        //return to_route('admin.categorie.index')->with('success','categorie ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $Categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $Categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        return view('admin.categorie.create',[
            'categorie'=>$categorie,
            'produits' => Produit::pluck('nom','id' ),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorieRequest  $request
     * @param  \App\Models\Categorie  $Categorie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategorieRequest $request, Categorie $categorie)
    {
        $data = $request->validated();
        /** UploadedFile $image  */
         $image = $request->validated('img');
       
         if(!($image===null) || !$image->getError())
         {
          $data['img']=$image->store('images','public');
         }

       if($categorie->img)
       {
         Storage::disk('public')->delete($categorie->img);
       }

       $categorie->update($data);

        return to_route('admin.categorie.index')->with('success','categorie a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $Categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return to_route('admin.categorie.index')->with('success','Categorie a bien été suppeimé');
    }
    
  
}
