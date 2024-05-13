@extends('layouts.frontend')
@section('title')
    Welcom
@endsection
@push('style')
    <link href="{{ asset('css/stylewelcom.css') }}" rel="stylesheet">
@endpush
@section('content')
<section id="hero" class="d-flex align-items-center mt-6">
    <div class="container">
        <h1>Welcome to High School</h1>
        <h2>Empowering Students to Achieve Academic Excellence</h2>
      <a href="#" class="btn-get-started scrollto">Get Started</a>
    </div>
</section>
@endsection


