@extends('layouts.app_admin')

@section('title','Liste des Produits')
@section('content')
<h1>@yield('title')</h1>

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">@yield('title')</h4>
      <a href="{{Route('admin.categorie.create')}}" class="btn btn-primary">Ajouter un produit</a>
      </p>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th> Image </th>
              <th> Nom du produit </th>
              <th> Prix </th>
              <th> tagsA </th>
              <th> tagsG </th>
              <th> Region </th>
              <th> Actions </th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $categorie)
            <tr>
              <td class="py-1">
                <img src="{{ $categorie->imageurl() }}" alt="image" />
              </td>
              <td> 
                {{ $categorie->designation }} 
              </td>
              <td>
                {{number_format($categorie->prix, thousands_separator:' ')}} FCFA
              </td>
              <td> 
                {{ $categorie->tagsA }} 
              </td>
              <td> 
                {{ $categorie->tagsG }}
              </td>
              <td> 
                {{ $categorie->region }} 
              </td>
              <td> 
                <div class="d-flex gap-2 w-100 justify-content-end">
                  <div>
                    <a href="{{route('admin.categorie.edit',$categorie)}}" class="btn btn-primary">Modifier</a>
                  </div>
                  &ensp;
                  <div>
                    <form action="{{route('admin.categorie.destroy',$categorie)}}" method="post">
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

{{ $categories->links() }}
@endsection