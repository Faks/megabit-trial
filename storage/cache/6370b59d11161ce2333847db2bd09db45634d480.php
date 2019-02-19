<?php $__env->startSection('content'); ?>
Test Content
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>