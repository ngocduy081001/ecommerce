
<?php $__env->startSection('title', 'Sản phẩm mới'); ?>
<?php $__env->startSection('page-css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('server/libs/select-tree/style.css')); ?>">
    <style>
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }
    </style>
<?php $__env->startSection('content'); ?>

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Sản phẩm / </span>Tạo mới
    </h4>
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form id="form" action="<?php echo e(route('admin.product.config', $id)); ?>" method="POST">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li> <?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <?php $__currentLoopData = $group_options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group_option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row mb-3">
                                    <label class="col-sm-4 col-form-label" for="name"><?php echo e($group_option->name); ?></label>
                                    <div class="col-sm-8">
                                        <?php $__currentLoopData = $group_option->option; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input type="checkbox" name="<?php echo e($group_option->id); ?>[]" id=""
                                                value="<?php echo e($item->id); ?>"> <?php echo e($item->name); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <div class="mt-2">
                                            <div class="">
                                                <a href="#" class="">Thêm mới</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('page-js'); ?>
        <script src="<?php echo e(asset('server/js/jquery-3.4.1.min.js')); ?>"></script>
        <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
        <script src="<?php echo e(asset('server/libs/select-tree/comboTreePlugin.js')); ?>"></script>
        <script>
            var format = function(num) {
                var str = num.toString().replace("$", ""),
                    parts = false,
                    output = [],
                    i = 1,
                    formatted = null;
                if (str.indexOf(".") > 0) {
                    parts = str.split(".");
                    str = parts[0];
                }
                str = str.split("").reverse();
                for (var j = 0, len = str.length; j < len; j++) {
                    if (str[j] != ",") {
                        output.push(str[j]);
                        if (i % 3 == 0 && j < (len - 1)) {
                            output.push(",");
                        }
                        i++;
                    }
                }
                formatted = output.reverse().join("");
                return ("$" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
            };
            $(function() {
                $("#price").keyup(function(e) {
                    $(this).val(format($(this).val()));
                });
            });
        </script>
        <script>
            window.myBulkSelectCallback = function(data) {
                data.forEach((e, index) => {
                    $('form').append('<input type="hidden" name="album[]" id="' + e.name + '">')
                    $('#a').append('<img class="border" width="80px" src="' + e.absolute_url +
                        '"><i onclick="alert(1)" class="fas fa-times"></i>');
                });
            };
        </script>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('server.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web_ban_hang\ecommerce\resources\views/server/page/product/config.blade.php ENDPATH**/ ?>