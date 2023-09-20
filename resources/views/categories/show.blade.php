@extends('base')

@section('title',$categorie->designation)

@section('content')

<div class="container row">
    <div class="col-4">
        <h1>{{$categorie->designation}}</h1>
        <img src="{{$categorie->imageurl()}}" alt="">
    </div>
    <div class="col-8">
        <h2>{{$categorie->region}}</h2>
        <h2>{{$categorie->tagsA}}</h2>
        <h2>{{$categorie->tagsG}}</h2>
    </div >
  
    <br>
</div>

    <form action="{{route('cart.store')}}" method="post">
      @csrf
      @include('partials.input',['name'=>'produit_id','value'=>"$categorie->id",'type'=>'hidden'])

      <button type="submit" class="btn btn-dark"> Ajouter au panier </button>
    </form>

</div>
@endsection