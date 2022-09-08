@extends('layouts.frontbase')

@section('title', 'Verde Estates')
@section('content')
<div class="hero page-inner overlay" style="background-image: url('{{asset('assets')}}/images/hero_bg_1.jpg')">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Properties</h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            Properties
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="section section-properties">
    <div class="container">
        <div class="row">
            @foreach($data as $rs)
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="property-item mb-30">
                    <a href="property-single.html" class="img">
                        <img src="{{ Storage::url($rs->image)}}" alt="Image" class="img-fluid" />
                    </a>
                    <div class="property-content">
                        <div class="price mb-2"><span>{{$rs->price}}</span></div>
                        <div>
                            <span class="d-block mb-2 text-black-50">{{$rs->address}}</span>
                            <span class="city d-block mb-3">{{$rs->title}}</span>
                            <div class="specs d-flex mb-4">
                            </div>
                            <a href="{{route('service',['id'=>$rs->id])}}" class="btn btn-primary py-2 px-3">See details</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- .item -->
        </div>
    </div>
</div>
</div>
@endsection