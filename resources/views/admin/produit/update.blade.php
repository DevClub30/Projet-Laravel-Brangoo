@extends('layouts.app_admin')

@section('content')



<form action="{{route('admin_edit')}}" method ="post">
@csrf
<input type="text" class="form-control" id="formGroupExampleInput" name ="nom" placeholder="" value ="{{produits->id}}" style ="display:none;">
<div class='col-4'>
  <div class="mb-3">
    <label for="name" class="form-label">Nom</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name ="nom" placeholder="" value ="{{produits->name}}">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Note</label>
    <input type="number" class="form-control" id="formGroupExampleInput2" name ="note" placeholder="" value ="{{produits->note}}">
    
  </div>
  <button class="btn btn-primary" type="submit">Ajouter</button>
</div>
</form>
 

@endsection