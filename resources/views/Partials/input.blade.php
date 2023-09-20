@php
$label ??=null;
$type ??='text';
$name ??='';
$class ??=null;
$value ??=null;
$placehoder ??='';
@endphp
<div @class=(["form-group",$class])>
    <label for="{{$name}}">{{$label}}</label>
    <input class ="form-control @error($name) is-invalid @enderror" type="{{$type}}" placeholder={{$placehoder}} id="{{$name}}" name="{{$name}}" value="{{old($name,$value)}}">
</div>

@error($name)
<div class="invalid-feedback">
    {{$message}}
</div>
@enderror