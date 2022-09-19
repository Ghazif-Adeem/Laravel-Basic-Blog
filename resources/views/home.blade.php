@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

{{--                    {{ auth()->user()->name }}--}}

{{--                    {{ __('You are logged in!') }}--}}

                    <a href="/posts/create" class="btn btn-info">Create Posts</a>
                    <hr>
                    <h3>Your Blog Posts</h3>
                    @if(count($posts) > 0)

                    <table class="table table-dark table-hover text-center">
                        <thead>
                            <tr class="font-weight-bolder">
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->body }}</td>
                                <td><a href="/posts/{{$post->id}}/edit">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    @else
                        <p>No posts, yet!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
