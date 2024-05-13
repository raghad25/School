@extends('layouts.dashboard')

@section('title')
    Create Students
@endsection

@section('content')
<a href="{{ route('dashboard.teachers') }}" class="btn btn-info">Back</a>
    <div class="section" style=
    "
    width:70%;
    margin:auto;
    border-radius: 25px; 
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
    padding:20px;

    ">
       <form action="{{ route('dashboard.teachers.store') }}" method="POST">
        @csrf
    
      <div class="mb-3">
        <label for="teacherName" class="form-label">Teacher's Name</label>
        <input type="text" class="form-control" id="teacherName" name="tname" placeholder="Enter Teacher's Name" required>
    </div>
    <div class="mb-3">
        <label for="teacherEmail" class="form-label">Email</label>
        <input type="email" class="form-control" id="teacherEmail" name="email" placeholder="Enter Email" required>
    </div>
    <div class="mb-3">
        <label for="subjectTaught" class="form-label">Subject(s) Taught</label>
        <input type="text" class="form-control" id="subjectTaught"  name="subject" placeholder="Enter Subject(s) Taught"required>
    </div>
    <div class="mb-3">
        <label for="classSchedule" class="form-label">Class Schedule</label>
        <textarea class="form-control" id="classSchedule" rows="3" placeholder="Enter Class Schedule" name="schedule"required></textarea>
    </div>
    <div class="mb-3">
        <label for="classSchedule" class="form-label">Bio</label>
        <textarea class="form-control" id="bio" rows="3" placeholder="Enter your Bio" name="bio"required></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Add Teacher</button>
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
