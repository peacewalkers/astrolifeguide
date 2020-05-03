<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 pt-5">
            <div class="card">
                <div class="card-header text-center text-white" style="background-color: #038C01;"><?php echo e(__('Create New Account')); ?> </div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="md-form mt-4">

                            <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required>
                             <label for="name"><?php echo e(__('Username')); ?></label>

                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

                        <div class="md-form mt-4">

                                <input id="first_name" type="text" class="form-control<?php echo e($errors->has('first_name') ? ' is-invalid' : ''); ?>" name="first_name" value="<?php echo e(old('first_name')); ?>" required>
                                <label for="first_name"><?php echo e(__('First Name')); ?></label>
                                <?php if($errors->has('first_name')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('first_name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

                        <div class="md-form mt-4">
                                <input id="last_name" type="text" class="form-control<?php echo e($errors->has('last_name') ? ' is-invalid' : ''); ?>" name="last_name" value="<?php echo e(old('last_name')); ?>" required >
                                <label for="last_name"> <?php echo e(__('Last Name')); ?> </label>
                                <?php if($errors->has('last_name')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('last_name')); ?></strong>
                                    </span>
                                <?php endif; ?>

                        </div>

                        <div class="md-form mt-4">

                                <input id="phone" type="tel" class="form-control<?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>" name="phone" value="<?php echo e(old('phone')); ?>" required>
                                <label for="phone">  <?php echo e(__('Phone')); ?></label>
                                <?php if($errors->has('phone')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('phone')); ?></strong>
                                    </span>
                                <?php endif; ?>

                        </div>

                        <div class="md-form mt-4">

                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>
                                <label for="email"> <?php echo e(__('E-Mail Address')); ?> </label>
                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>

                        </div>

                        <div class="md-form mt-4">

                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
                                <label for="password"> <?php echo e(__('Password')); ?> </label>
                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>

                        </div>

                        <div class="md-form mt-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                <label for="password-confirm"> <?php echo e(__('Confirm Password')); ?> </label>

                        </div>


                        <div class="md-form mt-4 mb-4 text-center">
                                <button type="submit" class="btn text-white" style="background-color: #038C01">
                                    <?php echo e(__('Register')); ?>

                                </button>

                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                                <p class="text-center mb-4">
                                    Or Use Social Logins to Register
                                </p>
                                <?php echo $__env->make('partials.socials-icons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
    <?php if(config('settings.reCaptchStatus')): ?>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\astrolife\resources\views/auth/register.blade.php ENDPATH**/ ?>