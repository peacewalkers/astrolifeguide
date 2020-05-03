@extends('layouts.app')

@section('content')

    <!-- hs About Title End -->
    <!-- hs contact us Title Start -->
    <div class="hs_contact_tittle_main_wrapper">
        <div class="container">
            <div class="row">
                <!-- Section: Contact v.1 -->
                <section class="my-5">
                    <!-- Section heading -->
                    <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
                    <!-- Section description -->

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-lg-5 mb-lg-0 mb-4">

                            <!-- Form with header -->
                            <div class="card">
                                <div class="card-body">
                                    <!-- Header -->
                                    <div class="form-header" style="background-color: #038C01;">
                                        <h4 class="mt-2 p-1 text-white"><i class="fas fa-envelope"></i> Write to us:</h4>
                                    </div>
                                    <p>Please write in details, we will get back to you as early as possible.</p>
                                    <!-- Body -->
                                    <form method="POST" action="/thankyou" enctype="multipart/form-data">
                                        @csrf

                                        <div class="md-form">

                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" >
                                        <label for="name">Your name</label>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif
                                    </div>

                                    <div class="md-form mt-4">

                                        <input id="phone" type="tel" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" >
                                        <label for="phone">Phone Number</label>

                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                        <div class="md-form mt-4">

                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >
                                        <label for="email">Your email</label>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                        <div class="md-form mt-4">
                                        <input id="subject" type="text" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" name="subject" value="{{ old('subject') }}" >
                                        <label for="subject">Subject</label>

                                        @if ($errors->has('subject'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                        <div class="md-form mt-4">
                                            <textarea id="message" type="text" class="md-textarea form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" value="{{ old('message') }}" col="2" ></textarea>
                                        <label for="message">Your message</label>

                                        @if ($errors->has('message'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="text-center mt-4">
                                        <button class="btn text-white" name="submit" type="submit" style="background-color: #038C01">Send</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Form with header -->

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-7">

                            <!--Google map-->
                            <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
                                <iframe src="https://maps.google.com/maps?q=8-2-350%2F6%2FA%2C%20Devarkonda%20Bastz%20Rd%2C%2C%20Devarkonda%20Bastz%20Rd%2C%20Green%20Valley%2C%20Banjara%20Hills%2C%20Hyderabad%2C%20Telangana%20500873&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                                        style="border:0" allowfullscreen></iframe>
                            </div>
                            <!-- Buttons-->
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <a class="btn-floating blue accent-1">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </a>
                                    <p>1st Floor, Jyothi Square, Banjara Hills</p>
                                    <p class="mb-md-0">Hyderabad, India</p>
                                </div>
                                <div class="col-md-4">
                                    <a class="btn-floating blue accent-1">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                    <p>+91 93932 55299</p>
                                    <p class="mb-md-0">Mon - Fri, 10:00-22:00</p>
                                </div>
                                <div class="col-md-4">
                                    <a class="btn-floating blue accent-1">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                    <p>info@astrolifeguide.com</p>
                                </div>
                            </div>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </section>
                <!-- Section: Contact v.1 -->
            </div>
        </div>
    </div>

@endsection
