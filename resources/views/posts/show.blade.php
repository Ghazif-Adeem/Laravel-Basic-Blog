@extends('layouts.app')

@section('content')
    <a href="/posts"><button class="btn btn-primary">Go Back</button></a>
    <h1>{{ $post->title }}</h1>
    <div class="row">
        <div class="col-md-12">
            <img style="width: 600px; height: 800px" src="/storage/images/{{$post->image}}" alt="{{$post->title}}">
        </div>
    </div>
    <p>{{ $post->body}}</p>
    <hr>
    <small>Written on {{ $post->created_at }}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id === $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit Post</a>
            <form method="POST" action="/posts/{{$post->id}}">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-primary">Delete</button>
            </form>
        @endif
    @endif
@endsection
