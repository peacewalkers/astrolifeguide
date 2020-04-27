@extends('layouts.app')

@section('content')
    <!-- hs About Title Start -->
    <div class="hs_indx_title_main_wrapper">
        <div class="hs_title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 full_width">
                    <div class="hs_indx_title_left_wrapper">
                        <h2 class="text-dark">Talk to Astrolifeguide.com</h2>
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
    <div class="hs_contact_tittle_main_wrapper">
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
                    <div class="hs_about_heading_main_wrapper">
                        <div class="hs_about_heading_wrapper">
                            <h2><span>Compatibility </span>Report</h2>
                            <h4><span>&nbsp;</span></h4>
                            <p>This report looks at the compatibility of two people in a relationship. Certain people in our lives inspire us and make us feel alive, others seem to do the opposite and drain all our energy away. Infact the combinations are endless and truly that is why people are so interesting. With Astrology we can see how the positions of the planets, when the two people were born, relate to each other. This helps us understand how the two people will connect with each other, and how compatible they are.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="form-wizard">
                    <form action="/matchmaker" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-wizard-header">
                        <p>Please Fill All Fields Before Proceeding To Next Step</p>
                        <ul class="list-unstyled form-wizard-steps clearfix">
                            <li class="active"><span>1</span></li>
                            <li><span>2</span></li>
                            <li><span>3</span></li>
                            <li><span>4</span></li>
                        </ul>
                    </div>

                        <fieldset class="wizard-fieldset show">
                            <p class="text-center">  This Report Is For </p>
                            <div class="form-group col-md-12">
                                <div class="wizard-form-radio">
                                    <input value="male" name="gender" id="radio1" type="radio">
                                    <label for="radio1"><i class="fa fa-male"> </i>  </label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input name="gender" style="color: #f31c1f;" value="female" id="radio2" type="radio">
                                    <label for="radio2"><i class="fa fa-female"> </i> </label>
                                </div>
                                <div class="wizard-form-error"></div>
                            </div>

                            <div class="form-group clearfix">
                                <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                            </div>

                        </fieldset>

                    <fieldset class="wizard-fieldset">
                        <h5>Personal Information</h5>
                        <div class="form-group ">
                            <input type="text" name="name" class="form-control wizard-required" id="name">
                            <label for="fname" class="wizard-form-text-label">First Name*</label>
                            <div class="wizard-form-error"></div>
                        </div>

                     <div class="row">
                        <div class="form-group col-md-6">
                            <input type="tel" name="phone" class="form-control wizard-required" id="phone">
                            <label for="phone" class="wizard-form-text-label">Phone*</label>
                            <div class="wizard-form-error"></div>
                        </div>

                         <div class="form-group col-md-6">
                             <input type="email" name="email" class="form-control wizard-required" id="email">
                             <label for="email" class="wizard-form-text-label">Email*</label>
                             <div class="wizard-form-error"></div>
                         </div>

                     </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="date" name="dob" class="form-control wizard-required" id="dob">
                            <label for="dob" class="wizard-form-text-label">Date Of Birth</label>
                        </div>

                        <div class="form-group col-md-6">
                            <input type="time" name="tob" class="form-control wizard-required" id="timeob">
                            <label for="timeob" class="wizard-form-text-label">Time Of Birth</label>
                            <div class="wizard-form-error"></div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <select class="form-control wizard-required" name="cob" id="cob">
                                    <option value="" selected></option>
                                    <option value="india">India </option>
                                    <option value="uk">UK</option>
                                    <option value="USA">USA </option>
                                    <option value="canada">Canada </option>
                                    <option value="australia">Australia </option>
                                </select>
                                <label for="cob" class="wizard-form-text-label">Country of Birth</label>
                                <div class="wizard-form-error"></div>
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" name="pob" class="form-control wizard-required" id="cityname">
                                <label for="cityname" class="wizard-form-text-label">City/Town of Birth*</label>
                                <div class="wizard-form-error"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea type="text" name="comments" class="form-control wizard-required" id="comments" cols="2"></textarea>
                            <label for="comments" class="wizard-form-text-label">Comments*</label>
                            <div class="wizard-form-error"></div>
                        </div>

                        <div class="form-group clearfix">
                            <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                            <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                        </div>
                    </fieldset>

                    <fieldset class="wizard-fieldset ">
                        <h5>Matching Partner Details</h5>
                        <div> <p> Please submit the details of your prospective partner birth details for compatibility report. Please note you can send details of upto five prospevtive partner details to be compared for compatibility </p></div>

                        <div id="accordion" class="myaccordion">

                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button type="button" class="d-flex align-items-center justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Matching Partner One
                                            <span class="fa-stack fa-sm">
                                                <i class="fas fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-minus fa-stack-1x fa-inverse ml-0"></i>
                                              </span>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">

                                    <div class="card-body">
                                            <div class="form-group">
                                                <input type="text" name="nameone" class="form-control wizard-required" id="nameone">
                                                <label for="nameone" class="wizard-form-text-label">Full Name*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="time" name="tobone" class="form-control wizard-required" id="tobone">
                                                <label for="tobone" class="wizard-form-text-label">Time Of Birth</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input name="dobone" class="form-control wizard-required" id="dobone" type="date">
                                                <label for="dobone" class="wizard-form-text-label">Date Of Birth</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="text" name="pobone" class="form-control wizard-required" id="pobone">
                                                <label for="pobone" class="wizard-form-text-label">City/Town of Birth*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <input type="text" name="cobone" class="form-control wizard-required" id="cobone">
                                                <label for="cobone" class="wizard-form-text-label">Country of Birth*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button type="button" class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Matching Partner Two
                                            <span class="fa-stack fa-2x">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fas fa-plus fa-stack-1x fa-inverse ml-0"></i>
          </span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

                                    <div class="card-body">
                                            <div class="form-group">
                                            <input type="text" class="form-control" name="nametwo" id="nametwo">
                                            <label for="nametwo" class="wizard-form-text-label">First Name*</label>
                                            <div class="wizard-form-error"></div>
                                            </div>


                                        <div class="row">
                                                <div class="form-group col-md-6">
                                            <input type="time" class="form-control " name="tobtwo" id="tobtwo">
                                            <label for="tobtwo" class="wizard-form-text-label">Time Of Birth</label>
                                            <div class="wizard-form-error">
                                            </div>
                                                </div>
                                                    <div class="form-group col-md-6">
                                                        <input type="date" class="form-control " name="dobtwo" id="dobtwo">
                                                        <label for="dobtwo" class="wizard-form-text-label">Date Of Birth</label>
                                                        <div class="wizard-form-error"></div>
                                                    </div>
                                        </div>

                                        <div class="row">
                                                    <div class="form-group col-md-6">
                                            <input type="pobtwo" class="form-control" name="pobtwo" id="pobtwo">
                                            <label for="pobtwo" class="wizard-form-text-label">City/Town of Birth*</label>
                                            <div class="wizard-form-error"></div>
                                                </div>
                                                    <div class="form-group col-md-6">
                                                        <input type="cobtwo" class="form-control" name="cobtwo" id="cobtwo">
                                                        <label for="cobtwo" class="wizard-form-text-label">Country of Birth*</label>
                                                        <div class="wizard-form-error"></div>
                                                    </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button type="button" class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Matching Partner Three
                                            <span class="fa-stack fa-2x">
                                            <i class="fas fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-plus fa-stack-1x fa-inverse  ml-0"></i>
                                          </span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">

                                        <div class="form-group">
                                            <input type="text" class="form-control " name="namethree" id="namethree">
                                            <label for="namethree" class="wizard-form-text-label">First Name*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="time" class="form-control " name="tobthree" id="tobthree">
                                                <label for="tobthree" class="wizard-form-text-label">Time Of Birth</label>
                                                <div class="wizard-form-error"></div>
                                                <span class="wizard-password-eye"><i class="far fa-eye"></i></span>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <input type="date" class="form-control " name="dobthree" id="dobthree">
                                                <label for="dobthree" class="wizard-form-text-label">Date Of Birth</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="pobthree" class="form-control" name="pobthree" id="pobthree">
                                                <label for="pobthree" class="wizard-form-text-label">City/Town of Birth*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="cobthree" class="form-control" name="cobthree" id="cobthree">
                                                <label for="cobthree" class="wizard-form-text-label">Country of Birth</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button type="button" class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Matching Partner Four
                                            <span class="fa-stack fa-2x">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fas fa-plus fa-stack-1x fa-inverse  ml-0"></i>
          </span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="namefour" id="namefour">
                                            <label for="namefour" class="wizard-form-text-label">First Name*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>


                                   <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="time" class="form-control " name="tobfour" id="tobfour">
                                            <label for="tobfour" class="wizard-form-text-label">Time Of Birth</label>
                                            <div class="wizard-form-error"></div>
                                            <span class="wizard-password-eye"><i class="far fa-eye"></i></span>
                                        </div>

                                           <div class="form-group col-md-6">
                                               <input type="date" class="form-control " name="dobfour" id="dobfour">
                                               <label for="dobfour" class="wizard-form-text-label">Date Of Birth</label>
                                               <div class="wizard-form-error"></div>
                                           </div>
                                    </div>

                                       <div class="row">
                                                <div class="form-group col-md-6">
                                                    <input type="pobfour" class="form-control " name="pobfour" id="pobfour">
                                                    <label for="pobfour" class="wizard-form-text-label">City/Town of Birth*</label>
                                                    <div class="wizard-form-error"></div>
                                                </div>
                                                    <div class="form-group col-md-6">
                                                        <input type="cobfour" class="form-control " name="cobfour" id="cobfour">
                                                        <label for="cobfour" class="wizard-form-text-label">Country of Birth*</label>
                                                        <div class="wizard-form-error"></div>
                                                    </div>
                                                </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h2 class="mb-0">
                                        <button type="button" class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Matching Partner Five
                                            <span class="fa-stack fa-2x">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fas fa-plus fa-stack-1x fa-inverse  ml-0"></i>
          </span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control " name="namefive" id="namefive">
                                            <label for="namefive" class="wizard-form-text-label">First Name*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                        <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="time" class="form-control " name="tobfive" id="tobfive">
                                            <label for="tobfive" class="wizard-form-text-label">Time Of Birth</label>
                                            <div class="wizard-form-error"></div>
                                            <span class="wizard-password-eye"><i class="far fa-eye"></i></span>
                                        </div>

                                            <div class="form-group col-md-6">
                                                <input type="date" class="form-control " name="dobfive" id="dobfive">
                                                <label for="dobfive" class="wizard-form-text-label">Date Of Birth</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="pobfive" class="form-control" name="pobfive" id="pobfive">
                                            <label for="pobfive" class="wizard-form-text-label">City/Town of Birth*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <input type="cobfive" class="form-control" name="cobfive" id="cobfive">
                                            <label for="cobfive" class="wizard-form-text-label">City/Town of Birth*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                            <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                        </div>
                    </fieldset>

                    <fieldset class="wizard-fieldset">
                        <h5>Payment Information</h5>
                        <div class="form-group">
                            <h4>Bank Account Name</h4>
                            <h4>Bank Account NUmber</h4>
                            <h4>IFSC Code</h4>
                        </div>

                        <div class="form-group">
                            <select class="form-control wizard-required" id="paid">
                                <option value="paidone"> Online Bank Transfer</option>
                                <option value="paidtwo"> UPI Payment</option>
                            </select>
                            <label for="payment" class="wizard-form-text-label">Manual Payment</label>
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
<script>
    $(document).ready(function() {
        $(window).keydown(function(event){
            if(event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>
