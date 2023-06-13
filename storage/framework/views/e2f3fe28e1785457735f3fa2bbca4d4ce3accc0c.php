<?php
    $stt = $data->perPage() * $data->currentPage() - $data->perPage();
?>

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><input class="form-check-input" type="checkbox" name="input" value="<?php echo e($item->id); ?>"
                id="cb-<?php echo e($item->id); ?>">
        </td>
        <td><?php
            echo $stt += 1;
        ?></td>
        </td>
        <td>
            <?php echo e($item->name); ?>

        </td>
        <td>
            /<?php echo e($item->slug); ?>

        </td>
        <td><span class="badge bg-label-primary me-1">
                <?php if($item->parent === '0'): ?>
                    Root
                <?php else: ?>
                    <?php echo e($item->parentItem->name); ?>

                <?php endif; ?>

            </span></td>
        <td>
            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" id="status" data-id="<?php echo e($item->id); ?>"
                    onchange="return changeStatus(this)" value="<?php echo e($item->status); ?>"
                    <?php echo e($item->status == 1 ? 'checked' : ''); ?>>
            </div>
        </td>
        <td>
            <a style="padding: 0.5em" class="btn btn-outline-primary"
                href="<?php echo e(route('admin.category.edit', $item->id)); ?>"><i class="bx bx-edit-alt me-1"></i>
                Sửa</a>
            <a style="padding: 0.5em" class="btn btn-outline-danger"
                href="<?php echo e(route('admin.category.destroy', $item->id)); ?>" data-id="<?php echo e($item->id); ?>"
                data-confirm-delete="true"><i class="bx bx-trash me-1"></i>
                Xoá</a>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\web_ban_hang\ecommerce\resources\views/server/page/product/grid-item.blade.php ENDPATH**/ ?>