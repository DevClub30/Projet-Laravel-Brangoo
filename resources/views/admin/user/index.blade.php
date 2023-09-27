@extends('layouts.app_admin')
@section('title','Liste des utilisateurs')
@section('content')
<h1>@yield('title')</h1>



<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">@yield('title')</h4>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th> # </th>
              <th> Noms des Utilisateurs </th>
              <th> Email </th>
              <th> Date d'inscription</th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td> 
                {{ $user->id }} 
              </td>
              <td> 
                {{ $user->name }}
              </td>
              <td>
                {{ $user->email }}
              </td>
              <td> 
                {{ $user->created_at}} 
              </td>
              <td> 
     
                  <form action="{{route('admin.user.destroy',$user)}}" method="post">
                     @csrf
                     @method('delete')
                     <button class="btn btn-danger">Supprimer</button>
                  </form>
                 
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

{{ $users->links() }}
@endsection
