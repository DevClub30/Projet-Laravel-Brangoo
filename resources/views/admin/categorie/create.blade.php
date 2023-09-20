@extends('layouts.app_admin')

@section('title',$categorie->exists ? 'Modifier un categorie' : 'Ajouter un categorie')

@section('content')
<h1>@yield('title')</h1>
<form action="{{route($categorie->exists ? 'admin.categorie.update':'admin.categorie.store',$categorie)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method($categorie->exists ? 'put':'post')
 @include('partials.input',['label'=>'designation','name'=>'designation','value'=>$categorie->designation])
 @include('partials.input',['label'=>'img','name'=>'img','value'=>$categorie->img,'type'=>'file'])
 @include('partials.input',['label'=>'prix','name'=>'prix','value'=>$categorie->prix,'type'=>'number'])
 @include('partials.input',['label'=>'region','name'=>'region','value'=>$categorie->region])
 @include('partials.input',['label'=>'tagsA','name'=>'tagsA','value'=>$categorie->tagsA])
 @include('partials.input',['label'=>'tagsG','name'=>'tagsG','value'=>$categorie->tagsG])
 @include('partials.select',['label'=>'produits','name'=>'produit_id','value'=>$categorie->produit()->pluck('id'),'produits'=>$produits])

  <button type="submit" class="btn btn-primary">
    @if($categorie->exists)
    Modifier
    @else
    Ajouter
    @endif
  </button>
</form>
@endsection