
<?php $__env->startSection('title', 'Thanh toán'); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('client.partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Thanh toán</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Thanh toán</p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Thông tin nhận hàng</h4>
                    <form action="<?php echo e(route('cart.post.check.out')); ?>" method="post" id="form-checkout">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="cast_total" value="<?php echo e($cast_total); ?>">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="font-weight-bold">Họ và tên</label>
                                <input style="border: 1px solid #cecbcb" class="form-control" type="text"
                                    placeholder="Phạm Trần ngọc Duy" value="Phạm Trần ngọc Duy" required name="name">
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="font-weight-bold">Số điện thoại</label>
                                <input style="border: 1px solid #cecbcb" class="form-control" type="text"
                                    placeholder="+84 396 505 693" value="0396505693" required name="phone">
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="font-weight-bold">E-mail</label>
                                <input style="border: 1px solid #cecbcb" class="form-control" type="email"
                                    placeholder="ngocduy081001@gmail.com" value="ngocduy081001@gmail.com" required name="email">
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="font-weight-bold">Địa chỉ nhận hàng</label>
                                <input style="border: 1px solid #cecbcb" class="form-control" type="text"
                                    placeholder="63 Lê Lai" value="63 Lê Lai " name="address">
                            </div>
                            <div class="col-md-12 ">
                                <label class="font-weight-bold">Ghi chú</label>
                                <textarea style="border: 1px solid #cecbcb" class="form-control" id="textAreaExample1" rows="4"></textarea>

                            </div>
                            <input type="hidden" value="" name="payment">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Thông tin đơn hàng</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Sản phẩm</h5>
                        <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="d-flex justify-content-between">
                                <p><?php echo e($item['product']['name']); ?></p>
                                <p><?php echo e($item['quantity']); ?></p> x
                                <p><?php echo number_format($item['price'], 0, ',', '.'); ?></p>
                                <p><?php echo number_format($item['quantity'] * $item['price'], 0, ',', '.'); ?> VND</p>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <hr class="mt-0">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Tổng tiền</h6>
                            <h6 class="font-weight-medium"><?php echo number_format($cast_total, 0, ',', '.'); ?> VND</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Giảm giá</h6>
                            <h6 class="font-weight-medium">0 VND</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Thanh toán</h5>
                            <h5 class="font-weight-bold"><?php echo number_format($cast_total, 0, ',', '.'); ?> VND</h5>
                        </div>
                    </div>
                </div>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Phương thức thanh toán</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" value="1"
                                    id="shipcode">
                                <label class="custom-control-label" for="shipcode">Thanh toán khi nhận hàng</label>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <button onclick="return submit(this)"
                            class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Thanh toán</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        let submit = function() {
            let payment = $('input[name=payment]:checked').val();
            if (typeof payment !== 'undefined') {
                $('input[name=payment]').val(payment)
                $('#form-checkout').submit();
            } else {
                alert('Vui lòng chọn phương thức thanh toán')
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web_ban_hang\ecommerce\resources\views/client/page/cart/checkout.blade.php ENDPATH**/ ?>