
@extends('layouts.app_admin')

@section('title','Liste des Categories')
@section('content')
<h1>@yield('title')</h1>



<div class="col-lg-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">@yield('title')</h4>
      <a href="{{Route('admin.produit.create')}}" class="btn btn-primary">Ajouter une categorie</a>
      </p>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Nom</th>
              <th>Note</th>
              <th>Date de Création</th>
              <th class="d-flex gap-2 w-100 justify-content-center">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($produits as $produit)
            <tr>
              <td>
                {{ $produit->nom }} 
              </td>
              <td>
                {{ $produit->note }}
              </td>
              <td> 
                {{ $produit->created_at}} 
              </td>
              <td>
                <div class="d-flex gap-2 w-100">
                  <div>
                    <a href="{{route('admin.produit.edit',$produit)}}" class="btn btn-primary">Modifier</a>
                  </div>
                  &ensp;
                  <div>
                    <form action="{{route('admin.produit.destroy',$produit)}}" method="post">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger">Supprimer</button>
                   </form>
                  </div>
                 </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


{{ $produits->links() }}
@endsection