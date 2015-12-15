@extends('template')
@section('posts')

@foreach($posts as $post)
<div class="blog-post">
    <h2 class="blog-post-title">{{$post->title}}</h2>
    <p class="blog-post-meta">{{$post->created_at}} by <a href="#">Autor</a></p>
   
    @foreach($post->tags as $tag)
    <span class="label label-primary"><i class="glyphicon glyphicon-tag"></i> {{$tag->name}}</span>
    @endforeach
    

    <div class='blog-post-text'>
        {{$post->content}}
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">Comentários</div>
        
        @foreach($post->comments as $comment)
        <div class="panel-body">
            <p class="blog-post-meta">30-12-2015 by <a href="#">{{$comment->name}}</a></p>
            <div class='blog-post-comment'>                   
                {{$comment->comment}}
            </div>
        </div>
        @endforeach
                          
    </div>  
</div>
@endforeach
{!! $posts->render() !!}
@stop

