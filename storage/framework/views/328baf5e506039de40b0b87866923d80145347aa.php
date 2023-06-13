
<?php $__env->startSection('title', 'Tạo danh mục'); ?>
<?php $__env->startSection('page-css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('server/libs/select-tree/style.css')); ?>">
<?php $__env->startSection('content'); ?>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Người dùng / </span>Sửa</h4>
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form id="form" action="<?php echo e(route('admin.user.update', [$user->id])); ?>" method="POST"
                        enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo e($user->id); ?>">
                        <?php echo method_field('PUT'); ?>
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
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="name">Tên người dùng</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Nhập tên người dùng " value="<?php echo e($user->name); ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="formFile" class="col-sm-2 col-form-label">Ảnh đại diện</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" accept="image/*"
                                    onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])"
                                    id="avatar" name="avatar" value="<?php echo e($user->avatar); ?>">

                                <img id="output" src="<?php echo e($user->avatar); ?>" style="margin-top: 20px" width="100px"
                                    height="100px" />
                            </div>

                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="name">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Nhập địa chỉ email " value="<?php echo e($user->email); ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="password">Mật khẩu</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Nhập địa chỉ email " value="<?php echo e($user->password); ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="password_cf">Xác nhận mật khẩu</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password_cf" name="password_cf"
                                    placeholder="Nhập địa chỉ email " value="<?php echo e($user->password); ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="parent">Quyền</label>
                            <div class="col-sm-10">
                                <input type="text" id="role" name="role" class="form-control"
                                    placeholder="Lựa chọn vị trí">
                            </div>
                        </div>
                        <div class="row justify-content-end">

                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Gửi</button>
                            </div>
                        </div>
                </div>

                </form>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
    <script src="<?php echo e(asset('server/js/jquery-3.4.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('server/libs/select-tree/comboTreePlugin.js')); ?>"></script>
    <script>
        let roles = <?php echo json_encode($roles, 15, 512) ?>;

        let select = $('#role').comboTree({
            source: roles,
            isMultiple: true,
            selected: <?php echo e($role); ?>

        });
    
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('server.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web_ban_hang\ecommerce\resources\views/server/page/user/edit.blade.php ENDPATH**/ ?>