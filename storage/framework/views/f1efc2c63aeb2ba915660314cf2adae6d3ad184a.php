<?php $__env->startSection('template_title'); ?>
    <?php echo trans('horoscopes.showing-all-horoscopes'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('template_linked_css'); ?>
    <?php if(config('usersmanagement.enabledDatatablesJs')): ?>

        <link rel="stylesheet" type="text/css" href="<?php echo e(config('usersmanagement.datatablesCssCDN')); ?>">
    <?php endif; ?>
    <style type="text/css" media="screen">
        .users-table {
            border: 0;
        }
        .users-table tr td:first-child {
            padding-left: 15px;
        }
        .users-table tr td:last-child {
            padding-right: 15px;
        }
        .users-table.table-responsive,
        .users-table.table-responsive table {
            margin-bottom: 0;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="container mt-5 ">
        <div class="row">
            <?php echo $__env->make('layouts.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-sm-10">
                <div class="card">
                    <div class="card-header">

                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo trans('horoscopes.showing-all-horoscopes'); ?>

                            </span>

                            
                        </div>
                    </div>

                    <div class="card-body">

                        <?php if(config('usersmanagement.enableSearchUsers')): ?>
                            <?php echo $__env->make('partials.search-horoscope-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>

                        <div class="table-responsive horoscopes-table">
                            <table class="table table-striped table-sm data-table">
                                <caption id="user_count">
                                    <?php echo e(trans_choice('horoscopes.users-table.caption', 1, ['horoscopes' => $horoscopes->count()])); ?>

                                </caption>
                                <thead class="thead">
                                <tr>
                                    <th><?php echo trans('horoscopes.users-table.id'); ?></th>
                                    <th class="hidden-xs"><?php echo trans('horoscopes.users-table.rtype'); ?></th>
                                    <th class="hidden-xs"><?php echo trans('horoscopes.users-table.fname'); ?></th>
                                    <th class="hidden-xs"><?php echo trans('horoscopes.users-table.email'); ?></th>
                                    <th class="hidden-xs"><?php echo trans('horoscopes.users-table.phone'); ?></th>
                                    <th><?php echo trans('horoscopes.users-table.actions'); ?></th>
                                    <th class="no-search no-sort"></th>
                                    <th class="no-search no-sort"></th>
                                </tr>
                                </thead>
                                <tbody id="horoscopes_table">
                                <?php $__currentLoopData = $horoscopes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horoscope): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($horoscope->orderID); ?></td>
                                        <td><?php echo e($horoscope->reptype); ?></td>
                                        <td class="hidden-xs"><?php echo e($horoscope->name); ?></td>
                                        <td class="hidden-xs"><a href="mailto:<?php echo e($horoscope->email); ?>" title="email <?php echo e($horoscope->email); ?>"><?php echo e($horoscope->email); ?></a></td>
                                        <td><?php echo e($horoscope->phone); ?></td>
                                        <td>
                                            <a class="btn btn-sm btn-success btn-block" href="<?php echo e(URL::to('horoscope/' . $horoscope->id)); ?>" data-toggle="tooltip" title="Show">
                                                <?php echo trans('horoscopes.buttons.show'); ?>

                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                <tbody id="search_results"></tbody>
                                <?php if(config('usersmanagement.enableSearchUsers')): ?>
                                    <tbody id="search_results"></tbody>
                                <?php endif; ?>

                            </table>

                            <?php if(config('usersmanagement.enablePagination')): ?>
                                <?php echo e($horoscopes->links()); ?>

                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('modals.modal-delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
    <?php if((count($horoscopes) > config('usersmanagement.datatablesJsStartCount')) && config('usersmanagement.enabledDatatablesJs')): ?>
        <?php echo $__env->make('scripts.datatables', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php echo $__env->make('scripts.delete-modal-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('scripts.save-modal-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if(config('usersmanagement.tooltipsEnabled')): ?>
        <?php echo $__env->make('scripts.tooltips', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(config('usersmanagement.enableSearchUsers')): ?>
        <?php echo $__env->make('scripts.search-horoscopes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\astrolife\resources\views/horoscope/show.blade.php ENDPATH**/ ?>