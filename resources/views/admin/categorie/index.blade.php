@extends('layouts.app_admin')

@section('title','Liste des categories')
@section('content')
<h1>@yield('title')</h1>
<div>
  <a href="{{Route('admin.categorie.create')}}" class="btn btn-primary">Ajouter un categorie</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">designation</th>
      <th scope="col">img</th>
      <th scope="col">prix</th>
      <th scope="col">region</th>
      <th scope="col">tagsA</th>
      <th scope="col">tagsG</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($categories as $categorie)
    <tr>
      <td>{{ $categorie->designation }}</td>
      <td>{{ $categorie->img }}</td>
      <td>{{ $categorie->prix }}</td>
      <td>{{ $categorie->region }}</td>
      <td>{{ $categorie->tagsA }}</td>
      <td>{{ $categorie->tagsG }}</td>
      <td>
        <div class="d-flex gap-2 w-100 justify-content-end">
         <a href="{{route('admin.categorie.edit',$categorie)}}" class="btn btn-primary">Modifier</a>
         <form action="{{route('admin.categorie.destroy',$categorie)}}" method="post">
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
{{ $categories->links() }}
@endsection