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
<form action="{{ route('dashboard.Classes.update',$student->id )}}" method="POST">
    @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="className" class="form-label"> Name</label>
            <input type="text" class="form-control" value="{{$student->name }}"name="name" id="className" placeholder="Student Name ">
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Description:</label>
            <input type="text" class="form-control" name="des" value="{{ $student->des }}"id="des" placeholder="Description">
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
