<!DOCTYPE html>
<html>
<head>
    <title>Nieric's Website</title>
    <?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body id="page-top" class="index">

<?php echo $__env->make('nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('partials.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>
</html>