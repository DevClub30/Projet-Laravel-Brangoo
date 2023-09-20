@extends('layouts.app_admin')
@section('title',$produit->exists ? 'Modifier un produit' : 'Ajouter un produit')

@section('content')
<h1>@yield('title')</h1>
<form action="{{route($produit->exists ? 'admin.produit.update':'admin.produit.store',$produit)}}" method="post">
  @csrf
  @method($produit->exists ? 'put':'post')
 @include('partials.input',['label'=>'Nom','name'=>'nom','value'=>$produit->nom])
 @include('partials.input',['label'=>'Note','name'=>'note','value'=>$produit->note,'type'=>'number'])


  <button type="submit" class="btn btn-primary">
    @if($produit->exists)
    Modifier
    @else
    Ajouter
    @endif
  </button>
</form>
@endsection