@extends('layouts.dashboard')

@section('title')
    Create Students
@endsection

@section('content')
<a href="{{ route('dashboard.students') }}" class="btn btn-info">Back</a>
    <div class="section" style=
    "
    width:70%;
    margin:auto;
    background:skyblue;
    padding:10px;

    ">
    <form action="{{ route('dashboard.students.store') }}" method="POST">
    @csrf

           <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Student Name</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="S.N" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Desc</label>
            <textarea name="des" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="">Teachers</label>
            <select name="tid" id="" class="form-control">
                <option value="">Select Teacher</option>
                @foreach ($teachers as $teacher)
                <option value="{{ $teacher->id }}">Teacher Name : {{  $teacher->tname }}</option>

                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="">Parents</label>
            <select name="pid" id="" class="form-control">
                <option value="">Select Parent</option>
                @foreach ($parents as $parent)
                <option value="{{ $parent->id }}">Parent Name : {{  $parent->pname }}</option>

                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="">Classe</label>
            <select name="cid" id="" class="form-control">
                <option value="">Select Class</option>
                @foreach ($class as $c)
                <option value="{{ $c->id }}">Class Name : {{  $c->cname }}</option>

                @endforeach
            </select>
        </div>
 
        <div class="mb-3">
<button class="btn btn-primary" type="submit" >Add Student</button>
   </div>

    </form>

    </div>
@endsection
@push('styles')
<link rel="stylesheet" href="style.css">
@endpush
@push('scripts')
<script src=""></script>
@endpush
