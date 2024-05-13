@extends('layouts.frontend')
@section('title')
   Our Teachers
@endsection

@push('style')
    <link href="{{ asset('css/stylewelcom.css') }}" rel="stylesheet">
@endpush
@section('content')
<!-- Teachers Section -->
<section id="teachers" class="teachers">
    <div class="container mt-7" data-aos="fade-up">

  
      <div class="row">
        <div class="section-title text-center mb-5">
            <h2>Meet Our Esteemed Faculty</h2>
            <p>Our dedicated teachers are at the heart of our educational excellence, each bringing unique expertise and passion to the classroom.</p>
          </div>
        @foreach ($informations as $teacher)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" style="border: 1px solid #ddd; box-shadow: 2px 2px 10px rgba(0,0,0,0.1);">
              <div class="member-img">
                <img src="https://www.svgheart.com/wp-content/uploads/2021/11/best-teacher-ever-teachers-day-free-svg-file-SvgHeart.Com.png" class="img-fluid" alt="{{ $teacher->tname }}">

              </div>
              <div class="member-info">
                <h4>{{ $teacher->tname }}</h4>
                <span>{{ $teacher->bio }}</span>
                <p> {{ $teacher->subject }} Teacher</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- End Teachers Section -->
  
  
@endsection
