<div class="col-lg-3 col-md-12">
    <!-- Price Start -->
    <div class="border-bottom mb-4 pb-4">
        <h5 class="font-weight-semi-bold mb-4">Lọc theo giá</h5>
        <form action="<?php echo e(route('product.filter')); ?>" method="get" id="form-filter">           
            
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                <input onclick="return filter(this)" name="price[]" value="0-100000" type="checkbox"
                    class="price custom-control-input" id="price-1">
                <label class="custom-control-label" for="price-1">0 - 100.000 VND</label>
                <span class="badge border font-weight-normal"><?php echo e($product_0); ?></span>
            </div>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                <input onclick="return filter(this)" name="price[]" value="100000-200000" type="checkbox"
                    class="price custom-control-input" id="price-2">
                <label class="custom-control-label" for="price-2">100.000 VND - 200.000 VND</label>
                <span class="badge border font-weight-normal"><?php echo e($product_1); ?></span>
            </div>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                <input onclick="return filter(this)" name="price[]" value="200000-300000" type="checkbox"
                    class="price custom-control-input" id="price-3">
                <label class="custom-control-label" for="price-3">200.000 VND - 300.000 VND</label>
                <span class="badge border font-weight-normal"><?php echo e($product_2); ?></span>
            </div>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                <input onclick="return filter(this)"name="price[]" value="300000-400000" type="checkbox"
                    class="price custom-control-input" id="price-4">
                <label class="custom-control-label" for="price-4">300.000 VND - 400.000 VND</label>
                <span class="badge border font-weight-normal"><?php echo e($product_3); ?></span>
            </div>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                <input onclick="return filter(this)"name="price[]" value="400000-500000" type="checkbox"
                    class="price custom-control-input" id="price-5">
                <label class="custom-control-label" for="price-5">400.000 VND - 500.000 VND</label>
                <span class="badge border font-weight-normal"><?php echo e($product_4); ?></span>
            </div>

    </div>
    <!-- Price End -->

    <!-- Color Start -->
    <div class="border-bottom mb-4 pb-4">
        <h5 class="font-weight-semi-bold mb-4">Lọc theo màu sắc</h5>
        <?php $__currentLoopData = $color; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                <input onclick="return filter(this)" value="<?php echo e($item->name); ?>" name="color[]" type="checkbox"
                    class=" color custom-control-input" id="color-<?php echo e($item->id); ?>">
                <label class="custom-control-label" for="color-<?php echo e($item->id); ?>"><?php echo e($item->name); ?></label>
                <span class="badge border font-weight-normal"><?php echo e(count($item->hasProduct)); ?></span>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
    <!-- Color End -->

    <!-- Size Start -->
    <div class="mb-5">
        <h5 class="font-weight-semi-bold mb-4">Lọc theo size</h5>

    
        <?php $__currentLoopData = $size; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                <input onclick="return filter(this)" name="size[]" value="<?php echo e($item->name); ?>" type="checkbox"
                    class="size custom-control-input" id="size-<?php echo e($item->id); ?>">
                <label class="custom-control-label" for="size-<?php echo e($item->id); ?>"><?php echo e($item->name); ?></label>
                <span class="badge border font-weight-normal"><?php echo e(count($item->hasProduct)); ?></span>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
    </div>
    <!-- Size End -->
</div>
<?php /**PATH D:\web_ban_hang\ecommerce\resources\views/client/page/product/side-bar.blade.php ENDPATH**/ ?>