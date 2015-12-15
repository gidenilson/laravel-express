@extends('template')
@section('admin-posts')

<h6><a class="btn btn-primary" href="{{route('admin.posts.create')}}">create</a></h6>

<table class="table">
    <thead> 
        <tr> 
            <th>ID</th> 
            <th>Título</th> 
            <th>Ação</th> 
        </tr> 
    </thead> 
    <tbody> 
        @foreach($posts as $post)
        <tr> 
            <th scope="row">{{$post->id}}</th> 
            <td>{{$post->title}}</td> 
            <td>
                <a class="btn btn-default" href="{{route('admin.posts.edit', ['id' => $post->id])}}">edit</a>
                <a class="btn btn-danger" href="{{route('admin.posts.destroy', ['id' => $post->id])}}">delete</a>
            </td> 
        </tr>
        @endforeach
    </tbody> 
</table>
{!! $posts->render() !!}
@stop