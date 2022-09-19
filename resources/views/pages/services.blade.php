@extends('layouts.app')

@section('title')
    Services
@endsection

@section('content')
    <h1>{{ $title }}</h1>

    @if(count($services) > 0)
        <ul>
        @foreach($services as $service)
            <li>{{ $service }}</li>
        @endforeach
        </ul>
    @else
        <p>No services to offer yet.</p>
    @endif
@endsection
