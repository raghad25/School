@extends('layouts.dashboard')

@section('title')
    Show Class
@endsection

@section('content')
<a href="{{ route('dashboard.classes') }}" class="btn btn-info">Back</a>

 <div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Class Details</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> 
                            <strong>ID:</strong> {{ $class->id }}
                        </li>
                        <li class="list-group-item">
                            <strong>Class Name:</strong> {{ $class->cname }} 
                        </li>
                        <li class="list-group-item">
                            <strong>Subject	:</strong> {{ $class->subject  }}
                        </li>
                        <li class="list-group-item">
                            <strong>Classroom Location:</strong> {{ $class->location }}
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
