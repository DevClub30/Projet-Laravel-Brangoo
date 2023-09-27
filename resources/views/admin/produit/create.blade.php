@extends('layouts.app_admin')
@section('title',$produit->exists ? 'Modifier une categorie' : 'Ajouter une categorie')

@section('content')
<h1>@yield('title')</h1>

<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">@yield('title')</h4>
      <form action="{{route($produit->exists ? 'admin.produit.update':'admin.produit.store',$produit)}}" method="post">
        @csrf
        @method($produit->exists ? 'put':'post')
        @include('partials.input',['label'=>'Nom','name'=>'nom','value'=>$produit->nom])
        @include('partials.input',['label'=>'Note','name'=>'note','value'=>$produit->note,'type'=>'number', 'placeholder'=>'Note'])
        <br>
        <button type="submit" class="btn btn-primary">
          @if($produit->exists)
          Modifier
          @else
          Ajouter
          @endif
        </button>
       <a href="{{route('admin.produit.index')}}" class="btn btn-dark">Retour</a>
      </form>
    </div>
  </div>
</div>

@endsection