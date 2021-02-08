@extends('template.main')
@section('content')
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>{{$dataHomeElement[0]->titre1}}</h1>
          <ul>
            <li><i class="ri-check-line"></i> </li>
            <li><i class="ri-check-line"></i> {{$dataHomeElement[0]->subtitre2}}</li>
            <li><i class="ri-check-line"></i>{{$dataHomeElement[0]->subtitre3}}</li>
          </ul>
          <div class="mt-3">
            <a href="#about" class="btn-get-started scrollto">{{$dataHomeElement[0]->btn1}}</a>
            <a href="" class="btn-get-quote">{{$dataHomeElement[0]->btn2}}</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{$dataHomeElement[0]->img}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>{{$dataHomeElement[0]->titre2}}</h2>
            <h3>{{$dataHomeElement[0]->subtitre}}</h3>
            {{-- rajouter une image --}}
            <img class="img-fluid w-25" src="../img/orange.jpg" alt="orange">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              {{$dataHomeElement[0]->description1}}
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
            </ul>
            <p class="font-italic">
              {{$dataHomeElement[0]->description2}}
            </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
@endsection