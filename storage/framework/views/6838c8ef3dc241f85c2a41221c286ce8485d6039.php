<div class="main_header_wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- hs Navigation Start -->
    <div class="hs_navigation_header_wrapper" >
        <div class="container">
            <div class="row">
                <div class="hs_header_logo_left">
                    <div class="hs_logo_wrapper">
                        <a href="/"><img src="<?php echo e(asset('astrolifeguide')); ?>/img/header/logo.png" width="350" class="img-responsive" alt="logo" title="Logo"></a>
                    </div>
                </div>

                <div class="hs_header_logo_right">

                </div>
                <div class="col-lg-6 col-md-7 col-sm-7 col-xs-7" style="margin-left: 175px;">
                    <div class="hs_top_right_wrapper mt-3">

                        <ul class="cart_login_wrapper">
                            <div class="hs_effect_btn">
                                <ul>
                                    <li data-animation="animated flipInX"><a href="#" class="hs_btn_hover text-white">Book Appointment</a></li>
                                </ul>
                            </div>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs Navigation End -->
    <!-- hs top header Start -->

</div>
<div class="hs_header_Wrapper d-none d-md-block">
    <div class="container">
        <!-- hs top header Start -->
        <div class="hs_header_logo_right">
            <nav class="hs_main_menu">
                <ul class="menubuttons">
                    <li>
                    <li><a class="menu-button" href="/">Home</a></li>

                    <li>
                        <a class="menu-button" href="#about">About Us</a>
                    </li>

                    <li class="dropdown menu-button">
                        <a class="menu-button" href="#services">Services</a>
                    </li>

                    <li class="dropdown menu-button">
                        <a class="menu-button" href="#">Blog </a>
                    </li>
                    <li>
                        <a class="menu-button" href="/contact">Contact </a>
                    </li>

                    <?php if(auth()->guard()->guest()): ?>
                        <li><a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(trans('titles.login')); ?></a></li>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php if((Auth::User()->profile) && Auth::user()->profile->avatar_status == 1): ?>
                                    
                                <?php else: ?>
                                    <div class="user-avatar-nav"></div>
                                <?php endif; ?>
                                <?php echo e(Auth::user()->first_name); ?> <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item <?php echo e(Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'active' : null); ?>" href="<?php echo e(url('/profile/'.Auth::user()->name)); ?>">
                                    <?php echo trans('titles.profile'); ?>

                                </a>
                                <div class="dropdown-divider"></div>
                                <?php if (Auth::check() && Auth::user()->hasRole('admin')): ?>
                                <a class="dropdown-item " href="/horoscopes">
                                    <?php echo trans('titles.dashboard'); ?>

                                </a>
                                <div class="dropdown-divider"></div>
                                <?php endif; ?>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
            <div class="hs_btn_wrapper hidden-md">
                
            </div>
        </div>
    </div>
    <!-- hs top header End -->
</div>
<header class="mobail_menu d-block d-md-none">
    <div class="container">
        <div class="row">
            <div class="float-left">
                <div class="hs_logo">
                    <a href="/"><img src="<?php echo e(asset('astrolifeguide')); ?>/img/header/logo.png" width="250" alt="Logo" title="Logo"></a>
                </div>
            </div>
            <div class="float-right pl-2">
                <div class="cd-dropdown-wrapper">
                    <a class="house_toggle" href="#">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="511.63px" height="511.631px" viewbox="0 0 511.63 511.631" style="enable-background:new 0 0 511.63 511.631;" xml:space="preserve">
									<g>
                                        <g>
                                            <path d="M493.356,274.088H18.274c-4.952,0-9.233,1.811-12.851,5.428C1.809,283.129,0,287.417,0,292.362v36.545
											c0,4.948,1.809,9.236,5.424,12.847c3.621,3.617,7.904,5.432,12.851,5.432h475.082c4.944,0,9.232-1.814,12.85-5.432
											c3.614-3.61,5.425-7.898,5.425-12.847v-36.545c0-4.945-1.811-9.233-5.425-12.847C502.588,275.895,498.3,274.088,493.356,274.088z"></path>
                                            <path d="M493.356,383.721H18.274c-4.952,0-9.233,1.81-12.851,5.427C1.809,392.762,0,397.046,0,401.994v36.546
											c0,4.948,1.809,9.232,5.424,12.854c3.621,3.61,7.904,5.421,12.851,5.421h475.082c4.944,0,9.232-1.811,12.85-5.421
											c3.614-3.621,5.425-7.905,5.425-12.854v-36.546c0-4.948-1.811-9.232-5.425-12.847C502.588,385.53,498.3,383.721,493.356,383.721z"></path>
                                            <path d="M506.206,60.241c-3.617-3.612-7.905-5.424-12.85-5.424H18.274c-4.952,0-9.233,1.812-12.851,5.424
											C1.809,63.858,0,68.143,0,73.091v36.547c0,4.948,1.809,9.229,5.424,12.847c3.621,3.616,7.904,5.424,12.851,5.424h475.082
											c4.944,0,9.232-1.809,12.85-5.424c3.614-3.617,5.425-7.898,5.425-12.847V73.091C511.63,68.143,509.82,63.861,506.206,60.241z"></path>
                                            <path d="M493.356,164.456H18.274c-4.952,0-9.233,1.807-12.851,5.424C1.809,173.495,0,177.778,0,182.727v36.547
											c0,4.947,1.809,9.233,5.424,12.845c3.621,3.617,7.904,5.429,12.851,5.429h475.082c4.944,0,9.232-1.812,12.85-5.429
											c3.614-3.612,5.425-7.898,5.425-12.845v-36.547c0-4.952-1.811-9.231-5.425-12.847C502.588,166.263,498.3,164.456,493.356,164.456z"></path>
                                        </g>
                                    </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
								</svg>
                    </a>
                    <nav class="cd-dropdown">
                        <h2><a href="/">Astrolifeguide</a></h2>
                        <a href="#" class="cd-close">Close</a>
                        <ul class="cd-dropdown-content">

                            <li><a href="/">Home</a></li>
                            <li><a href="#about">About US</a></li>

                            <!-- .has-children -->
                            <li class="has-children">
                                <a href="#services">Services</a>
                            </li>
                            <!-- .has-children -->
                            <li class="has-children">
                                <a href="#">Blog</a>
                            </li>
                            <!-- .has-children -->
                            <li>
                                <a href="/contact">Contact</a>
                            </li>
                        </ul>
                        <!-- .cd-dropdown-content -->
                    </nav>
                    <!-- .cd-dropdown -->
                </div>
            </div>
        </div>
    </div>
    <!-- .cd-dropdown-wrapper -->
</header>
<?php /**PATH C:\laragon\www\astrolife\resources\views/partials/nav.blade.php ENDPATH**/ ?>