<?php $__env->startSection('content'); ?>


    <!--Main layout-->
    <div class="container pb-5 page-content">
        <!--Section: Cards-->
        <form action="<?php echo e(url('upload-images')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="card shadow">
                <div class="card-header bg-success">
                    <h5 class="text-white"> Laravel 6 Multiple Images Upload </h5>
                </div>
                <div class="card-body">

                    <!-- print success message after file upload  -->
                    <?php if(Session::has('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(Session::get('success')); ?>

                            <?php
                                Session::forget('success');
                            ?>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="">Multiple File Select</label>
                        <input required type="file" class="form-control" name="images[]" multiple>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success"> Upload Images </button>
                </div>
            </div>
        </form>
            <!--Section: Cards-->

        </div>
    <!--Main layout-->

    <!--/.Footer-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>

    <?php echo $__env->make('scripts.datetime', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\astrolife\resources\views/image.blade.php ENDPATH**/ ?>