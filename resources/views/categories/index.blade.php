@php
$page='produits';
@endphp

@extends('base')
@section('title','Nos produits')
@section('content')
<div class="container">
<h2></h2>
<div class="bg-light p-5 mb-5 text-center">
    <form action="" method="get" class="container d-flex gap-2">
        <input name="designation" placeholder="Non du produit" class="form-control" value="{{$input['designation'] ?? ''}}">
        <input type="number" name="prix" placeholder="Prix" class="form-control" value="{{ $input['prix'] ?? ' '}}">
        <input name="region" placeholder="Region" class="form-control" value="{{ $input['region'] ?? ''}}">
        <button class="btn btn-primary btn-5m flex grow-5">
            Rechercher
        </button>
    </form>
</div>
<hr>
<br>
    <div class="product-section pt-0">
        <div class="container">
            <div class="row">
                @forelse($categories as $categorie)
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                        <a class="product-item" href="{{route('categorie.show',['slug'=>$categorie->getslug(),'categorie'=>$categorie])}}">
                            <img src="{{$categorie->imageurl()}}" class="img-fluid product-thumbnail">
                            <h3 class="product-title">{{$categorie->designation}}</h3>
                            <strong class="product-price">  {{number_format($categorie->prix, thousands_separator:' ')}} FCFA</strong>
                            <span class="icon-cross">
                                <img src="/images/cross.svg" class="img-fluid">
                            </span>
                        </a>
                    </div>
                    
                @empty
                    <div class="col">
                        aucun produit ne correspond a votre recherce
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <div class="my-4">
        {{$categories->links()}}
    </div>
</div>


<br>
<br>
<br>

@endsection