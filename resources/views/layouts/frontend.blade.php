<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('css/stylewelcom.css') }}" rel="stylesheet">
    
@stack('styles')

    <title>@yield('title')</title>
</head>

<body>
    <!--------content-------------->
    <div class="page-wrapper ">

    <div class="page-wrapper ">
    <div class="topbar d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between mt-4 mb-0">
            <div class="contact-info d-flex align-items-center">
                <i class="fa fa-envelope"></i> <a href="mailto:contact@example.com">contact@School.com</a>
                <i class="fa fa-phone"></i> <a href="tel:05689383">0568855109</a>
            </div>
            <div class="d-none d-lg-flex social-links align-items-center">
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-linkedin"></a>
            </div>
        </div>
    </div>
    </div>
    <div class="page-wrapper  ">
        <nav class="navbar navbar-expand-lg bg-light ">
            <div class="container-fluid fixed ">
              <div>
                <a href="" class=" me-auto">
                 School </a>
              </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  justify-content-center navbar-light" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item a12" >
                  <a class="nav-link " aria-current="page" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item a1">
                  <a class="nav-link" href="">About Us</a>
                </li>
                <li class="nav-item a1">
                  <a class="nav-link" href="">Our Students</a>
                </li>
                <li class="nav-item a1">
                  <a class="nav-link" href="{{ route('frontend.teachers.show') }}">Our Teachers</a>
                </li>

                <li class="nav-item a1">
                  <a class="nav-link" href="">Admissions</a>
                </li>
                <li class="nav-item a1">
                  <a class="nav-link" href="">Contact us</a>
                </li>
              </ul>
            </div>
          </div>
      </nav>
    </div>
        <!----------nav---------------->
       
     
        <!----------main---------------->
        <div class="main mt-3">
            @yield('content')
        </div>
        <!----------main---------------->



    </div>

</div>
    <!--------content----------->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


    @stack('scripts')
</body>

</html>
