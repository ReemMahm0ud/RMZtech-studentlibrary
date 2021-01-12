<!DOCTYPE html>
<?php if (\Illuminate\Support\Facades\Blade::check('langrtl')): ?>
    <html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="rtl">
<?php else: ?>
    <html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<?php endif; ?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title><?php echo $__env->yieldContent('title', app_name()); ?></title>
        <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Laravel Starter'); ?>">
        <meta name="author" content="<?php echo $__env->yieldContent('meta_author', 'FasTrax Infotech'); ?>">
        <?php echo $__env->yieldContent('meta'); ?>

        
        <?php echo $__env->yieldPushContent('before-styles'); ?>

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        <?php echo e(style(mix('css/frontend.css'))); ?>


        <?php echo $__env->yieldPushContent('after-styles'); ?>
    </head>
    <body>
        <?php echo $__env->make('includes.partials.read-only', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="app">
            <?php echo $__env->make('includes.partials.logged-in-as', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('frontend.includes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="container">
                <?php echo $__env->make('includes.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>
            </div><!-- container -->
        </div><!-- #app -->

        <!-- Scripts -->
        <?php echo $__env->yieldPushContent('before-scripts'); ?>
        <?php echo script(mix('js/manifest.js')); ?>

        <?php echo script(mix('js/vendor.js')); ?>

        <?php echo script(mix('js/frontend.js')); ?>

        <?php echo $__env->yieldPushContent('after-scripts'); ?>

        <?php echo $__env->make('includes.partials.ga', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH C:\Users\ALEX STORE\Downloads\laravel-adminpanel-master\laravel-adminpanel-master\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>