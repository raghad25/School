@extends('layouts.dashboard')

@section('title')
    Create Classe
@endsection

@section('content')
<h5>Edit page : Class  name:  {{ $class->cname }}</h5>

<a href="{{ route('dashboard.classes') }}" class="btn btn-info">Back</a>
    <div class="section" style=
    "
     width:70%;
    margin:auto;
    border-radius: 25px; 
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
    padding:20px;

    ">
<form action="{{ route('dashboard.Classes.update', $class->id )}}" method="POST">
    @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="className" class="form-label">Class Name</label>
            <input type="text" class="form-control" value="{{ $class->cname }}"name="cname" id="className" placeholder="Enter Class Name ">
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" name="subject" value="{{ $class->subject }}"id="subject" placeholder="Enter Subject">
        </div>
       
        <div class="mb-3">
            <label for="classroomLocation" class="form-label">Classroom Location</label>
            <input type="text" class="form-control" id="classroomLocation" value="{{ $class->location}}" name="location"placeholder="Enter Classroom Location">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Add Class</button>
        </div>
        </div>
</form>
     
@endsection
@push('styles')
<link rel="stylesheet" href="style.css">
@endpush
@push('scripts')
<script src=""></script>
@endpush
