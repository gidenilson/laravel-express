@extends('template')
@section('tags')

@foreach($tags as $tag)
<span class="label label-primary">{{$tag}}</span>
@endforeach
@stop