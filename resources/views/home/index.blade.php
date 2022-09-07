@extends('layouts.frontbase')

@section('title', 'Verde Estates')
@section('content')
<div class="site-blocks-cover overlay" style="background-image: url(assets/images/hero_1.jpg);" data-aos="fade" id="home-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
                <h1>Buy and sell real estate properties</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.</p>

            </div>
        </div>
    </div>

    <a href="#howitworks-section" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
</div>


<div class="py-5 bg-light site-section how-it-works" id="howitworks-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="section-title mb-3">How It Works</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="pr-5">
                    <span class="custom-icon flaticon-house text-primary"></span>
                    <h3 class="text-dark">Find Property.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="pr-5">
                    <span class="custom-icon flaticon-coin text-primary"></span>
                    <h3 class="text-dark">Buy Property.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="pr-5">
                    <span class="custom-icon flaticon-home text-primary"></span>
                    <h3 class="text-dark">Make Investment.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section" id="properties-section">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-md-7 text-left">
                <h2 class="section-title mb-3">Properties</h2>
            </div>
            <div class="col-md-5 text-left text-md-right">
                <div class="custom-nav1">
                    <a href="#" class="custom-prev1">Previous</a><span class="mx-3">/</span><a href="#" class="custom-next1">Next</a>
                </div>
            </div>
        </div>

        <div class="owl-carousel nonloop-block-13 mb-5">

            <div class="property">
                <a href="property-single.html">
                    <img src="{{asset('assets')}}/images/property_1.jpg" alt="Image" class="img-fluid">
                </a>
                <div class="prop-details p-3">
                    <div><strong class="price">$3,400,000</strong></div>
                    <div class="mb-2 d-flex justify-content-between">
                        <span class="w border-r">6 beds</span>
                        <span class="w border-r">4 baths</span>
                        <span class="w">4,250 sqft.</span>
                    </div>
                    <div>480 12th, Unit 14, San Francisco, CA</div>
                </div>
            </div>

            <div class="property">
                <a href="property-single.html">
                    <img src="{{asset('assets')}}/images/property_2.jpg" alt="Image" class="img-fluid">
                </a>
                <div class="prop-details p-3">
                    <div><strong class="price">$3,400,000</strong></div>
                    <div class="mb-2 d-flex justify-content-between">
                        <span class="w border-r">6 beds</span>
                        <span class="w border-r">4 baths</span>
                        <span class="w">4,250 sqft.</span>
                    </div>
                    <div>480 12th, Unit 14, San Francisco, CA</div>
                </div>
            </div>

            <div class="property">
                <a href="property-single.html">
                    <img src="{{asset('assets')}}/images/property_3.jpg" alt="Image" class="img-fluid">
                </a>
                <div class="prop-details p-3">
                    <div><strong class="price">$3,400,000</strong></div>
                    <div class="mb-2 d-flex justify-content-between">
                        <span class="w border-r">6 beds</span>
                        <span class="w border-r">4 baths</span>
                        <span class="w">4,250 sqft.</span>
                    </div>
                    <div>480 12th, Unit 14, San Francisco, CA</div>
                </div>
            </div>

            <div class="property">
                <a href="property-single.html">
                    <img src="{{asset('assets')}}/images/property_4.jpg" alt="Image" class="img-fluid">
                </a>
                <div class="prop-details p-3">
                    <div><strong class="price">$3,400,000</strong></div>
                    <div class="mb-2 d-flex justify-content-between">
                        <span class="w border-r">6 beds</span>
                        <span class="w border-r">4 baths</span>
                        <span class="w">4,250 sqft.</span>
                    </div>
                    <div>480 12th, Unit 14, San Francisco, CA</div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="listings.html" class="btn btn-primary btn-block">View All Property Listings</a>
            </div>
        </div>
    </div>
</div>


<section class="site-section border-bottom" id="agents-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-7 text-left">
                <h2 class="section-title mb-3">Agents</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus minima neque tempora reiciendis.</p>
            </div>
        </div>
        <div class="row">


            <div class="col-md-6 col-lg-4 mb-4">
                <div class="team-member">
                    <figure>
                        <ul class="social">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                        <img src="{{asset('assets')}}/images/person_5.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <div class="p-3">
                        <h3 class="mb-2">Kaiara Spencer</h3>
                        <span class="position">Real Estate Agent</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="team-member">
                    <figure>
                        <ul class="social">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                        <img src="{{asset('assets')}}/images/person_6.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <div class="p-3">
                        <h3 class="mb-2">Dave Simpson</h3>
                        <span class="position">Real Estate Agent</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="team-member">
                    <figure>
                        <ul class="social">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                        <img src="{{asset('assets')}}/images/person_7.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <div class="p-3">
                        <h3 class="mb-2">Ben Thompson</h3>
                        <span class="position">Real Estate Agent</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="team-member">
                    <figure>
                        <ul class="social">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                        <img src="{{asset('assets')}}/images/person_8.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <div class="p-3">
                        <h3 class="mb-2">Kyla Stewart</h3>
                        <span class="position">Real Estate Agent</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="team-member">
                    <figure>
                        <ul class="social">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                        <img src="{{asset('assets')}}/images/person_5.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <div class="p-3">
                        <h3 class="mb-2">Kaiara Spencer</h3>
                        <span class="position">Real Estate Agent</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <div class="team-member">
                    <figure>
                        <ul class="social">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                        <img src="{{asset('assets')}}/images/person_6.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <div class="p-3">
                        <h3 class="mb-2">Dave Simpson</h3>
                        <span class="position">Real Estate Agent</span>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>


