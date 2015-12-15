@extends('template')
@section('admin-posts')


<h1>Editar Post: {{$post->title}}</h1>
@if($errors->any())

<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
</div>
@endif
{!! Form::model($post, ['route'=>['admin.posts.update', $post->id], 'method'=>'put']) !!}

@include('admin.posts._form')

<div class="form-group">
    {!! Form::label('tags', 'Tags') !!}
    {!! Form::text('tags', $post->taglist, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

@stop
