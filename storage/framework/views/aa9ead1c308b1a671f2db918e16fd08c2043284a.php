
<?php $__env->startSection('title', 'Sản phẩm'); ?>
<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('client.partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if(isset($slug)): ?>
        <input type="hidden" name="category" id="category" value="<?php echo e($slug); ?>">
    <?php endif; ?>
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Danh sách sản phẩm</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="<?php echo e(route('home.index')); ?>">Trang chủ</a></p>
                <p class="m-0 px-2">-</p>
                <?php if(isset($category)): ?>
                    <p class="m-0">Danh mục</p>
                    <p class="m-0 px-2">-</p>
                    <p class="m-0"><?php echo e($category->name); ?></p>
                <?php else: ?>
                    <p class="m-0">Cửa hàng</p>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">

            <!-- Shop Sidebar Start -->
            <?php echo $__env->make('client.page.product.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="dropdown ml-4">
                                <label for="">Sắp xếp theo: </label>
                                <select name="sort" id="sort" class="form-select" onchange="return filter(this)">
                                    <option value="new">Mới nhất</option>
                                    <option value="acs">Tăng dần</option>
                                    <option value="desc">Giảm dần</option>
                                </select>

                            </div>
                        </div>
                    </div>

                    <div class="row" id="list">
                        <?php echo $__env->make('client.page.product.item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    </div>

                    <?php echo $__env->make('client.page.product.paginate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        let filter = function(e) {
            var form = $('#form-filter');
            var actionUrl = form.attr('action');
            var sort = $(e).data('value');
            var search = $('#search').val();
            var data = form.serialize();
            if (typeof sort != 'undefined') {
                data += '&sort=' + sort;
            }
            if (typeof search != 'undefined') {
                data += '&search=' + search;
            }
            $.ajax({
                type: "Get",
                url: actionUrl,
                data: data,
                success: function(data) {
                    $('#list').html(data)
                }
            });
        }
        let search = function(e) {
            var search = $('#search').val();
            var form = $('#form-filter');
            var data = form.serialize();
            data += '&type=1&search=' + search ;
            $.ajax({
                type: "Get",
                url: actionUrl,
                data: data,
                success: function(data) {
                    $('#list').html(data)
                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web_ban_hang\ecommerce\resources\views/client/page/product/list.blade.php ENDPATH**/ ?>