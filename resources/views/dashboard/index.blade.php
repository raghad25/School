@extends('layouts.dashboard')

@section('title')
    Home Page
@endsection
@push('styles')

<link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
@endpush

@section('content')
    <!------card---->
    <div class="card">
        <div class="card-header">
            Programming By : {{ $programming_by }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <!------card---->
    <div class="section mt-1">
        <div class="card text-bg-dark">
            <img src="{{ asset('images/library.jpg') }}" class="card-img" alt="..." width="300" height="150">
            <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
@endsection
