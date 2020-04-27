@extends('layouts.app')

@section('content')
    <!-- hs About Title Start -->
    <div class="hs_indx_title_main_wrapper">
        <div class="hs_title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 full_width">
                    <div class="hs_indx_title_left_wrapper">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  full_width">
                    <div class="hs_indx_title_right_wrapper">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs About Title End -->
    <!-- hs contact us Title Start -->
    <div class="hs_contact_tittle_main_wrapper ask_astrologer">
        <div class="container">
            <div class="row">
                <div class="col text-center ask_astrologer_button  py-2">
                    <button type="button" class="btn btn-lg"><a href="/horoscope/create">Vedic Reports</a></button>
                </div>
                <div class="col text-center ask_astrologer_button  py-2">
                    <button type="button" class=" btn btn-lg"><a href="/matchmaker/create">Compatibility Report</a></button>
                </div>
            </div>
        </div>
    </div>
    <!-- hs contact us Title End -->

    <!-- hs contact form Start -->
    <div class="hs_contact_indx_form_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   {{-- <div class="hs_about_heading_main_wrapper">
                        <div class="hs_about_heading_wrapper">
                            <h2>Ask <span>Astrologer</span></h2>
                            <h4><span>&nbsp;</span></h4>
                            <p>Get Accurate Remedial Solutions to your problems and know more about your future.</p>
                        </div>
                    </div>--}}
                </div>

            </div>
            <div class="form-wizard">
                    <form action="/horoscope" enctype="multipart/form-data" method="post">
                        @csrf
                    <div class="form-wizard-header">
                        <h4>Please fill the details</h4>
                        <ul class="list-unstyled form-wizard-steps clearfix">
                            <li class="active"><span>1</span></li>
                            <li><span>2</span></li>
                            <li><span>3</span></li>
                            <li><span>4</span></li>
                        </ul>
                    </div>

                        <fieldset class="wizard-fieldset show">
                            <div class="text-dark>" >Please Choose A Report</div>
                            <div class="form-group">
                                <select class="form-control wizard-required" name="reptype" id="rel">
                                    <option value="none" selected disabled hidden></option>
                                    <option value="Child">Child Report</option>
                                    <option value="Marriage">Marriage Report</option>
                                    <option value="Career">Career Report</option>
                                    <option value="Financial">Raja Yoga Report</option>
                                    <option value="Horoscope">Detiled Horoscope</option>
                                </select>
                                <label for="rel" class="wizard-form-text-label">Report Type</label>
                                <div class="wizard-form-error"></div>
                            </div>

                            <div class="form-group clearfix">
                                <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                            </div>
                        </fieldset>

                        <fieldset class="wizard-fieldset">
                        <h5>Contact Details </h5>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control wizard-required" id="fname">
                            <label for="fname" class="wizard-form-text-label">First Name*</label>
                            <div class="wizard-form-error"></div>
                        </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="tel" name="phone" class="form-control wizard-required" id="tel">
                            <label for="tel" class="wizard-form-text-label">Phone*</label>
                            <div class="wizard-form-error"></div>
                        </div>

                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control wizard-required" id="email">
                            <label for="email" class="wizard-form-text-label">Email*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                    </div>
                            <div class="form-group clearfix">
                                <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                            </div>
                    </fieldset>

                    <fieldset class="wizard-fieldset">
                        <h5>Personal Details</h5>

                        <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="date" name="dob" class="form-control wizard-required" id="dob">
                                    <label for="dob" class="wizard-form-text-label">Date Of Birth</label>
                                    <div class="wizard-form-error"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="time" name="tob" class="form-control wizard-required timepicker" id="timeob">
                                    <label for="timeob" class="wizard-form-text-label">Time Of Birth(HH:MM AM)</label>
                                    <div class="wizard-form-error"></div>
                                    <span class="wizard-password-eye"></span>
                                </div>
                        </div>

                        <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="pob" class="form-control wizard-required" id="cityname">
                                    <label for="cityname" class="wizard-form-text-label">City/Town of Birth*</label>
                                    <div class="wizard-form-error"></div>
                                </div>

                                <div class="form-group col-md-6">
                                    <input type="text" name="cob" class="form-control wizard-required" id="countryname">
                                    <label for="countryname" class="wizard-form-text-label">Country of Birth*</label>
                                    <div class="wizard-form-error"></div>
                                </div>
                        </div>


                        <div class="form-group">
                            <div class="wizard-form-radio">
                                <input  value="male" name="gender" id="radio1" type="radio">
                                <label for="radio1"><i class="fa fa-male"> </i> </label>
                            </div>
                            <div class="wizard-form-radio">
                                <input name="gender" value="female" id="radio2" type="radio">
                                <label for="radio2"><i class="fa fa-female" style="color: #ec1d27" > </i> </label>
                            </div>
                            <div class="wizard-form-error"></div>
                        </div>

                        <div class="form-group">
                            <textarea name="comments" class="form-control wizard-required" id="comments" cols="2"></textarea>
                            <label for="comments" class="wizard-form-text-label">Please post your Query*</label>
                            <div class="wizard-form-error"></div>
                        </div>

                        <div class="form-group clearfix">
                            <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                            <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                        </div>
                    </fieldset>

                    <fieldset class="wizard-fieldset">
                        <h5>Payment Information</h5>



                        <div class="form-group">
                            <select class="form-control wizard-required" id="payment">
                                <option value="none" selected disabled hidden> </option>
                                <option value="1"> Bank Transfer</option>
                                <option value="2"> UPI Payment</option>
                            </select>
                            <label for="payment" class="wizard-form-text-label">How Would You Like To Pay</label>
                            <div class="wizard-form-error"></div>
                        </div>

                        <div class="form-group clearfix">
                            <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                            <button class="form-wizard-submit float-right">Submit</button>
                        </div>
                    </fieldset>
                </form>
            </div>



        </div>


    </div>
    <!-- hs contact form End -->


    @endsection
