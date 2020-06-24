@extends('layouts.main')
@section('content')
<h1 class="mb-2">{{$post->title}}</h1>
<a class="text-primary" href="{{route('posts.edit', $post->id)}}">Edit post</a>
<form class="d-inline" action="{{route('posts.destroy', $post->id)}}" method="POST">
@csrf
@method('DELETE')

<input class="btn btn-sm btn-danger" type="submit" value="Delete">
</form>
<p class="mt-5">{{$post->body}}</p>
 
<section class="mt-5">
    <h4>Tags</h4>
    @forelse ($post->tags as $tag)
        <span class="badge badge-pill badge-primary">{{$tag->name}}</span>
    @empty
        <p>No actual tags for this post</p>
    @endforelse
</section>
@endsection