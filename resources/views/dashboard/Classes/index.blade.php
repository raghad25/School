@extends('layouts.dashboard')
@section('title')
    Classes page
@endsection
@push('style')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endpush
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!------card---->
    <div class="card">
        <div class="card-header">
            Classes page
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="{{ route('dashboard.classes.create') }}" class="btn btn-secondary btn-rounded float-right"><i
                    class="fa fa-plus"></i> Add Class</a>

        </div>
    </div>
    <!------card---->
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if (session('update'))
    <div class="alert alert-info">
        {{ session('update') }}
    </div>
    @endif


  @if (session('delete'))
    <div class="alert alert-warning">
        {{ session('delete') }}
    </div>
 @endif
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-border table-striped">
                    <thead>
                        <tr>

                            <th>ID</th>
                            <th>Class Name</th>
                            <th>Subject</th>
                            <th>Classroom Location</th>
                            <th>Setting</th>
                        </tr>
                    </thead>

                    <tbody>

                    <tbody>
                        @foreach ($informations as $class)
                            <tr>
                                <td>{{ $class->id }}</td>
                                <td>{{ $class->cname }} </td>
                                <td>{{ $class->subject }} </td>
                                <td>{{ $class->location }}</td>

                                <td>

                                    <div class="d-inline-flex">
                                        <form action="{{ route('dashboard.Classes.destroy', $class->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-outline-danger btn-sm rounded-circle m-1 p-2 shadow">
                                                <i class="fa fa-trash-o fa-lg d-flex justify-content-center align-items-center"
                                                    style="font-size:20px;color:rgb(19, 1, 1)"></i>
                                            </button>
                                        </form>
                                        <a href="{{ route('dashboard.Classes.edite', $class->id) }}"
                                            class="btn btn-outline-warning btn-sm rounded-circle m-1 p-2 shadow">
                                            <i class="fa fa-pencil fa-lg d-flex justify-content-center align-items-center"
                                                style="font-size:20px;color:rgb(0, 0, 0)"></i>
                                        </a>
                                        <a href="{{ route('dashboard.Classes.show', $class->id) }}"
                                            class="btn btn-outline-info rounded-circle btn-sm p-2 m-1 shadow">
                                            <i
                                                class="fa fa-eye fa-lg d-flex justify-content-center align-items-center "style="font-size:20px;color:rgb(0, 0, 0)"></i>
                                        </a>
                                    </div>

                                </td>
                            </tr>
                        @endforeach


                    </tbody>


                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
