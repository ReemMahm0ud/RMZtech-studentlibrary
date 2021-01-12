<?php if (is_impersonating()) : ?>
    <div class="alert alert-warning logged-in-as">
        You are currently logged in as <?php echo e(auth()->user()->name); ?>. <a href="<?php echo e(route('impersonate.leave')); ?>">Return to your account</a>.
    </div><!--alert alert-warning logged-in-as-->
<?php endif; ?>
<?php /**PATH C:\Users\ALEX STORE\Downloads\laravel-adminpanel-master\laravel-adminpanel-master\resources\views/includes/partials/logged-in-as.blade.php ENDPATH**/ ?>