    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?php echo e(asset('server/assets/vendor/libs/jquery/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('server/assets/vendor/libs/popper/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('server/assets/vendor/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('server//assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>

    <script src="<?php echo e(asset('server/assets/vendor/js/menu.js')); ?>"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?php echo e(asset('server/assets/vendor/libs/apex-charts/apexcharts.js')); ?>"></script>

    <!-- Main JS -->
    <script src="<?php echo e(asset('server/assets/js/main.js')); ?>"></script>

    <!-- Page JS -->
    <script src="<?php echo e(asset('server/assets/js/dashboards-analytics.js')); ?>"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
        $('#showToastPlacement').click(function(e) {
            e.preventDefault();
            $('.toast').addClass('show')
        });
        $(document).ready(function() {
            $(".icon").on('click', function(event) {
                if ($('.icon > i').hasClass('bx-minus')) {
                    $('.icon > i').removeClass('bx-minus').addClass('bx-plus');
                } else {
                    $('.icon > i').removeClass('bx-plus').addClass('bx-minus');
                }
            })
        });
        (function($) {
            $(document).ready(function() {
                $('.menu-item .active').parent().parent().addClass(
                    'active open');
            });
        })(jQuery);
        $('#form').on('submit', function() {
            $('button[type="submit"]').attr('disabled', 'true');
        });
    </script>
<?php /**PATH D:\web_ban_hang\ecommerce\resources\views/server/partial/script.blade.php ENDPATH**/ ?>