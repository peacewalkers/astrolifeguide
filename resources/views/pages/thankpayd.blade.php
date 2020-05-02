@extends('layouts.app')
@section('head')

@endsection
@section('content')


    <!--Main layout-->
    <div class="container pb-5 page-content">
        <div class="container z-depth-1">


            <!--Section: Content-->
            <section class="dark-grey-text">

                <div class="row pr-lg-5">
                    <div class="col-md-7 mb-4">

                        <div class="view">
                            <img src="{{ asset('astrolifeguide') }}/img/content/about_img1.jpg" class="img-fluid" alt="smaple image" />
                        </div>

                    </div>
                    <div class="col-md-5 d-flex align-items-center">
                        <div>

                            <h3 class="font-weight-bold mb-4">Thank you for submitting your Details</h3>

                            <p class="mb-3">We have received your payment, Please allow us 24hours - 48hours to analyze your birth details and prepare your report you have requested. You will receive a copy of detailed report in the email provided to us.</p>

                            <p> Payment ID: {{ $attributes['razorpay_order_id'] }} </p>
                        </div>
                    </div>
                </div>

            </section>
            <!--Section: Content-->


        </div>
        </div>
    <!--Main layout-->

    <!--/.Footer-->
@endsection
@section('footer_scripts')


@endsection