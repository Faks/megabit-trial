<!doctype html>
<html class="no-js" lang="">
<?php echo $__env->make('template.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Container -->
<div class="container pt-10">
    <?php echo $__env->yieldContent('content'); ?>
</div>

<footer class="pt-10">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="text-center text-uppercase"><?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?></h5>
            </div>
        </div>
    </div>
</footer>

</body>

<?php echo $__env->make('template.script', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</html>
