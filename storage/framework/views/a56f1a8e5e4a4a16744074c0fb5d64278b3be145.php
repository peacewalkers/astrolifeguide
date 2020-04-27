<?php $__env->startSection('template_title'); ?>
  <?php echo trans('usersmanagement.showing-user', ['name' => $horoscopes->name]); ?>

<?php $__env->stopSection(); ?>


<link href="<?php echo e(mix('/css/app.css')); ?>" rel="stylesheet">

<?php $__env->startSection('content'); ?>
  <div class="container mt-5 ">
    <div class="row">
      <?php echo $__env->make('layouts.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="col-sm-10">

        <div class="card">

          <div class="card-header text-dark">
            <div style="display: flex; justify-content: space-between; align-items: center;">
              <?php echo trans('horoscopes.showing-horoscopes-title', ['name' => $horoscopes->orderID]); ?>

              <div class="float-right">
                <a href="/horoscopes" class="btn btn-light btn-sm float-right" data-toggle="tooltip" data-placement="left" title="<?php echo e(trans('usersmanagement.tooltips.back-users')); ?>">
                  <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
                  <?php echo trans('usersmanagement.buttons.back-to-users'); ?>

                </a>
              </div>
            </div>
          </div>

          <div class="card-body">

            <div class="row">
              <div class="col-sm-4 col-md-6 mx-auto">
                <h4 class="text-muted margin-top-sm-1 text-center text-left-tablet">
                  <?php echo e($horoscopes->name); ?>

                </h4>
                <p class="text-center text-left-tablet">
                  <strong>
                    <?php echo e($horoscopes->reptype); ?>

                  </strong>
                  <?php if($horoscopes->email): ?>
                    <br />
                    <span class="text-center" data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('usersmanagement.tooltips.email-user', ['user' => $horoscopes->email])); ?>">
                      <?php echo e(Html::mailto($horoscopes->email, $horoscopes->email)); ?>

                    </span>
                  <?php endif; ?>
                </p>
                  <div class="text-center text-left-tablet mb-4">
                    <a href="/horoscope/<?php echo e($horoscopes->id); ?>/edit" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('usersmanagement.editUser')); ?>">
                      <i class="fa fa-pencil fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm hidden-md"> <?php echo e(trans('usersmanagement.editUser')); ?> </span>
                    </a>
                    <?php echo Form::open(array('url' => 'horoscope/' . $horoscopes->id, 'class' => 'form-inline', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => trans('usersmanagement.deletereport'))); ?>

                      <?php echo Form::hidden('_method', 'DELETE'); ?>

                      <?php echo Form::button('<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm hidden-md">' . trans('usersmanagement.deleteUser') . '</span>' , array('class' => 'btn btn-danger btn-sm','type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => 'Delete User', 'data-message' => 'Are you sure you want to delete this user?')); ?>

                    <?php echo Form::close(); ?>

                  </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="border-bottom"></div>

            <?php if($horoscopes->name): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.id')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($horoscopes->orderID); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($horoscopes->name): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.fname')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($horoscopes->name); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($horoscopes->email): ?>

            <div class="col-sm-5 col-6 text-larger">
              <strong>
                <?php echo e(trans('horoscopes.users-table.email')); ?>

              </strong>
            </div>

            <div class="col-sm-7">
              <span data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('usersmanagement.tooltips.email-user', ['user' => $horoscopes->email])); ?>">
                <?php echo e(HTML::mailto($horoscopes->email, $horoscopes->email)); ?>

              </span>
            </div>

            <div class="clearfix"></div>
            <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($horoscopes->phone): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.phone')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($horoscopes->phone); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($horoscopes->gender): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.gender')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($horoscopes->gender); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($horoscopes->dob): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.dob')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($horoscopes->dob); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($horoscopes->tob): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.tob')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($horoscopes->tob); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($horoscopes->pob): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.pob')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($horoscopes->pob); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($horoscopes->cob): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.cob')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($horoscopes->cob); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>


            <?php if($horoscopes->tob): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.tob')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($horoscopes->tob); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($horoscopes->reftype ): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.reftype')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($horoscopes->reftype); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if(empty($horoscopes->refdetails)): ?>


                <?php else: ?>
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.refdetails')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($horoscopes->refdetails); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>


            <?php if(empty($horoscopes->horoscope)): ?>
            <?php else: ?>
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.horoscope')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($horoscopes->horoscope); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if(empty($horoscopes->productamount)): ?>
            <?php else: ?>
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.productamount')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($horoscopes->productamount); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if(empty($horoscopes->status)): ?>
            <?php else: ?>
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('horoscopes.users-table.status')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($horoscopes->status); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($horoscopes->created_at): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('usersmanagement.labelCreatedAt')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($horoscopes->created_at); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

            <?php if($horoscopes->updated_at): ?>

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  <?php echo e(trans('usersmanagement.labelUpdatedAt')); ?>

                </strong>
              </div>

              <div class="col-sm-7">
                <?php echo e($horoscopes->updated_at); ?>

              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            <?php endif; ?>

          </div>

        </div>
      </div>
    </div>
  </div>

  <?php echo $__env->make('modals.modal-delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
  <?php echo $__env->make('scripts.delete-modal-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php if(config('usersmanagement.tooltipsEnabled')): ?>
    <?php echo $__env->make('scripts.tooltips', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\astrolife\resources\views/horoscope/show-report.blade.php ENDPATH**/ ?>