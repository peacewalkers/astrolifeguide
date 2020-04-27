<?php $__env->startSection('content'); ?>

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
                                    <div class="md-form">

                                        <input type="text" id="form-name" class="form-control">
                                        <label for="form-name">Your name</label>
                                    </div>
                                    <div class="md-form">

                                        <input type="text" id="form-email" class="form-control">
                                        <label for="form-email">Your email</label>
                                    </div>
                                    <div class="md-form">

                                        <input type="text" id="form-Subject" class="form-control">
                                        <label for="form-Subject">Subject</label>
                                    </div>
                                    <div class="md-form">

                                        <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                                        <label for="form-text">Your message</label>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn text-white" style="background-color: #038C01">Submit</button>
                                    </div>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\astrolife\resources\views/contact.blade.php ENDPATH**/ ?>