@extends('template')
@section('posts')

@foreach($posts as $post)
<div class="blog-post">
    <h2 class="blog-post-title">{{$post['title']}}</h2>
    <p class="blog-post-meta">{{$post['date']}} by <a href="#">{{$post['author']}}</a></p>
    @foreach($post['tags'] as $tag)
    <span class="label label-primary">{{$tag}}</span>
    @endforeach

    <div class='blog-post-text'>
        {{$post['text']}}
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">Comentários</div>
        @foreach($post['comments'] as $comment)
        <div class="panel-body">
            <p class="blog-post-meta">{{$comment['date']}}, 2015 by <a href="#">{{$comment['name']}}</a></p>
            <div class='blog-post-comment'>
                {{$comment['text']}}
            </div>

        </div>
        @endforeach                   
    </div>  
</div>
@endforeach
@stop