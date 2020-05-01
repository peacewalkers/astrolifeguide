<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title><?php echo e(config('app.name', 'Astrolifeguide')); ?></title>
        <meta name="description" content="">
        <link rel="shortcut icon" href="<?php echo e(asset('astrolifeguide')); ?>/img/brand/favicon.ico">

        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <script src="https://kit.fontawesome.com/fef88c5b09.js" crossorigin="anonymous"></script>

        <!-- Icons -->

        

        <link href="<?php echo e(asset('astrolifeguide')); ?>/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="<?php echo e(asset('astrolifeguide')); ?>/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('astrolifeguide')); ?>/css/animate.css">
        <link rel="stylesheet" href="<?php echo e(asset('astrolifeguide')); ?>/css/fonts.css">
        <link rel="stylesheet" href="<?php echo e(asset('astrolifeguide')); ?>/css/flaticon.css">
        <link rel="stylesheet" href="<?php echo e(asset('astrolifeguide')); ?>/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo e(asset('astrolifeguide')); ?>/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo e(asset('astrolifeguide')); ?>/css/reset.css">

        <link type="text/css"  rel="stylesheet" href="<?php echo e(asset('astrolifeguide')); ?>/css/mdb.css">
        <link type="text/css"  rel="stylesheet" href="<?php echo e(asset('astrolifeguide')); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo e(asset('astrolifeguide')); ?>/css/style.css">
        <link rel="stylesheet" href="<?php echo e(asset('astrolifeguide')); ?>/css/responsive.css">




        

        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>;
        </script>


        <?php echo $__env->yieldContent('head'); ?>

    </head>
    <body>
        <div id="app">

            <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <main class="py-4" style="clear: both;">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
            <?php echo $__env->make('layouts.footers.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>

        
        <script src="<?php echo e(mix('/js/app.js')); ?>"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js"
                integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
                crossorigin="anonymous"></script>


        <script src="<?php echo e(asset('astrolifeguide')); ?>/js/popper.js"></script>
        <script src="<?php echo e(asset('astrolifeguide')); ?>/js/jquery.menu-aim.js"></script>
        <script src="<?php echo e(asset('astrolifeguide')); ?>/js/owl.carousel.js"></script>
        <script src="<?php echo e(asset('astrolifeguide')); ?>/js/jquery.inview.min.js"></script>
        <script src="<?php echo e(asset('astrolifeguide')); ?>/js/jquery.magnific-popup.js"></script>
        <script src="<?php echo e(asset('astrolifeguide')); ?>/js/custom.js"></script>
        <script src="<?php echo e(asset('astrolifeguide')); ?>/js/bootstrap.js"></script>
        <script src="<?php echo e(asset('astrolifeguide')); ?>/js/mdb.js"></script>

        <?php echo $__env->yieldPushContent('js'); ?>

        <?php echo $__env->yieldContent('footer_scripts'); ?>
    </body>
</html><?php /**PATH C:\laragon\www\astrolife\resources\views/layouts/app.blade.php ENDPATH**/ ?>