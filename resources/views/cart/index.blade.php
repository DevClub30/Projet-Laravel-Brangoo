
@extends('layouts.app_admin')
@section('content')
@if(Cart::count()>0)

    <table class="table">
    <thead>
        <tr>
        <th scope="col">Images</th>
        <th scope="col">Prix</th>
        <th scope="col">Quantité</th>
        <th scope="col">Nom</th>
        <th scope="col">Supprimer</th>
        </tr>
    </thead>
    <tbody>
    @foreach(Cart::content() as $categorie)
        <tr>
        <td>{{ $categorie->model->img  }}</td>
        <td>{{ $categorie->price }}</td>
        <td>{{ $categorie->qty }}</td>
        <td>{{ $categorie->designation }}</td>
        <td>
            <form action="{{route('cart.destroy',$categorie->rowId)}}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger">Supprimer</button>
            </form>
        </td>

        </tr>
    @endforeach
    </tbody>
    </table>
@else
<h1>aucun produit</h1>
@endif
@endsection