@extends('layouts.dashboard')

@section('title')
    Show Parent
@endsection

@section('content')
<a href="{{ route('dashboard.parents') }}" class="btn btn-info">Back</a>

 <div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Parent Details</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> 
                            <strong>ID:</strong> {{ $parent->id }}
                        </li>
                        <li class="list-group-item">
                            <strong>Parent's Name :</strong> {{ $parent->pname }} 
                        </li>
                        <li class="list-group-item">
                            <strong>Email:</strong> {{ $parent->email  }}
                        </li>
                        <li class="list-group-item">
                            <strong>Phone Number:</strong> {{ $parent->phone }}
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
