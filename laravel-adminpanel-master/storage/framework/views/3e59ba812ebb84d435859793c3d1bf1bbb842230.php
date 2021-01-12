<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <a href="<?php echo e(route('frontend.index')); ?>" class="navbar-brand"><?php echo e(app_name()); ?></a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo app('translator')->get('labels.general.toggle_navigation'); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <?php if(config('locale.status') && count(config('locale.languages')) > 1): ?>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownLanguageLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"><?php echo app('translator')->get('menus.language-picker.language'); ?> (<?php echo e(strtoupper(app()->getLocale())); ?>)</a>

                    <?php echo $__env->make('includes.partials.lang', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </li>
            <?php endif; ?>

            <?php if(auth()->guard()->check()): ?>
                <li class="nav-item"><a href="<?php echo e(route('frontend.user.dashboard')); ?>" class="nav-link <?php echo e(active_class(Route::is('frontend.user.dashboard'))); ?>"><?php echo app('translator')->get('navs.frontend.dashboard'); ?></a></li>
            <?php endif; ?>

            <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item"><a href="<?php echo e(route('frontend.auth.login')); ?>" class="nav-link <?php echo e(active_class(Route::is('frontend.auth.login'))); ?>"><?php echo app('translator')->get('navs.frontend.login'); ?></a></li>

                <?php if(config('access.registration')): ?>
                    <li class="nav-item"><a href="<?php echo e(route('frontend.auth.register')); ?>" class="nav-link <?php echo e(active_class(Route::is('frontend.auth.register'))); ?>"><?php echo app('translator')->get('navs.frontend.register'); ?></a></li>
                <?php endif; ?>
            <?php else: ?>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuUser" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"><?php echo e($logged_in_user->name); ?></a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuUser">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view backend')): ?>
                            <a href="<?php echo e(route('admin.dashboard')); ?>" class="dropdown-item"><?php echo app('translator')->get('navs.frontend.user.administration'); ?></a>
                        <?php endif; ?>

                        <a href="<?php echo e(route('frontend.user.account')); ?>" class="dropdown-item <?php echo e(active_class(Route::is('frontend.user.account'))); ?>"><?php echo app('translator')->get('navs.frontend.user.account'); ?></a>
                        <a href="<?php echo e(route('frontend.auth.logout')); ?>" class="dropdown-item"><?php echo app('translator')->get('navs.general.logout'); ?></a>
                    </div>
                </li>
            <?php endif; ?>

            <li class="nav-item"><a href="<?php echo e(route('frontend.contact')); ?>" class="nav-link <?php echo e(active_class(Route::is('frontend.contact'))); ?>"><?php echo app('translator')->get('navs.frontend.contact'); ?></a></li>
        </ul>
    </div>
</nav>
<?php /**PATH C:\Users\ALEX STORE\Downloads\laravel-adminpanel-master\laravel-adminpanel-master\resources\views/frontend/includes/nav.blade.php ENDPATH**/ ?>