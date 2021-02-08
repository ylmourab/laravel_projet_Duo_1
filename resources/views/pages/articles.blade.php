@extends('template.main')
@section('content')
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">
  
          <div class="row">
          
       
            @foreach ($dataArticle as $item)
                <div class="col-lg-4">
                  <h3>{{$item->title}}</h3>
                <div class="box">
                  <span>{{$item->num}}</span>
                  <h4>{{$item->subtitle}}</h4>
                  <p>{{$item->text}}</p>
                </div>
              </div>
                
            @endforeach
  
  
        </div>
      </section><!-- End Why Us Section -->
@endsection