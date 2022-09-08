@extends('layouts.frontbase')

@section('title', 'Verde Estates')
@section('content')

<div class="hero page-inner overlay" style="background-image:url({{asset('assets')}}/images/hero_bg_3.jpg)">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-9 text-center mt-5">
        <h1 class="heading" data-aos="fade-up">
          {{$data->title}}
        </h1>

        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
          <ol class="breadcrumb text-center justify-content-center">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">
              <a href="properties.html">Properties</a>
            </li>
            <li class="breadcrumb-item active text-white-50" aria-current="page">
              {{$data->title}}
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>

<div class="section">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-7">
        <div class="img-property-slide-wrap">
          <div class="img-property-slide">
            <img src="{{ Storage::url($data->image)}}" alt="Image" class="img-fluid" />
          </div>
          <form action="{{route('storeappointment')}}" method="POST">
            @csrf
            <div class="row">
              <input type="hidden" name="service_id" required="required" value="{{$data->id}}">
              <div class="col-6 mb-3">
                <input type="text" name="name" class="form-control" placeholder="Your Name">
              </div>
              <div class="col-6 mb-3">
                <input type="email" name="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="col-12 mb-3">
                <input type="text" name="phone" class="form-control" placeholder="Your Phone">
              </div>
              <div class="col-12 mb-3">
                <input type="text" name="address" class="form-control" placeholder="Address">
              </div>
              <div class="col-12 mb-3">
                <input type="date" name="date" class="form-control" placeholder="Date">
              </div>
              <div class="col-12 mb-3">
                <input type="time" name="time" class="form-control" placeholder="Time">
              </div>
              <input type="hidden" class="input" name="status" value="New"/>
              <div class="col-12 mb-3">
                <textarea id="" cols="30" rows="7" class="form-control" name="note" placeholder="Message"></textarea>
              </div>

              <div class="col-12">
                <input type="submit" value="Send Appointment" class="btn btn-primary">
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-4">
        <h2 class="heading text-primary">{{$data->title}}</h2>
        <p class="meta">{{$data->address}}</p>
        <p class="meta">{{$data->price}}</p>
        <p class="text-black-50">
          {!! $data->detail !!}
        </p>
        <div class="d-block agent-box p-5">
          <div class="img mb-4">
            <img src="{{asset('assets')}}/images/person_2-min.jpg" alt="Image" class="img-fluid" />
          </div>
          <div class="text">
            <h3 class="mb-0">Alicia Huston</h3>
            <div class="meta mb-3">Real Estate</div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Ratione laborum quo quos omnis sed magnam id ducimus saepe
            </p>
            <ul class="list-unstyled social dark-hover d-flex">
              <li class="me-1">
                <a href="#"><span class="icon-instagram"></span></a>
              </li>
              <li class="me-1">
                <a href="#"><span class="icon-twitter"></span></a>
              </li>
              <li class="me-1">
                <a href="#"><span class="icon-facebook"></span></a>
              </li>
              <li class="me-1">
                <a href="#"><span class="icon-linkedin"></span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection