<?php $__env->startSection('template_title'); ?>
	<?php echo e($user->first_name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('template_fastload_css'); ?>

	#map-canvas{
		min-height: 300px;
		height: 100%;
		width: 100%;
	}

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<div class="container mt-5">
		<!-- Section: Basic Info -->
		<section class="card profile-card mb-4 text-center">
			<div class="avatar z-depth-1-half">
				<img src="<?php if($user->profile && $user->profile->avatar_status == 1): ?>
				<?php echo e($user->profile->avatar); ?>

				<?php else: ?> <?php echo e(Gravatar::get($user->email)); ?>

				<?php endif; ?>" alt="<?php echo e($user->name); ?>" class="user-avatar" width="150;">
			</div>
			<!-- Card content -->
			<div class="card-body">
				<!-- Title -->
				<h4 class="card-title"><strong>	<?php echo e($user->first_name); ?></strong></h4>
				<h5><?php echo e($user->phone); ?></h5>
				<p class="dark-grey-text"><?php echo e($user->email); ?></p>



				<?php if($user->profile): ?>
					<?php if(Auth::user()->id == $user->id): ?>

						<?php echo HTML::icon_link(URL::to('/profile/'.Auth::user()->name.'/edit'), 'fa fa-fw fa-cog', trans('titles.editProfile'), array('class' => 'btn btn-small')); ?>


					<?php endif; ?>
				<?php else: ?>

					<p><?php echo e(trans('profile.noProfileYet')); ?></p>
					<?php echo HTML::icon_link(URL::to('/profile/'.Auth::user()->name.'/edit'), 'fa fa-fw fa-plus ', trans('titles.createProfile'), array('class' => 'btn btn-small')); ?>


				<?php endif; ?>
			</div>

		</section>
		<!-- Section: Basic Info -->

	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\astrolife\resources\views/profiles/show.blade.php ENDPATH**/ ?>