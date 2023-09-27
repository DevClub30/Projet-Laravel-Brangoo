@php
$label ??=null;
$name ??='';
$class ??=null;
$value ??='' ;
@endphp
<div @class=(["form-group",$class])>
    <label for="{{$name}}">{{$label}}</label>
    <select class="form-control" name="{{$name}}" id="{{$name}}"  >
        @foreach($produits as $k => $v)
            <option value="{{$k}}">{{$v}}</option>
        @endforeach

    </select>
</div>

@error($name)
<div class="invalid-feedback">
    {{$message}}
</div>
@enderror