<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5 pt-5">
            <div class="card">
                <div class="card-header text-center">LOGIN</div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <!-- Email -->
                            <div class="md-form">
                                <input id="materialLoginFormEmail" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>
                                <label for="materialLoginFormEmail">E-mail</label>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <!-- Password -->
                            <div class="md-form">

                                <input id="materialLoginFormPassword" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
                                <label for="materialLoginFormPassword">Password</label>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="d-flex justify-content-around">


                                <div>
                                    <!-- Forgot password -->
                                    <a href="<?php echo e(route('password.request')); ?>">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Sign in button -->
                            <div class="formbutton">
                            <button class="btn btn-rounded btn-block my-4 waves-effect z-depth-0 mx-auto" style="width:40%;" type="submit">Sign in</button>
                            </div>
                            <!-- Register -->
                            <p class="text-center">Not a member?
                                <a href="<?php echo e(route('register')); ?>">Register</a>
                            </p>

                            <!-- Social login -->
                            <p  class="text-center">or sign in with:
                            <a type="button" href="(route('social.redirect',['provider' => 'facebook'])" class="btn-floating btn-sm  btn-fb">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a type="button" class="btn-floating btn-tw btn-sm">
                                <i class="fab fa-twitter"></i>
                            </a>
                            </p>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\astrolife\resources\views/auth/login.blade.php ENDPATH**/ ?>