<?php if($product->hasPages()): ?>
    <div class="col-12 pb-1">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center mb-3">
                <li class="page-item <?php if($product->currentPage() == 1): ?> disabled <?php endif; ?> ">
                    <a class="page-link" href="<?php echo e($product->previousPageUrl()); ?>"
                        aria-label="Previous">
                        <span aria-hidden="true">«</span>
                        <span class="sr-only">Trước</span>
                    </a>
                </li>
                <?php for($i = 1; $i <= $product->total(); $i++): ?>
                    <li class="page-item <?php if($product->currentPage() == $i): ?> active <?php endif; ?>">
                        <a class="page-link" href="?page=<?php echo e($i); ?>"><?php echo e($i); ?></a>
                    </li>
                <?php endfor; ?>
                <li class="page-item <?php if($product->total() == $product->currentPage()): ?> disabled <?php endif; ?>">
                    <a class="page-link" href="<?php echo e($product->nextPageUrl()); ?>" aria-label="Next">
                        <span aria-hidden="true">»</span>
                        <span class="sr-only">Sau</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
<?php endif; ?>
<?php /**PATH D:\web_ban_hang\ecommerce\resources\views/client/page/product/paginate.blade.php ENDPATH**/ ?>