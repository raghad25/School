@extends('layouts.dashboard')

@section('title')
    Create Parents
@endsection

@section('content')
<h5>Edit page : Parent  name:  {{ $parent->pname }}</h5>
<a href="{{ route('dashboard.parents') }}" class="btn btn-info">Back</a>
    <div class="section" style=
    "
     width:70%;
    margin:auto;
    border-radius: 25px; 
     box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
    padding:20px;

    ">
  <form action="{{ route('dashboard.parents.update',$parent->id) }}"  method="POST">
    @csrf
    @method('PUT')

 <div class="mb-3">
    <label for="parentName" class="form-label">Parent's Name</label>
    <input type="text" class="form-control" name="pname" value="{{ $parent->pname }}" id="parentName" placeholder="Enter Parent's Name" required>
</div>
<div class="mb-3">
    <label for="parentEmail" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" value="{{ $parent->email }}" id="parentEmail" placeholder="Enter Email" required>
</div>
<div class="mb-3">
    <label for="parentPhone" class="form-label">Phone Number</label>
    <input type="tel" class="form-control" id="parentPhone"name="phone" value="{{ $parent->phone }}" placeholder="Enter Phone Number"required>
</div>
{{-- <div class="mb-3">
    <label for="studentName" class="form-label">Student(s) Name</label>
    <input type="text" class="form-control" id="studentName" placeholder="Enter Student(s) Name">
</div> --}}
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Update Parent</button>
</div>
</form>

@endsection
@push('styles')
<link rel="stylesheet" href="style.css">
@endpush
@push('scripts')
<script src=""></script>
@endpush
