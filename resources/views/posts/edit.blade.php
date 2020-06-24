@extends('layouts.main')
@section('content')
<h1 class="mb-4">Edit new Post</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
@endif
<form action="{{route('posts.update', $post->id)}}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="title">Title</label>
    <input type="text" class="form-control" value="{{old('title', $post->title)}}"
        name="title" id="title">
</div>
<div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" name="body" id="body">
        {{old('body', $post->body)}}
    </textarea>
</div>

@foreach ($tags as $tag)
    <div class="form-check">
    <input class="form-check-input" type="checkbox" name="tags[]" id="tag-{{$loop->iteration}}"
    value="{{$tag->id}}"
    @if ($post->tags->contains($tag->id))
      checked  
    @endif >
    <label for="tag-{{$loop->iteration}}">{{$tag->name}}</label>
    </div>
@endforeach

    <input class="btn btn-primary mt-4" type="submit" value="Update Post">

</form>
 

@endsection