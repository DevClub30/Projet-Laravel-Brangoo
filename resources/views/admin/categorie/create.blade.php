@extends('layouts.app_admin')

@section('title',$categorie->exists ? 'Modifier un produit' : 'Ajouter un produit')

@section('content')
<h1>@yield('title')</h1>

<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">@yield('title')</h4>
      <form class="forms-sample" action="{{route($categorie->exists ? 'admin.categorie.update':'admin.categorie.store',$categorie)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method($categorie->exists ? 'put':'post')
        @include('partials.input',['label'=>'Image','name'=>'img','value'=>$categorie->img,'type'=>'file'])
        @include('partials.input',['label'=>'Nom du produit','name'=>'designation','value'=>$categorie->designation])
        @include('partials.select',['label'=>'Categories','name'=>'produit_id','value'=>$categorie->produit()->pluck('id'),'produits'=>$produits])
        @include('partials.input',['label'=>'Prix','name'=>'prix','value'=>$categorie->prix,'type'=>'number'])
        @include('partials.input',['label'=>'TagsA','name'=>'tagsA','value'=>$categorie->tagsA])
        @include('partials.input',['label'=>'TagsG','name'=>'tagsG','value'=>$categorie->tagsG])
        @include('partials.input',['label'=>'Region','name'=>'region','value'=>$categorie->region])
        <br>
        <button type="submit" class="btn btn-primary mr-2">
          @if($categorie->exists)
          Modifier
          @else
          Ajouter
          @endif
        </button>
       <a href="{{route('admin.categorie.index')}}" class="btn btn-dark">Retour</a>
      </form>
    </div>
  </div>
</div>


@endsection

