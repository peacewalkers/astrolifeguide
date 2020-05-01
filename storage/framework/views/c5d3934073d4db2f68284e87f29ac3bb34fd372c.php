<?php $__env->startSection('head'); ?>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <!--Main layout-->
    <div class="container pb-5 page-content">
        <div class="container z-depth-1">


            <!--Section: Content-->
            <section class="dark-grey-text">

                <div class="row pr-lg-5">
                    <div class="col-md-7 mb-4">

                        <div class="view">
                            <img src="<?php echo e(asset('astrolifeguide')); ?>/img/content/about_img1.jpg" class="img-fluid" alt="smaple image" />
                        </div>

                    </div>
                    <div class="col-md-5 d-flex align-items-center">
                        <div>

                            <h3 class="font-weight-bold mb-4">Thank you for submitting your Details</h3>

                            <p class="mb-3">We have received your details, Please allow us 24hours - 48hours to analyze your birth details and prepare your report you have requested. You will receive a copy of detailed report in the email provided to us.</p>



                            <button id="rzp-button1" value="<?php echo e($pay['key']); ?>">Pay with Razorpay</button>
                            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                            <form name='razorpayform' action="dopayment" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="razorpay_order_id" id="razorpay_order_id">
                                <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                                <input type="hidden" name="razorpay_signature"  id="razorpay_signature" >
                            </form>



                                <a href="/"> Go to Astrolifeguide.com</a>
                        </div>
                    </div>
                </div>

            </section>
            <!--Section: Content-->


        </div>
        </div>
    <!--Main layout-->

    <!--/.Footer-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>

    <?php echo $__env->make('scripts.razorpay', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\astrolife\resources\views/pages/thankyou.blade.php ENDPATH**/ ?>