<section class="site-section" id="about-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">

                <div class="owl-carousel slide-one-item-alt">
                    <img src="{{asset('assets')}}/images/property_1.jpg" alt="Image" class="img-fluid">
                    <img src="{{asset('assets')}}/images/property_2.jpg" alt="Image" class="img-fluid">
                    <img src="{{asset('assets')}}/images/property_3.jpg" alt="Image" class="img-fluid">
                    <img src="{{asset('assets')}}/images/property_4.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="custom-direction">
                    <a href="#" class="custom-prev">Prev</a><a href="#" class="custom-next">Next</a>
                </div>

            </div>
            <div class="col-lg-5 ml-auto">

                <h2 class="section-title mb-3">We Are The Best RealEstate Company</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p>Est qui eos quasi ratione nostrum excepturi id recusandae fugit omnis ullam pariatur itaque nisi voluptas impedit Quo suscipit omnis iste velit maxime.</p>

                <ul class="list-unstyled ul-check success">
                    <li>Placeat maxime animi minus</li>
                    <li>Dolore qui placeat maxime</li>
                    <li>Consectetur adipisicing</li>
                    <li>Lorem ipsum dolor</li>
                    <li>Placeat molestias animi</li>
                </ul>

                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>

            </div>
        </div>
    </div>
</section>



<section class="site-section border-bottom bg-light" id="services-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title mb-3">Services</h2>
            </div>
        </div>
        <div class="row align-items-stretch">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-house"></span></div>
                    <div>
                        <h3>Search Property</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-coin"></span></div>
                    <div>
                        <h3>Buy Property</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-home"></span></div>
                    <div>
                        <h3>Invest a Home</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-flat"></span></div>
                    <div>
                        <h3>Post Properties</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-location"></span></div>
                    <div>
                        <h3>Property Locator</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary flaticon-mobile-phone"></span></div>
                    <div>
                        <h3>Stated Apps</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="site-section testimonial-wrap" id="testimonials-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title mb-3">People Says...</h2>
            </div>
        </div>
    </div>
    <div class="slide-one-item home-slider owl-carousel">
        <div>
            <div class="testimonial">

                <blockquote class="mb-5">
                    <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                </blockquote>

                <figure class="mb-4 d-flex align-items-center justify-content-center">
                    <div><img src="{{asset('assets')}}/images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                    <p>John Smith</p>
                </figure>
            </div>
        </div>
        <div>
            <div class="testimonial">

                <blockquote class="mb-5">
                    <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                </blockquote>
                <figure class="mb-4 d-flex align-items-center justify-content-center">
                    <div><img src="{{asset('assets')}}/images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                    <p>Christine Aguilar</p>
                </figure>

            </div>
        </div>

        <div>
            <div class="testimonial">

                <blockquote class="mb-5">
                    <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                </blockquote>
                <figure class="mb-4 d-flex align-items-center justify-content-center">
                    <div><img src="{{asset('assets')}}/images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                    <p>Robert Spears</p>
                </figure>


            </div>
        </div>

        <div>
            <div class="testimonial">

                <blockquote class="mb-5">
                    <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                </blockquote>
                <figure class="mb-4 d-flex align-items-center justify-content-center">
                    <div><img src="{{asset('assets')}}/images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                    <p>Bruce Rogers</p>
                </figure>

            </div>
        </div>

    </div>
</section>


<section class="site-section" id="news-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title mb-3">News &amp; Events</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="h-entry">
                    <a href="single.html"><img src="images/property_1.jpg" alt="Image" class="img-fluid"></a>
                    <h2 class="font-size-regular"><a href="single.html" class="text-dark">20+ Real Properties for Realtors</a></h2>
                    <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="single.html">News</a></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="h-entry">
                    <a href="single.html"><img src="images/property_2.jpg" alt="Image" class="img-fluid"></a>
                    <h2 class="font-size-regular"><a href="single.html" class="text-dark">20+ Real Properties for Realtors</a></h2>
                    <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="single.html">News</a></div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="h-entry">
                    <a href="single.html"><img src="images/property_3.jpg" alt="Image" class="img-fluid"></a>
                    <h2 class="font-size-regular"><a href="single.html" class="text-dark">20+ Real Properties for Realtors</a></h2>
                    <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="single.html">News</a></div>
                </div>
            </div>

        </div>
    </div>
</section>




<section class="site-section bg-light bg-image" id="contact-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <!-- <h3 class="section-sub-title">Get</h3> -->
                <h2 class="section-title mb-3">Contct Us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 mb-5">



                <form action="#" class="p-5 bg-white">

                    <h2 class="h4 text-black mb-5">Contact Form</h2>

                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="text-black" for="fname">First Name</label>
                            <input type="text" id="fname" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="lname">Last Name</label>
                            <input type="text" id="lname" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="email">Email</label>
                            <input type="email" id="email" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="subject">Subject</label>
                            <input type="subject" id="subject" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                        </div>
                    </div>


                </form>
            </div>
            <div class="col-md-5">

                <div class="p-4 mb-3 bg-white">
                    <p class="mb-0 font-weight-bold">Address</p>
                    <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

                    <p class="mb-0 font-weight-bold">Phone</p>
                    <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

                    <p class="mb-0 font-weight-bold">Email Address</p>
                    <p class="mb-0"><a href="#">youremail@domain.com</a></p>

                </div>

            </div>
        </div>
    </div>
</section>

@endsection