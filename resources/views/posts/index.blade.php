@extends('layouts.main')
@section('content')
    <h1>Blog Archive</h1>
    @foreach ($posts as $post)
    <article>
    <h2>{{$post->title}}</h2>
    <h4 class="author">{{$post->user->name}}</h4>
    <h4>Created: {{$post->created_at}}, last moified: {{$post->update_at}}</h4>
    <p>{{$post->body}}</p>
    </article>
        @if (!$loop->last)
            <hr>
        @endif
    @endforeach

    <h4>Navigation</h4>
    {{$posts->links()}}

@endsection