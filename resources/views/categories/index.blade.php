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
    <div class="row">
        @forelse($categories as $categorie)
            <div class="col">
              @include('categories.card')
            </div>
        @empty
        <div class="col">
             aucun produit ne correspond a votre recherce
            </div>
        @endforelse
    </div>
    <div class="my-4">
        {{$categories->links()}}
    </div>
</div>


@endsection