<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title','Ngoc Duy Ecommerce'); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Ngoc Duy Ecommerce" name=" Ngoc Duy">
  
    <meta name="token" content="<?php echo e(csrf_token()); ?>">
    <!-- Favicon -->
   
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('server/assets/img/favicon/favicon.ico')); ?>" />

    <!--css -->
    <?php echo $__env->make('client.partial.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('css'); ?>
</head>

<body>

    <!--header -->
    <?php echo $__env->yieldContent('header'); ?>

    

    <!--content -->
    <?php echo $__env->yieldContent('content'); ?>

    <!--footer -->
    <?php echo $__env->make('client.partial.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--scritp -->
    <?php echo $__env->make('client.partial.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('js'); ?>
</body>

</html>
<?php /**PATH D:\web_ban_hang\ecommerce\resources\views/client/layout/master.blade.php ENDPATH**/ ?>