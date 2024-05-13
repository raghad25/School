@extends('layouts.dashboard')

@section('title')
    Show Students
@endsection

@section('content')
<h5>Edit page : Student name:  {{ $student->student_name }} - id : {{ $student->id }}</h5>
<a href="{{ route('dashboard.students') }}" class="btn btn-info">Back</a>
    <div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Student Details</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> 
                            <strong>ID:</strong> {{  $student->id }}
                        </li>
                        <li class="list-group-item">
                            <strong>Student Name :</strong> {{  $student->name }} 
                        </li>
                        <li class="list-group-item">
                            <strong>Description :</strong> {{ $student->des  }}
                        </li>
                       
                     
                    </ul>
                </div>
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
