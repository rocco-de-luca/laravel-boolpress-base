@extends('layouts.main')
@section('content')
@if (session('post-deleted'))
   <div class="alert alert-success">
      <p>The following post been successfully deleted:</p> 
      {{session('post-deleted')}}
    </div> 
@endif
    <h1 class="mb-4">Blog Archive</h1>
    @foreach ($posts as $post)
    <article>
    <h2>{{$post->title}}</h2>
    <h4 class="author">{{$post->user->name}}</h4>
    <h4>Created: {{$post->created_at}}, last moified: {{$post->update_at}}</h4>
    <p>{{$post->body}}</p>
    <a href="{{route('posts.show', $post->slug)}}">Read more</a>
    </article>
        @if (!$loop->last)
            <hr>
        @endif
    @endforeach

    <div class="mt5 d-flex justify-content-end">
        <h4>Navigation</h4>
    {{$posts->links()}}
    </div>    
@endsection