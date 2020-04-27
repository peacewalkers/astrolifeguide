@extends('layouts.app')

@section('content')

    <!-- main_header_wrapper end -->
    <!-- hs Slider Start -->
    <div class="slider-area">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="carousel-captions caption-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="content">
                                        <h1 data-animation="animated bounceInLeft">Welcome To</h1>
                                        <h2 data-animation="animated zoomInDown"><span>AstroLifeGuide.com</span></h2>
                                        <p data-animation="animated bounceInUp text-white">Your Trusted Source For Vedic Astrology Services</p>

                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs Slider End -->
    <!-- hs service wrapper Start -->
    <div class="hs_service_main_wrapper" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_about_heading_main_wrapper">
                        <div class="hs_about_heading_wrapper" >
                            <h2 >Our Services</h2>
                            <h4><span>&nbsp;</span></h4>
                            <p>Vedic astrology believes that the position of stars and planets during one's birth indicate the entire map of his or her life, accurate understanding of the horoscope helps to take the right path and achieve success.</p>
                        </div>
                    </div>
                </div>
                <div class="portfolio-area pt-5" >
                    <div class="container">
                        <!--Grid row-->
                        <div class="row d-none d-md-flex">


                            <!--Grid column horoscope 1-->
                            <div class="col-lg-2 col-md-2 mb-4">

                                <!--Card-->
                                <div class="card card-ecommerce">
                                    <a href="/services/horoscope">
                                        <!--Card image-->
                                        <div class="services-image text-center  mx-auto">

                                            <img src="{{ asset('astrolifeguide') }}/img/services/horoscope.png" class="img-fluid"  alt="">
                                            <div class="mask rgba-white-slight"></div>

                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body text-center no-padding">
                                            <!--Description-->
                                            <p class="card-text rgba-amber-strong ">Detailed Horoscope
                                            </p>


                                        </div>
                                    </a>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>
                            <!--Grid column-->

                            <!--Grid column child report 2-->
                            <div class="col-lg-2 col-md-2 mb-4">

                                <!--Card-->
                                <div class="card card-ecommerce">
                                    <a href="/services/child">

                                        <!--Card image-->
                                        <div class="services-image text-center  mx-auto">
                                            <img src="{{ asset('astrolifeguide') }}/img/services/child.jpg" class="" style="width: 115%;" alt="">
                                            <div class="mask rgba-white-slight"></div>

                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body text-center no-padding">
                                            <!--Description-->
                                            <p class="card-text rgba-amber-strong">Child Report
                                            </p>


                                        </div>
                                    </a>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>
                            <!--Grid column-->

                            <!--Grid column career 3-->
                            <div class="col-lg-2 col-md-2 mb-4">

                                <!--Card-->
                                <div class="card card-ecommerce">
                                    <a href="/services/career">
                                        <!--Card image-->
                                        <div class="services-image text-center  mx-auto">
                                            <img src="{{ asset('astrolifeguide') }}/img/services/Career.png" class=""  style="width: 96%;" alt="career prediction">
                                            <div class="mask "></div>

                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body text-center no-padding">
                                            <!--Description-->
                                            <p class="card-text mt-1 rgba-amber-strong">Career Report
                                            </p>
                                        </div>
                                    </a>
                                    <!--Card content-->
                                </div>
                                <!--Card-->

                            </div>
                            <!--Grid column-->

                            <!--Grid column marriage 4-->
                            <div class="col-lg-2 col-md-2 mb-4">

                                <!--Card-->
                                <div class="card card-ecommerce">
                                    <a href="/services/marriage">
                                        <!--Card image-->
                                        <div class="services-image text-center  mx-auto">
                                            <img src="{{ asset('astrolifeguide') }}/img/services/marriage3.jpg" class="img-fluid"  alt=""><a>
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body text-center">
                                            <!--Description-->
                                            <p class="card-text rgba-amber-strong">Marriage Report
                                            </p>
                                        </div>
                                    </a>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>
                            <!--Grid column-->


                            <!--Grid column matchmaking 5-->
                            <div class="col-lg-2 col-md-2 mb-4">

                                <!--Card-->
                                <div class="card card-ecommerce">
                                    <a href="/services/matchmaker">

                                        <!--Card image-->
                                        <div class="services-image text-center  ">
                                            <img src="{{ asset('astrolifeguide') }}/img/services/manglik.jpg"  style="width: 150%;" class="text-center"  alt="matchmaking">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body text-center no-padding mt-2">
                                            <!--Description-->
                                            <p class="card-text rgba-amber-strong">Compatibility Report
                                            </p>
                                        </div>
                                        <!--Card content-->
                                </div>
                                </a>
                                <!--Card-->
                            </div>
                            <!--Grid column-->

                            <!--Grid column Raja Yoga 6-->
                            <div class="col-lg-2 col-md-2 mb-4">
                                <a href="/services/rajayoga">
                                    <!--Card-->
                                    <div class="card card-ecommerce">
                                        <!--Card image-->
                                        <div class="services-image text-center  mx-auto">
                                            <img src="{{ asset('astrolifeguide') }}/img/services/paisa.webp" style="width: 90%;"  alt="">
                                            <div class="mask rgba-white-slight"></div>

                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body text-center no-padding">
                                            <!--Description-->
                                            <p class="card-text rgba-amber-strong mt-2">Raja Yoga
                                            </p>
                                        </div>
                                        <!--Card content-->
                                    </div>
                                </a>
                                <!--Card-->

                            </div>
                            <!--Grid column-->

                            <!--Grid column vastu Report 7-->
                            <div class="col-lg-2 col-md-2 mb-4 ">
                                <a href="/services/vastu">
                                    <!--Card-->
                                    <div class="card card-ecommerce">
                                        <!--Card image-->
                                        <div class="services-image text-center  mx-auto">
                                            <img src="{{ asset('astrolifeguide') }}/img/services/vastu2.jpg" class="img-fluid"  alt="">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body text-center no-padding">
                                            <!--Description-->
                                            <p class="card-text rgba-amber-strong">Vastu Report
                                            </p>
                                        </div>
                                        <!--Card content-->

                                    </div>
                                </a>
                                <!--Card-->
                            </div>
                            <!--Grid column-->

                            <!--Grid column sade sati 8 -->
                            <div class="col-lg-2 col-md-2 mb-4">
                                <a href="/services/sadesati">
                                    <!--Card-->
                                    <div class="card card-ecommerce">
                                        <!--Card image-->
                                        <div class="services-image text-center  mx-auto">
                                            <img src="{{ asset('astrolifeguide') }}/img/services/saturday.png" class="img-fluid"  alt="career prediction">
                                            <div class="mask rgba-white-slight"></div>

                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body text-center no-padding">
                                            <!--Description-->
                                            <p class="card-text rgba-amber-strong">Sade Sati Report
                                            </p>
                                        </div>
                                        <!--Card content-->

                                    </div>
                                </a>
                                <!--Card-->
                            </div>
                            <!--Grid column-->

                            <!--Grid column kalasarpa 9-->
                            <div class="col-lg-2 col-md-2 mb-4">
                                <a href="/services/kalasarpadosha">
                                    <!--Card-->
                                    <div class="card card-ecommerce">

                                        <!--Card image-->
                                        <div class="services-image text-center  mx-auto">
                                            <img src="{{ asset('astrolifeguide') }}/img/services/kalasarpa.png" class="img-fluid"  alt="">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body text-center no-padding">
                                            <!--Description-->
                                            <p class="card-text rgba-amber-strong">Kalasarpa Dosha
                                            </p>
                                        </div>
                                        <!--Card content-->

                                    </div>
                                </a>
                                <!--Card-->
                            </div>
                            <!--Grid column-->


                            <!--Grid column Remedies 10-->
                            <div class="col-lg-2 col-md-2 mb-4">
                                <a href="/services/remedies">
                                    <!--Card-->
                                    <div class="card card-ecommerce">

                                        <!--Card image-->
                                        <div class="services-image text-center  mx-auto">
                                            <img src="{{ asset('astrolifeguide') }}/img/services/vastu.jpg" class="img-fluid"  alt="">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body text-center no-padding">
                                            <!--Description-->
                                            <p class="card-text rgba-amber-strong">Remedies
                                            </p>
                                        </div>
                                        <!--Card content-->

                                    </div>
                                </a>
                                <!--Card-->
                            </div>
                            <!--Grid column-->

                            <!--Grid column muhurtam 11-->
                            <div class="col-lg-2 col-md-2 mb-4">
                                <a href="/services/muhurtham">

                                    <!--Card-->
                                    <div class="card card-ecommerce">

                                        <!--Card image-->
                                        <div class="services-image text-center  mx-auto">
                                            <img src="{{ asset('astrolifeguide') }}/img/services/pandit2.jpg" class="text-center"  alt="matchmaking">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body text-center no-padding">
                                            <!--Description-->
                                            <p class="card-text rgba-amber-strong">Muhurtam
                                            </p>
                                        </div>
                                        <!--Card content-->
                                    </div>
                                </a>
                                <!--Card-->
                            </div>
                            <!--Grid column-->

                            <!--Grid column Mangal Dosha 12-->
                            <div class="col-lg-2 col-md-2 mb-4">
                                <a href=#>

                                    <!--Card-->
                                    <div class="card card-ecommerce">

                                        <!--Card image-->
                                        <div class="services-image text-center  mx-auto">
                                            <img src="{{ asset('astrolifeguide') }}/img/services/gemelogy.jpg" class="img-fluid"  alt="">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body text-center no-padding">
                                            <!--Description-->
                                            <p class="card-text rgba-amber-strong mt-2">Gem Report
                                            </p>


                                        </div>
                                        <!--Card content-->

                                    </div>
                                </a>
                                <!--Card-->
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->

                        <div class="ui-mobile-container card-shadow ui-margin-t d-md-none" align="center">


                            <div class="ui-home-icon">
                                <a href="/services/horoscope" title="Detailed Horoscope">
                                    <img src="{{ asset('astrolifeguide') }}/img/services/horoscope.png"  alt="Detailed Horoscope" style="width: 65px !important; margin-top: 12px;" title="horoscope">
                                    <p class="ui-home-text">
                                        Detailed</br> Horoscope
                                    </p>
                                </a>
                            </div>

                            <div class="ui-home-icon">
                                <a href="/services/child" title="Child Report">
                                    <img src="{{ asset('astrolifeguide') }}/img/services/child.jpg" alt="child Report" style="width:85px; padding-top:5px;" title="child report">
                                    <p class="ui-home-text">
                                        Child Report
                                    </p>
                                </a>
                            </div>

                            <div class="ui-home-icon">
                                <a href="/services/career" title="Career Report">
                                    <img src="{{ asset('astrolifeguide') }}/img/services/Career.png"  alt="health report" style="width: 65px !important; margin-top: 15px;" title="career report">
                                    <p class="ui-home-text">
                                        Career Report
                                    </p>
                                </a>
                            </div>

                            <div class="ui-home-icon">
                                <a href="/services/marriage" title="Marriage Report">
                                    <img src="{{ asset('astrolifeguide') }}/img/services/marriage3.jpg" alt="Marriage Report" style="width: 65px; padding-top:10px;" title="Marriage Report">
                                    <p class="ui-home-text mt-1">
                                        Marriage</p>
                                </a>
                            </div>

                            <div class="ui-home-icon">
                                <a href="/services/matchmaker" title="Compatibilty Report">
                                    <img src="{{ asset('astrolifeguide') }}/img/services/manglik.jpg" alt="compatibility report" style="width:100px !important; padding-top:5px" title="Compatibility Report">
                                    <p class="ui-home-text mt-2">Compatibility</br> Report</p>
                                </a>
                            </div>

                            <div class="ui-home-icon">
                                <a href="/services/rajayoga" title="RajaYoga Report">
                                    <img src="{{ asset('astrolifeguide') }}/img/services/paisa.webp" alt="RajaYoga Report" style="width:60px; padding-top:10px" title="RajaYoga Report">
                                    <p class="ui-home-text" style="padding-top: 10px;">
                                        Raja Yoga
                                    </p>
                                </a>
                            </div>

                            <div class="ui-home-icon">
                                <a href="/services/vastu" title="Vastu Report">
                                    <img src="{{ asset('astrolifeguide') }}/img/services/vastu2.jpg" style="width:65px; padding-top:10px;" alt="Vastu Report" title="Vastu Report">
                                    <p class="ui-home-text" style="padding-top: 5px;">Vastu Report</p>
                                </a>
                            </div>

                            <div class="ui-home-icon">
                                <a href="/services/sadesati" title="Sade Sati Report">
                                    <img src="{{ asset('astrolifeguide') }}/img/services/saturday.png" alt="Sade Sati Report" style="width:70px; padding-top: 8px;">
                                    <p class="ui-home-text" style="padding-top: 2px;">
                                        Sade Sati Report
                                    </p>
                                </a>
                            </div>

                            <div class="ui-home-icon">
                                <a href="/services/kalasarpadosha" title="Kaalsarpa Dosha">
                                    <img src="{{ asset('astrolifeguide') }}/img/services/kalasarpa.png" alt="Kaalsarpa Dosha" style="width:72px !important; padding-top: 8px;" title="Kaalsarpa Dosha">
                                    <p class="ui-home-text">
                                        Kaalsarpa Dosha
                                    </p>
                                </a>
                            </div>

                            <div class="ui-home-icon">
                                <a href="/services/remedies" title="Vedic Remedies">
                                    <img src="{{ asset('astrolifeguide') }}/img/services/vastu.jpg"  alt="Vedic Remedies" style="width: 60px !important; margin-top: 10px;" title="Vedic Remedies">
                                    <p class="ui-home-text" style="padding-top: 5px;">
                                        Remedies
                                    </p>
                                </a>
                            </div>

                            <div class="ui-home-icon">
                                <a href="/services/muhurtham" title="Muhurtham">
                                    <img src="{{ asset('astrolifeguide') }}/img/services/pandit2.jpg" alt="Muhurtham" style="width:70px; padding-top: 5px;" title="Muhurtham">
                                    <p class="ui-home-text">
                                        Mhurtham
                                    </p>
                                </a>
                            </div>

                            <div class="ui-home-icon">
                                <a href="/services/gemelogy" title="Gemology Report">
                                    <img src="{{ asset('astrolifeguide') }}/img/services/gemelogy.jpg" alt="Gemology Report" style="width:70px; padding-top: 5px;" title="Gemology Report">
                                    <p class="ui-home-text" style="padding-top: 2px;">
                                        Gemelogy
                                    </p>
                                </a>
                            </div>
                        </div>



                        <!-- /.container -->
                    </div>
                    <!--/.portfolio-area-->
                </div>
            </div>
        </div>
        <!-- hs service wrapper End -->
        <div class="ast_whywe_wrapper ast_toppadder70 ast_bottompadder70 mt-5">
            <div class="container">
                <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <div class="ast_heading">
                        <h3 class="text-center">Why  <span>Choose Astrolifeguide</span></h3>
                    </div>
                </div>

                <div class="ast_whywe_info">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ast_whywe_info_box">
                                <span><img src="{{ asset('astrolifeguide') }}/img/content/ww_1.png" alt=""></span>
                                <div class="ast_whywe_info_box_info">
                                    <p>15+ Years Of Expirence</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ast_whywe_info_box">
                                <span><img src="{{ asset('astrolifeguide') }}/img/content/ww_2.png" alt=""></span>
                                <div class="ast_whywe_info_box_info">
                                    <p>365 Days Availability</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ast_whywe_info_box">
                                <span><img src="{{ asset('astrolifeguide') }}/img/content/ww_3.png" alt=""></span>
                                <div class="ast_whywe_info_box_info">
                                    <p>Quick Response</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ast_whywe_info_box">
                                <span><img src="{{ asset('astrolifeguide') }}/img/content/ww_4.png" alt=""></span>
                                <div class="ast_whywe_info_box_info">
                                    <p>Accurate Remedial Solutions</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ast_whywe_info_box">
                                <span><img src="{{ asset('astrolifeguide') }}/img/content/ww_5.png" alt=""></span>
                                <div class="ast_whywe_info_box_info">
                                    <p>Privacy Guaranteed</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ast_whywe_info_box">
                                <span><img src="{{ asset('astrolifeguide') }}/img/content/ww_6.png" alt=""></span>
                                <div class="ast_whywe_info_box_info">
                                    <p>Trusted by hundreds of clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="hs_sign_wrapper">
            <div class="container">
                <div class="hs_sign_heading_wrapper">
                    <div class="hs_about_heading_main_wrapper">
                        <div class="hs_about_heading_wrapper">
                            <h2>Know Your <span>Zodiac Sign</span></h2>
                            <h4><span>&nbsp;</span></h4>
                        </div>
                    </div>
                </div>
                <div class="row d-none d-md-flex">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                        <div class="hs_sign_box">
                            <div class="sign_box_img">
                                <img src="{{ asset('astrolifeguide') }}/img/content/icon1.jpg" width="70" alt="icon1">
                            </div>
                            <div class="sign_box_cont">
                                <h2>Aries</h2>
                                <p>31 Mar - 12 Oct</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                        <div class="hs_sign_box">
                            <div class="sign_box_img">
                                <img src="{{ asset('astrolifeguide') }}/img/content/icon2.jpg" width="70"  alt="icon2">
                            </div>
                            <div class="sign_box_cont">
                                <h2>Taurus</h2>
                                <p>31 Mar - 12 Oct</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                        <div class="hs_sign_box">
                            <div class="sign_box_img">
                                <img src="{{ asset('astrolifeguide') }}/img/content/icon3.jpg" width="70"  alt="icon3">
                            </div>
                            <div class="sign_box_cont">
                                <h2>Gemini</h2>
                                <p>31 Mar - 12 Oct</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                        <div class="hs_sign_box">
                            <div class="sign_box_img">
                                <img src="{{ asset('astrolifeguide') }}/img/content/icon4.jpg" width="70"  alt="icon4">
                            </div>
                            <div class="sign_box_cont">
                                <h2>Cancer</h2>
                                <p>31 Mar - 12 Oct</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                        <div class="hs_sign_box">
                            <div class="sign_box_img">
                                <img src="{{ asset('astrolifeguide') }}/img/content/icon5.jpg" width="70"  alt="icon5">
                            </div>
                            <div class="sign_box_cont">
                                <h2>leo</h2>
                                <p>31 Mar - 12 Oct</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                        <div class="hs_sign_box">
                            <div class="sign_box_img">
                                <img src="{{ asset('astrolifeguide') }}/img/content/icon6.jpg" width="70" alt="icon6">
                            </div>
                            <div class="sign_box_cont">
                                <h2>Virgo</h2>
                                <p>31 Mar - 12 Oct</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                        <div class="hs_sign_box">
                            <div class="sign_box_img">
                                <img src="{{ asset('astrolifeguide') }}/img/content/icon7.jpg" width="70"  alt="icon7">
                            </div>
                            <div class="sign_box_cont">
                                <h2>Libra</h2>
                                <p>31 Mar - 12 Oct</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                        <div class="hs_sign_box">
                            <div class="sign_box_img">
                                <img src="{{ asset('astrolifeguide') }}/img/content/icon8.jpg" width="70"  alt="icon8">
                            </div>
                            <div class="sign_box_cont">
                                <h2>Scorpio</h2>
                                <p>31 Mar - 12 Oct</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                        <div class="hs_sign_box">
                            <div class="sign_box_img">
                                <img src="{{ asset('astrolifeguide') }}/img/content/icon9.jpg" width="70"  alt="icon9">
                            </div>
                            <div class="sign_box_cont">
                                <h2>Sagittairus</h2>
                                <p>31 Mar - 12 Oct</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                        <div class="hs_sign_box">
                            <div class="sign_box_img">
                                <img src="{{ asset('astrolifeguide') }}/img/content/icon10.jpg" width="70"  alt="icon10">
                            </div>
                            <div class="sign_box_cont">
                                <h2>Capricorn</h2>
                                <p>31 Mar - 12 Oct</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                        <div class="hs_sign_box">
                            <div class="sign_box_img">
                                <img src="{{ asset('astrolifeguide') }}/img/content/icon11.jpg" width="70"  alt="icon11">
                            </div>
                            <div class="sign_box_cont">
                                <h2>Aquarius</h2>
                                <p>31 Mar - 12 Oct</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                        <div class="hs_sign_box">
                            <div class="sign_box_img">
                                <img src="{{ asset('astrolifeguide') }}/img/content/icon12.jpg" width="70"  alt="icon12">
                            </div>
                            <div class="sign_box_cont">
                                <h2>Pisces</h2>
                                <p>31 Mar - 12 Oct</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui-mobile-container card-shadow ui-margin-t d-md-none" align="center">


                    <div class="ui-home-icon">
                        <a href="#" title="Health
            Problem">
                            <img src="{{ asset('astrolifeguide') }}/img/content/icon11_m.jpg"  alt="Health
            Problem" style="width: 90px !important; margin-top: 10px;" title="horoscope
            Problem">
                            <p class="ui-home-text">
                                Aquarius</br>
                                20 Jan - 18 Feb</p>
                            </p>
                        </a>
                    </div>
                    <div class="ui-home-icon">
                        <a href="#">
                            <img src="{{ asset('astrolifeguide') }}/img//content/icon12_m.jpg" alt="Pisces" style="width:90px; padding-top:10px;" title="Pisces">
                            <p class="ui-home-text">
                                Pisces</br>
                                19 Feb - 20 Mar</p>
                        </a>
                    </div>
                    <div class="ui-home-icon">
                        <a href="#" title="aries">
                            <img src="{{ asset('astrolifeguide') }}/img//content/icon1_m.jpg"  alt="aries" style="width: 90px !important; margin-top: 10px;" title="aries">
                            <p class="ui-home-text">
                                Aries</br>
                                21 Mar - 19 Apr</p>
                        </a>
                    </div>
                    <div class="ui-home-icon">
                        <a href="#" title="Taurus">
                            <img src="{{ asset('astrolifeguide') }}/img//content/icon2_m.jpg" alt="taurus" style="width: 90px; padding-top:10px;" title="taurus">
                            <p class="ui-home-text">
                                Taurus</br>
                                20 Apr - 20 May</p>
                        </a>
                    </div>
                    <div class="ui-home-icon">
                        <a href="#" title="gemini">
                            <img src="{{ asset('astrolifeguide') }}/img//content/icon3_m.jpg" alt="gemini" style="width:90px !important; padding-top:10px" title="gemini">
                            <p class="ui-home-text">
                                Gemini</br>
                                21 May - 20 Jun</p>
                        </a>
                    </div>
                    <div class="ui-home-icon">
                        <a href="#">
                            <img src="{{ asset('astrolifeguide') }}/img//content/icon11_m.jpg" alt="Cancer" style="width:90px; padding-top:10px" title="Cancer">
                            <p class="ui-home-text">
                                Cancer</br>
                                21 Jun - 22 Jul</p>
                        </a>
                    </div>
                    <div class="ui-home-icon">
                        <a href="#" title="leo">
                            <img src="{{ asset('astrolifeguide') }}/img//content/icon5_m.jpg" style="width:90px; padding-top:10px;" alt="leo" title="leo">
                            <p class="ui-home-text" >
                                Leo</br>
                                23 Jul - 22 Aug</p>
                        </a>
                    </div>
                    <div class="ui-home-icon">
                        <a href="#">
                            <img src="{{ asset('astrolifeguide') }}/img//content/icon6_m.jpg" alt="virgo" style="width:90px; padding-top: 10px;">
                            <p class="ui-home-text">
                                Virgo</br>
                                23 Aug - 22 Sep</p>
                        </a>
                    </div>
                    <div class="ui-home-icon">
                        <a href="#" title="libra">
                            <img src="{{ asset('astrolifeguide') }}/img//content/icon7_m.jpg" alt="libra" style="width:90px !important; padding-top: 10px;" title="libra">
                            <p class="ui-home-text">
                                Libra</br>
                                23 Sep - 22 Oct</p>
                        </a>
                    </div>

                    <div class="ui-home-icon">
                        <a href="#" title="Scorpio">
                            <img src="{{ asset('astrolifeguide') }}/img//content/icon8_m.jpg"  alt="Scorpio" style="width: 90px !important; margin-top: 10px;" title="Scorpio">
                            <p class="ui-home-text" style="padding-top: 5px;">
                                Scorpio</br>
                                23 Oct - 21 Nov</p>
                        </a>
                    </div>

                    <div class="ui-home-icon">
                        <a href="#">
                            <img src="{{ asset('astrolifeguide') }}/img//content/icon9_m.jpg" alt="Sagittaaairus" style="width:90px; padding-top: 10px;" title="Sagittaaairus">
                            <p class="ui-home-text">
                                Sagittaaairus</br>
                                22 Nov - 21 Dec</p>
                        </a>
                    </div>

                    <div class="ui-home-icon">
                        <a href="#">
                            <img src="{{ asset('astrolifeguide') }}/img//content/icon10_m.jpg" alt="Capricorn" style="width:90px; padding-top: 10px;" title="Capricorn">
                            <p class="ui-home-text" style="padding-top: 2px;">
                                Capricorn</br>
                                22 Dec - 19 Jan</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- hs sign wrapper End -->
        <div class="hs_about_indx_main_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="hs_about_left_img_wrapper">
                            <img src="{{ asset('astrolifeguide') }}/img/content/about_img1.jpg" alt="about_img" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="hs_about_heading_main_wrapper">
                            <div class="hs_about_heading_wrapper">
                                <h2>About <span>Astrolifeguide</span></h2>
                                <h4><span>&nbsp;</span></h4>
                            </div>
                        </div>
                        <div class="hs_about_right_cont_wrapper">
                            <h2>Horoscope Revels The Will Of God</h2>
                            <p>Suffering from mundane problems that seem to overshadow your dream of happy living? Have tried every possible solution yet there is no respite? You can thank your lucky stars now because we bring before you the solution to all your problems. Whether you believe it or not, the movement of stars and planets affect us in ways more than one and it takes more than a layman to discover the aftermaths of the planetary movements.<br><br>

                                Our ability to determine the effect of the positions of various planets on your well-being is the answer you are searching for. Our experience in providing a beneficial solution to his clients making him the best astrologer to reach out at your locality. His simple and effective remedies as gained him popularity and are been a ray of hope for many lives.</p>

                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- hs about ind wrapper End -->
        <!-- hs testi slider wrapper Start -->
        <div class="hs_testi_slider_main_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="hs_about_heading_main_wrapper">
                            <div class="hs_about_heading_wrapper">
                                <h2>What clients <span> are saying</span></h2>
                                <h4><span>&nbsp;</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="hs_testi_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="testimonial_slider_content">
                                                <img src="{{ asset('astrolifeguide') }}/img/content/testi_client_img1.jpeg" style="margin-top: -60px;" class="py-2 img-responsive" alt="section3_t2__img">
                                                <h5>Vinay And Ramya</h5>
                                                <small>IT Professionals</small>
                                                <h4><span>&nbsp;</span></h4>
                                                <i>"We are thankful to Astrolifeguide for bringing us together".

                                                </i>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
                                            <div class="testimonial_slider_content">
                                                <img src="{{ asset('astrolifeguide') }}/img/content/testi_client_img3.jpeg" style="margin-top: -60px;" class="img-responsive" alt="section3_t2__img">
                                                <h5>Sameera Vutukuru</h5>
                                                <small>Student</small>
                                                <h4><span>&nbsp;</span></h4>
                                                <i>"I am really glad that I met Astrolifeguide.<br>
                                                    Astrolifeguide helped me out with proper prediction when things were going wrong with me and I had no clue about my career, after visiting Astrolifeguide I started moving in the right direction in my career and got admitted in a reputed University in US."</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--                            <div class="item">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="testimonial_slider_content">
                                                                            <img src="{{ asset('astrolifeguide') }}/img/content/testi_client_img1.jpeg" class="img-responsive" alt="section3_t2__img">
                                                                            <h5>Ralph Rios</h5>
                                                                            <small>Creative Director</small>
                                                                            <h4><span>&nbsp;</span></h4>
                                                                            <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer galley of type.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
                                                                        <div class="testimonial_slider_content">
                                                                            <img src="{{ asset('astrolifeguide') }}/img/content/testi_client_img3.jpeg" class="img-responsive" alt="section3_t2__img">
                                                                            <h5>Ralph Rios</h5>
                                                                            <small>Creative Director</small>
                                                                            <h4><span>&nbsp;</span></h4>
                                                                            <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer galley of type.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="testimonial_slider_content">
                                                                            <img src="{{ asset('astrolifeguide') }}/img/content/testi_client_img1.jpeg" class="img-responsive" alt="section3_t2__img">
                                                                            <h5>Ralph Rios</h5>
                                                                            <small>Creative Director</small>
                                                                            <h4><span>&nbsp;</span></h4>
                                                                            <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer galley of type.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
                                                                        <div class="testimonial_slider_content">
                                                                            <img src="{{ asset('astrolifeguide') }}/img/content/testi_client_img3.jpeg" class="img-responsive" alt="section3_t2__img">
                                                                            <h5>Ralph Rios</h5>
                                                                            <small>Creative Director</small>
                                                                            <h4><span>&nbsp;</span></h4>
                                                                            <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer galley of type.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <style>

            .grid1 {
                text-align: center;
                background: #e0e0e0;
                background: #ffc107;
                background: #fff;
                padding: 25px 1px;
                -webkit-box-shadow: 0 0 40px #aaa;
                -moz-box-shadow: 0 0 40px #aaa;
                box-shadow: 0 0 40px #aaa;
                -webkit-transition: all 0.5s;
                -moz-transition: all 0.5s;
                transition: all 0.5s;
                -o-transition: all 0.5s;
                -ms-transition: all 0.5s;
                -webkit-box-shadow: 0px 1px 8px 0px rgba(158, 158, 158, 0.75);
                -moz-box-shadow: 0px 1px 8px 0px rgba(158, 158, 158, 0.75);
                box-shadow: 0px 1px 8px 0px rgba(158, 158, 158, 0.75);
                height: 200px;
            }
            .services-top-grids {
                margin-bottom: 30px;
            }

            .grid1 h4 {
                font-size: 14px;
                text-transform: uppercase;
                margin: 25px 0 20px;
                color: #212121;
            }

            .heading-agileinfo {
                font-weight: 600;
                letter-spacing: .5px;
                font-size: 25px;
                margin-bottom: 1.9em;
                text-align: center;
                color: #ff4f81;
                text-transform: uppercase;
                position: relative;
                margin-top: 0;
            }
            .heading-agileinfo span {
                display: block;
                font-size: 16px!important;
                margin-top: 1em;
                letter-spacing: 3px;
                text-transform: capitalize;
                color: #000000;
                font-weight: 400;
            }
            @media only screen and (max-width:600px)
            {
                .grid1 {
                    text-align: center;
                    background: #e0e0e0;
                    background: #ffc107;
                    background: #fff;
                    padding: 25px 40px;
                    -webkit-box-shadow: 0 0 40px #aaa;
                    -moz-box-shadow: 0 0 40px #aaa;
                    box-shadow: 0 0 40px #aaa;
                    -webkit-transition: all 0.5s;
                    -moz-transition: all 0.5s;
                    transition: all 0.5s;
                    -o-transition: all 0.5s;
                    -ms-transition: all 0.5s;
                    -webkit-box-shadow: 0px 1px 8px 0px rgba(158, 158, 158, 0.75);
                    -moz-box-shadow: 0px 1px 8px 0px rgba(158, 158, 158, 0.75);
                    box-shadow: 0px 1px 8px 0px rgba(158, 158, 158, 0.75);
                    height: auto;
                    margin-top:30px;
                }
                .heading-agileinfo span {
                    display: block;
                    font-size: 14px!important;
                    margin-top: 1em;
                    letter-spacing: 3px;
                    text-transform: capitalize;
                    color: #000000;
                    font-weight: 400;
                }
                .heading-agileinfo {
                    font-weight: 600;
                    letter-spacing: .5px;
                    font-size: 25px;
                    margin-bottom: 1.9em;
                    text-align: center;
                    color: #ff4f81;
                    text-transform: uppercase;
                    position: relative;
                    margin-top: 28px;
                    margin-bottom: 0px;
                }

            }
            .imgnew
            {
                width:105px;
                height:auto;
            }
            .bg-white {
                background: #ffffff;
            }

            .card-shadow {
                box-shadow: 0 1px 2px 0 rgba(0,0,0,0.16), 0 1px 5px 0 rgba(0,0,0,0.12);
            }
            .ui-margin-t {
                margin-top: 10px;
            }
            @media screen and (max-width: 768px){
                .ui-home-icon-m {
                    width: 33.33%;
                    float: left;
                    padding: 3px;
                    height: 120px;
                    overflow: hidden;
                }
                .ui-home-icon img {
                    width: 60px;
                    height: auto;
                    float: none;
                    margin-top: 3px;
                }
            }
            .ui-home-icon-m {
                width: 33.33%;
                border-right: 1px solid #FFE082;
                border-bottom: 1px solid #FFE082;

                float: left;
                padding: 3px;
                height: 56px;
                overflow: hidden;
            }
            .ui-home-icon-m img {
                width: 60px;
                height: auto;
                float: none;
                margin-top: 3px;
            }
            @media screen and (max-width: 768px){

                .ui-home-icon-m p {
                    padding: 8px 0 0 0;
                    margin: 0;
                }
                .ui-home-text {
                    clear: both;
                    white-space: inherit;
                    text-overflow: none;
                    overflow: inherit;
                }
                .ui-home-text {
                    text-align: center;
                    font-size: 14px;
                    font-weight: 500;
                    color: #333;
                    white-space: nowrap;
                    text-overflow: ellipsis;
                    overflow: hidden;
                }
                .ui-home-icon {
                    width: 25%;
                    float: left;
                    padding: 3px;
                    height: 96px;
                    overflow: hidden;
                }
                .ui-home-icon {
                    width: 33%;
                    border-right: 1px solid #FFE082;
                    border-bottom: 1px solid #FFE082;
                    border-left: 1px solid #FFE082;
                    border-top: 1px solid #FFE082;
                    float: left;
                    padding: 3px;
                    height: 120px;
                    overflow: hidden;
                }
                .ui-home-text {
                    text-align: center;
                    font-size: 14px;
                    font-weight: 500;
                    color: #333;
                    white-space: nowrap;
                    text-overflow: ellipsis;
                    overflow: hidden;
                    line-height: 20px;
                }
            }

            @media only screen and (max-width: 600px){
                .hs_about_right_cont_wrapper {
                    float: left;
                    width: 100%;
                    margin-top: -40px;
                    text-align: justify;
                    padding-bottom: 30px;
                }}
            @media (max-width: 480px){
                .online-service {
                    width: 100%!important;
                    overflow-x: scroll;
                    display: block!important;
                    overflow-y: hidden;
                    white-space: nowrap;
                    display: inline-block;
                    margin-top: 25px;
                }}
            .hs_about_right_cont_wrapper {
                float: left;
                width: 100%;
                margin-top: 0px;
                text-align: justify;
            }

            body,
            html {
                font-family: "Segoe UI", "Helvetica Neue", Arial, sans-serif!important;
                font-size: 15px;
                line-height: 28px;
                color: #222;
                overflow-x: hidden;
            }

            topBtm5 {
                margin-bottom: 5px;
            }

            .form-control {
                display: block;
                width: 100%;
                height: 34px;
                padding: 6px 12px;
                font-size: 14px;
                line-height: 1.42857143;
                color: #888;
                background-color: #fff;
                background-image: none;
                border: 1px solid #9E9E9E;
                border-radius: 4px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
                -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
                -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
                transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            }

            .thumbnail {
                display: block;
                padding: 4px;
                margin-bottom: 20px;
                line-height: 1.42857143;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 4px;
                -webkit-transition: border .2s ease-in-out;
                -o-transition: border .2s ease-in-out;
                transition: border .2s ease-in-out;
            }

            .box_height {
                height: 400px;
            }

            .thumbnail .caption {
                padding: 9px;
                color: black;
            }

            .form-control[disabled],
            .form-control[readonly],
            fieldset[disabled] .form-control {
                background-color: white;
                opacity: 1;
            }

            .selectu {
                width: 68px;
            }

            .selectu2 {
                width: 78px;
                float: right;
                margin-top: -34px;
            }

            @media only screen and (max-width:600px) {
                .selectu {
                    width: 68px;
                }
                .selectu2 {
                    width: 74px;
                    float: right;
                    margin-top: -34px;
                }
                .top30 {
                    margin-top: 45px;
                }
                .hs_about_right_cont_wrapper {
                    float: left;
                    width: 100%;
                    margin-top: -40px;
                    text-align: justify;
                }
                .box_height {
                    height: auto !important;
                    overflow: hidden!important;
                }
                .card-shadow {
                    box-shadow: 0 0px 0px 0 rgba(0,0,0,0.16), 0 0px 0px 0 rgba(0,0,0,0.12);
                }
            }

            @media only screen
            and (min-device-width : 768px)
            and (max-device-width : 1024px)
            {
                .box_height {
                    height: auto !important;
                    overflow: hidden!important;
                }

            }
        </style>

@endsection
