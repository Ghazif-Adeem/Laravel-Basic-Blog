@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    <form method="POST" action="/posts/{{$post->id}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $post->title }}">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea id="body" name="body" class="form-control" rows="10">{{ $post->body }}</textarea>
        </div>

        <div class="form-group">
            <input type="file" name="image">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>


    </form>
@endsection
