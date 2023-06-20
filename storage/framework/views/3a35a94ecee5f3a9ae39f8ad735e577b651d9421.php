
<?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(count($item['children']) > 1): ?>
        <div class="nav-item dropdown">
            <a href="<?php echo e(route('product.list.to.category',$item['slug'])); ?>" class="nav-link" data-toggle="dropdown"> <i
                    class="fa fa-angle-down float-right mt-1"></i><?php echo e($item['name']); ?></a>
            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                <?php echo $__env->make('client.partial.nav', ['cat' => $item['children']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    <?php else: ?>
        <a href="<?php echo e(route('product.list.to.category',$item['slug'])); ?>" class="nav-item nav-link"><?php echo e($item['name']); ?></a>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\web_ban_hang\ecommerce\resources\views/client/partial/nav.blade.php ENDPATH**/ ?>