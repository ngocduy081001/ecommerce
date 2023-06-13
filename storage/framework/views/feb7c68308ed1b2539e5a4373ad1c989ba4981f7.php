<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ngoc Duy Ecommerce</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Ngoc Duy Ecommerce" name=" Ngoc Duy">
    <meta content="Ngoc Duy Ecommerces" name="Website ban hang">
    <meta name="token" content="<?php echo e(csrf_token()); ?>">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

     <!--css -->
     <?php echo $__env->make('client.partial.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

    <!--header -->
    <?php echo $__env->make('client.partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--content -->
    <?php echo $__env->yieldContent('content'); ?>

    <!--footer -->
    <?php echo $__env->make('client.partial.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
    <!--scritp -->
    <?php echo $__env->make('client.partial.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH D:\web_ban_hang\ecommerce\resources\views/client/layout/master.blade.php ENDPATH**/ ?>