@extends('layouts.app')

@section('content')


    <!--Main layout-->
    <div class="container  pb-5 page-content">
        <!--Section: Cards-->
            <section class="text-center ">

                <!--Grid row-->
                <div class="row mb-4 wow fadeIn">

                    <!--Grid column-->
                    <div class="d-none d-md-block col-lg-3 col-md-3 mb-4">

                        <!--Card one-->
                        <div class="card mb-4 serviceside ">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="{{ asset('astrolifeguide') }}/img/services/Career.png" style="width:40%;" class="mx-auto card-img-top"
                                     alt="">
                                <a href="/services/career" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body  px-1 py-0">
                                <!--Title-->
                                <a href="/services/career">
                                <div style="font-size: 18px;" class="card-title">Career Report</div>
                                <!--Text-->
                                <p class="card-text"> The Career Prediction and remedies are given on the basis of accurate horoscope birth chart reading.  </p>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->


                        <!--Card two-->
                        <div class="card mb-4 serviceside ">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="{{ asset('astrolifeguide') }}/img/services/marriage3.jpg" style="width: 40%;" class="mx-auto card-img-top"
                                     alt="">
                                <a href="/services/marriage" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body px-1 py-0">
                                <!--Title-->
                                <a href="/services/marriage">
                                    <div style="font-size: 18px;" class="card-title">Marriage Report</div>
                                    <!--Text-->
                                    <p class="card-text"> Get your marriage predictions and appropriate time for marriage according to your horoscope.  </p>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                        <!--Card three-->
                        <div class="card mb-4 serviceside ">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="{{ asset('astrolifeguide') }}/img/services/child.jpg" style="width:40%;" class="mx-auto card-img-top"
                                     alt="">
                                <a href="/services/child" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body px-0 py-1">
                                <!--Title-->
                                <a href="/services/child">
                                    <div style="font-size: 18px;" class="card-title">Child Report</div>
                                    <!--Text-->
                                    <p class="card-text  px-1 py-0"> The Career Prediction and remedies are given on the basis of accurate horoscope birth chart reading.  </p>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-6 col-md-3 mb-4 serviceform">

                        <!--Horoscope Form-->
                        <form class="card" action="/horoscope" enctype="multipart/form-data" method="post" style="width: 100%;">
                            @csrf
                            <h5 class="my-3  py-2 text-uppercase text-white" style="background-color:#f05f1e;"> Sade Sati Report</h5>
                            <input type="hidden" name="reptype" value="SadeSati">

                            <div class="card-body mx-4">
                                <!--Body-->
                                <div class="row">
                                    <div class="md-form col form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <input type="text" id="Form-name" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  value="{{ old('name') }}">
                                        <label for="Form-name">Full Name</label>
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>



                                <div class="row">
                                    <div class="md-form col">
                                        <input type="text" id="Form-email1" name="email" class="form-control">
                                        <label for="Form-email1">Email Address</label>
                                    </div>

                                    <div class="md-form col">
                                        <input type="text" name="phone" id="phone" class="form-control">
                                        <label for="phone">Phone Number</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="md-form col">
                                        <input  type="text" id="date-picker-example" name="dob" class="form-control datepicker">
                                        <label for="date-picker-example">Date Of Birth</label>
                                    </div>

                                    <div class="md-form col">
                                        <input type="text" id="input_starttime" name="tob" class="form-control timepicker">
                                        <label for="input_starttime">Time Of Birth</label>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="md-form col">
                                        <input  type="text" id="country" name="cob" class="form-control ">
                                        <label for="country">Country Of Birth</label>
                                    </div>

                                    <div class="md-form col">
                                        <input type="text" id="city" name="pob" class="form-control">
                                        <label for="city">City Of Birth</label>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="materialInline1" value="Male" name="gender">
                                        <label class="form-check-label" for="materialInline1">Male</label>
                                    </div>
                                    <!-- Material inline 2 -->
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="materialInline2" value="Female" name="gender">
                                        <label class="form-check-label" for="materialInline2">Female</label>
                                    </div>
                                </div>

                                <div class="md-form">
                                    <textarea id="textarea-char-counter" class="form-control md-textarea" name="comments" length="120" rows="3"></textarea>
                                    <label for="textarea-char-counter">Please post your Query*</label>
                                </div>

                                <select class="mdb-select md-form" name="reftype" id="reftype" onchange="changeFunc();">
                                    <option value="" disabled selected>How Did You Know About Astrolifeguide.com</option>
                                    <option value="SMM">Social Media</option>
                                    <option value="EU">Existing User</option>
                                    <option value="PM">Print Media</option>
                                    <option value="WOM">Friend Or Relative</option>
                                </select>

                                <div class="md-form">
                                    <textarea id="refdetails" class="form-control md-textarea" name="refdetails" id="refdetails" style="display:none;" length="50" rows="1"></textarea>
                                    <label style="display:none;"    for="refdetails">Referred By Details</label>
                                </div>


                                <div class="col-sm-12 mt-4 text-center formbutton">
                                    <p class="  my-2"> Detailed Report :  1200/-</p>
                                    <button type="submit"  name="submit" data-amount="1000"  class="mt-4 btn text-white btn-md">Submit Details</button>
                                </div>
                            </div>
                        </form>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-3 mb-4">

                        <!--Card one-->
                        <div class="card mb-4 serviceside ">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="{{ asset('astrolifeguide') }}/img/services/kalasarpa.png" style="width:40%;" class="mx-auto card-img-top"
                                     alt="">
                                <a href="/services/kalasarpa" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body px-1 py-0">
                                <!--Title-->
                                <a href="/services/kalasarpa">
                                    <div style="font-size: 18px;" class="card-title">Kalasarpa Dosha Report</div>
                                    <!--Text-->
                                    <p class="card-text">  Know whether there is a Kala Sarpa Dosh in your birth chart or not ,Don't know or unsure</p>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                        <!--Card two-->
                        <div class="card mb-4 serviceside ">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="{{ asset('astrolifeguide') }}/img/services/manglik.jpg" style="width:55%;" class="mx-auto card-img-top"
                                     alt="">
                                <a href="/services/matchmaker" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body px-0 py-1">
                                <!--Title-->
                                <a href="/services/matchmaker">
                                    <div style="font-size: 18px;" class="card-title">Compatibility Report</div>
                                    <!--Text-->
                                    <p class="card-text"> The Career Prediction and remedies are given on the basis of accurate horoscope birth chart reading.  </p>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                        <!--Card three-->
                        <div class="card mb-4 serviceside ">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="{{ asset('astrolifeguide') }}/img/services/vastu.jpg" style="width:40%;" class="mx-auto card-img-top"
                                     alt="">
                                <a href="/services/vastu" target="_blank">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body px-0 py-1">
                                <!--Title-->
                                <a href="/services/vastu">
                                    <div style="font-size: 18px;" class="card-title">Vastu Report</div>
                                    <!--Text-->
                                    <p class="card-text"> The Vastu Report are given on the basis of accurate horoscope birth chart reading.  </p>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->


                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Cards-->

        </div>
    <!--Main layout-->

    <!--/.Footer-->
@endsection
@section('footer_scripts')

    @include('scripts.datetime')

@endsection