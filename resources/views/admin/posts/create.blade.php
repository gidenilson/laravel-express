@extends('template')
@section('admin-posts')


<h1>Criar Post</h1>
@if($errors->any())

<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
</div>
@endif
{!! Form::open(['route'=>'admin.posts.store', 'method'=>'post']) !!}

@include('admin.posts._form')

<div class="form-group">
    {!! Form::label('tags', 'Tags') !!}
    {!! Form::text('tags', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Criar', ['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

@stop
