@extends('layouts.app')

@section('content')


    <!--Main layout-->
    <div class="container mt-5 pb-5 page-content">
        <!--Section: Cards-->
        <section class="text-center ">

            <!--Grid row-->
            <div class="row mb-4 wow fadeIn">

                <!--Grid column-->
                <div class="col-lg-9 col-md-3 mb-4">

                    <!--Horoscope Form-->
                    <form class="card" action="/matchmaker" enctype="multipart/form-data" method="post" style="width: 100%;">
                        @csrf
                        <h3 class="my-3  py-2 text-uppercase" style="background-color:#f05f1e;"> Compatibility Report</h3>
                        <input type="hidden" name="reptype" value="Compatibility">
                        <div class="row container">
                            <div class="card-body mx-3 col-md-6 ">
                                <!--Body-->
                                <h5 class="pt-2 text-uppercase">Primary Partner Details</h5>

                                <div class="row">
                                    <div class="md-form col form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <input type="text" id="name" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  value="{{ old('name') }}" required>
                                        <label for="name">Full Name</label>
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="md-form col">
                                        <input type="text" id="Form-email1" name="email" class="form-control" required>
                                        <label for="Form-email1">Email Address</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="md-form col">
                                        <input type="text" name="phone" id="phone" class="form-control" required>
                                        <label for="phone">Phone Number</label>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="md-form col">
                                        <input  type="text" id="date-picker-example" name="dob" class="form-control datepicker" required>
                                        <label for="date-picker-example">Date Of Birth</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="md-form col">
                                        <input type="text" id="input_starttime" name="tob" class="form-control timepicker" required>
                                        <label for="input_starttime">Time Of Birth</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="md-form col">
                                        <input type="text" id="city" name="pob" class="form-control" required>
                                        <label for="city">City Of Birth</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="md-form col">
                                        <input  type="text" id="country" name="cob" class="form-control " required>
                                        <label for="country">Country Of Birth</label>
                                    </div>
                                </div>


                                <div class="row d-flex justify-content-center">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="materialInline1" value="Male" name="gender" required>
                                        <label class="form-check-label" for="materialInline1">Male</label>
                                    </div>
                                    <!-- Material inline 2 -->
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="materialInline2" value="Female" name="gender" required>
                                        <label class="form-check-label" for="materialInline2">Female</label>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body col-md-5">
                                <!--Body-->
                                <h5 class="pt-2 text-uppercase">Partner Details</h5>


                                <!--Accordion wrapper-->
                                <div class="accordion md-accordion accordion-2" id="accordionEx7" role="tablist"
                                     aria-multiselectable="true">

                                    <!-- Accordion card -->
                                    <div class="card">

                                        <!-- Card header -->
                                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading1">
                                            <a data-toggle="collapse" data-parent="#accordionEx7" href="#collapse1" aria-expanded="true"
                                               aria-controls="collapse1">
                                                <h6 class="mb-0 text-uppercase font-thin">
                                                    #1 Matching Partner<i class="fas fa-angle-down rotate-icon"></i>
                                                </h6>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1"
                                             data-parent="#accordionEx7">
                                            <div class="card-body mb-1">
                                                <div class="row">
                                                    <div class="md-form col form-group{{ $errors->has('nameone') ? ' has-danger' : '' }}">
                                                        <input type="text" id="Form-name" name="nameone" class="form-control{{ $errors->has('nameone') ? ' is-invalid' : '' }}"  value="{{ old('nameone') }}" required>
                                                        <label for="Form-name">Full Name</label>
                                                    </div>
                                                    @if ($errors->has('nameone'))
                                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                                                    <strong>{{ $errors->first('nameone') }}</strong>
                                                                </span>
                                                    @endif
                                                </div>

                                                <div class="row">
                                                    <div class="md-form col">
                                                        <input  type="text" id="dobone" name="dobone" class="form-control datepicker" required>
                                                        <label for="dobone">Date Of Birth</label>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                <div class="md-form col">
                                                    <input type="text" id="tobone" name="tobone" class="form-control timepicker" required>
                                                    <label for="tobone">Time Of Birth</label>
                                                </div>

                                                </div>

                                                        <div class="row">
                                                <div class="md-form col">
                                                    <input type="text" id="pobone" name="pobone" class="form-control" required>
                                                    <label for="pobone">City Of Birth</label>
                                                </div>
                                                        </div>
                                                            <div class="row">
                                                <div class="md-form col">
                                                    <input  type="text" id="cobone" name="cobone" class="form-control " required>
                                                    <label for="cobone">Country Of Birth</label>
                                                </div>
                                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->

                                    <!-- Accordion card -->
                                    <div class="card">

                                        <!-- Card header -->
                                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading2">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse2"
                                               aria-expanded="false" aria-controls="collapse2">
                                                <h6 class="mb-0 text-uppercase font-thin">
                                                    #2  Matching Partner<i class="fas fa-angle-down rotate-icon"></i>
                                                </h6>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2"
                                             data-parent="#accordionEx7">
                                            <div class="card-body mb-1 ">
                                                <div class="row">
                                                    <div class="md-form col">
                                                    <input type="text" id="nametwo" name="nametwo" class="form-control">
                                                        <label for="nametwo">Full Name</label>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                <div class="md-form col">
                                                    <input type="text" id="tobtwo" name="tobtwo" class="form-control timepicker">
                                                    <label for="tobtwo">Time Of Birth</label>
                                                </div>
                                                </div>

                                                <div class="row">

                                                <div class="md-form col">
                                                    <input  type="text" id="dobtwo" name="dobtwo" class="form-control datepicker">
                                                    <label for="dobtwo">Date Of Birth</label>
                                                </div> </div>

                                                <div class="row">

                                                <div class="md-form col">
                                                    <input type="text" id="pobtwo" name="pobtwo" class="form-control">
                                                    <label for="pobtwo">City Of Birth</label>
                                                </div> </div>

                                                <div class="row">

                                                <div class="md-form col">
                                                    <input  type="text" id="cobtwo" name="cobtwo" class="form-control ">
                                                    <label for="cobtwo">Country Of Birth</label>
                                                </div> </div>

                                                <div class="row">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->

                                    <!-- Accordion card -->
                                    <div class="card">

                                        <!-- Card header -->
                                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="heading3">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx7" href="#collapse3"
                                               aria-expanded="false" aria-controls="collapse3">
                                                <h6 class="mb-0 text-uppercase font-thin">
                                                    #3  Matching Partner <i class="fas fa-angle-down rotate-icon"></i>
                                                </h6>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3"
                                             data-parent="#accordionEx7">
                                            <div class="card-body mb-1">
                                                <div class="row">
                                                    <div class="md-form col">
                                                    <input type="text" id="namethree" name="namethree" class="form-control">
                                                        <label for="namethree">Full Name</label>
                                                    </div>
                                                </div>

                                            <div class="row">
                                                <div class="md-form col">
                                                    <input type="text" id="tobthree" name="tobthree" class="form-control timepicker">
                                                    <label for="tobthree">Time Of Birth</label>
                                                </div>
                                            </div>

                                                <div class="row">
                                                <div class="md-form col">
                                                    <input  type="text" id="dobthree" name="dobthree" class="form-control datepicker">
                                                    <label for="dobthree">Date Of Birth</label>
                                                </div>
                                                </div>

                                                <div class="row">
                                                <div class="md-form col">
                                                    <input type="text" id="pobthree" name="pobthree" class="form-control">
                                                    <label for="pobthree">City Of Birth</label>
                                                </div>
                                                </div>

                                                <div class="row">
                                                <div class="md-form col">
                                                    <input  type="text" id="cobthree" name="cobthree" class="form-control ">
                                                    <label for="cobthree">Country Of Birth</label>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!--/.Accordion wrapper-->


                            </div>
                        </div>

                        <div class="mx-auto md-form" style="width: 80%;">
                            <textarea id="textarea-char-counter" class="form-control md-textarea" name="comments" length="120" rows="3" required></textarea>
                            <label for="textarea-char-counter">Please post your Query*</label>
                        </div>

                        <select class="mdb-select md-form mx-auto formselec" name="reftype" id="reftype" onchange="changeFunc();" required >
                            <option value="" disabled selected style="width: 80%;">How Did You Know About Astrolifeguide.com</option>
                            <option value="SMM">Social Media</option>
                            <option value="EU">Existing User</option>
                            <option value="PM">Print Media</option>
                            <option value="WOM">Friend Or Relative</option>
                        </select>

                        <div class="md-form">
                            <textarea id="refdetails" class="form-control md-textarea mx-auto" name="refdetails" id="refdetails" style="display:none; width: 80%;" length="50" rows="1"></textarea>
                            <label style="display:none;"    for="refdetails">Referred By Details</label>
                        </div>
                        <div class="col-sm-10 container text-center formbutton">
                            <p class="  my-2"> Detailed Report :  2500/-</p>

                            <button type="submit"  name="submit" data-amount="1000"  class="btn text-white btn-md">Place Order</button>
                        </div>


                    </form>
                    <!--/.Card-->

                </div>
            </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-3 mb-4">

                    <!--Card one-->
                    <div class="card mb-4 serviceside " style="min-height:550px;" >

                        <!--Card image-->
                        <div class="view overlay my-5">
                            <img src="{{ asset('astrolifeguide') }}/img/services/matrimony.png" class="mx-auto card-img-top"
                                 alt="">
                            <a href="http://birthstarmatrimony.com/" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body px-1 py-0">
                            <!--Title-->
                            <a href="#">
                                <h4 class="card-title Bold bold">BirthStar Matrimony</h4>
                                <!--Text-->
                                <p class="card-text"> Our verified Matrimonial services</p>
                            </a>
                        </div>

                    </div>
                    <!--/.Card-->

                    <!--Card two-->
                    <div class="card mb-4 serviceside " style="min-height: 315px;">

                        <!--Card image-->
                        <div class="view overlay">
                            <img src="{{ asset('astrolifeguide') }}/img/services/marriage3.jpg" style="width:55%;" class="mx-auto card-img-top"
                                 alt="">
                            <a href="https://mdbootstrap.com/angular/" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body px-0 py-1">
                            <!--Title-->
                            <a href="#">
                                <h4 class="card-title">Marriage Report</h4>
                                <!--Text-->
                                <p class="card-text"> The Marriage Report and remedies are given on the basis of accurate horoscope birth chart reading.  </p>
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