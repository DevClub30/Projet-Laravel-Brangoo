@php
$page='produits';
@endphp



@extends('layouts.app_admin')

@section('title','Liste des produits')
@section('content')
<h1>@yield('title')</h1>
<div>
  <a href="{{Route('admin.produit.create')}}" class="btn btn-primary">Ajouter un produit</a>
  <a href="" class="btn btn-primary"
  >
    
  Envoyer msg</a>


</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Note</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($produits as $produit)
    <tr>
      <td>{{ $produit->nom }}</td>
      <td>{{ $produit->note }}</td>
      <td>
        <div class="d-flex gap-2 w-100 justify-content-end">
         <a href="{{route('admin.produit.edit',$produit)}}" class="btn btn-primary">Modifier</a>
         <form action="{{route('admin.produit.destroy',$produit)}}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger">Supprimer</button>
         </form>
        </div>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{ $produits->links() }}
@endsection