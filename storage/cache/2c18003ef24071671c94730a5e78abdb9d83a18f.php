<?php $__env->startSection('content'); ?>
    <h1>Page Not Found</h1>
    <p>Sorry, but the page you were trying to view does not exist.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>