<script>
    jQuery(document).ready(function() {
        // click on next button
        jQuery('.form-wizard-next-btn').click(function() {
            var parentFieldset = jQuery(this).parents('.wizard-fieldset');
            var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
            var next = jQuery(this);
            var nextWizardStep = true;
            parentFieldset.find('.wizard-required').each(function(){
                var thisValue = jQuery(this).val();

                if( thisValue == "") {
                    jQuery(this).siblings(".wizard-form-error").slideDown();
                    nextWizardStep = false;
                }
                else {
                    jQuery(this).siblings(".wizard-form-error").slideUp();
                }
            });
            if( nextWizardStep) {
                next.parents('.wizard-fieldset').removeClass("show","400");
                currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
                next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
                jQuery(document).find('.wizard-fieldset').each(function(){
                    if(jQuery(this).hasClass('show')){
                        var formAtrr = jQuery(this).attr('data-tab-content');
                        jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                            if(jQuery(this).attr('data-attr') == formAtrr){
                                jQuery(this).addClass('active');
                                var innerWidth = jQuery(this).innerWidth();
                                var position = jQuery(this).position();
                                jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                            }else{
                                jQuery(this).removeClass('active');
                            }
                        });
                    }
                });
            }
        });
        //click on previous button
        jQuery('.form-wizard-previous-btn').click(function() {
            var counter = parseInt(jQuery(".wizard-counter").text());;
            var prev =jQuery(this);
            var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
            prev.parents('.wizard-fieldset').removeClass("show","400");
            prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
            currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
            jQuery(document).find('.wizard-fieldset').each(function(){
                if(jQuery(this).hasClass('show')){
                    var formAtrr = jQuery(this).attr('data-tab-content');
                    jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                        if(jQuery(this).attr('data-attr') == formAtrr){
                            jQuery(this).addClass('active');
                            var innerWidth = jQuery(this).innerWidth();
                            var position = jQuery(this).position();
                            jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                        }else{
                            jQuery(this).removeClass('active');
                        }
                    });
                }
            });
        });
        //click on form submit button
        jQuery(document).on("click",".form-wizard .form-wizard-submit" , function(){
            var parentFieldset = jQuery(this).parents('.wizard-fieldset');
            var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
            parentFieldset.find('.wizard-required').each(function() {
                var thisValue = jQuery(this).val();
                if( thisValue == "" ) {
                    jQuery(this).siblings(".wizard-form-error").slideDown();
                }
                else {
                    jQuery(this).siblings(".wizard-form-error").slideUp();
                }
            });
        });
        // focus on input field check empty or not
        jQuery(".form-control").on('focus', function(){
            var tmpThis = jQuery(this).val();
            if(tmpThis == '' ) {
                jQuery(this).parent().addClass("focus-input");
            }
            else if(tmpThis !='' ){
                jQuery(this).parent().addClass("focus-input");
            }
        }).on('blur', function(){
            var tmpThis = jQuery(this).val();
            if(tmpThis == '' ) {
                jQuery(this).parent().removeClass("focus-input");
                jQuery(this).siblings('.wizard-form-error').slideDown("3000");
            }
            else if(tmpThis !='' ){
                jQuery(this).parent().addClass("focus-input");
                jQuery(this).siblings('.wizard-form-error').slideUp("3000");
            }
        });
    });

</script>
