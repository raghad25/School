@extends('layouts.dashboard')

@section('title')
    Show Teachers
@endsection

@section('content')
<a href="{{ route('dashboard.teachers') }}" class="btn btn-info">Back</a>

 <div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Teacher Details</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> 
                            <strong>ID:</strong> {{ $teacher->id }}
                        </li>
                        <li class="list-group-item">
                            <strong>Teacher's Name:</strong> {{ $teacher->tname }} 
                        </li>
                        <li class="list-group-item">
                            <strong>Bio:</strong> {{ $teacher->bio }} 
                        </li>
                        <li class="list-group-item">
                            <strong>Email:</strong> {{ $teacher->email }}
                        </li>
                        <li class="list-group-item">
                            <strong>Subjects Taught:</strong> {{ $teacher->subject }}
                        </li>
                        <li class="list-group-item">
                            <strong>Class Schedule:</strong> {{ $teacher->schedule }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('styles')
<link rel="stylesheet" href="style.css">
@endpush
@push('scripts')
<script src=""></script>
@endpush
