
<?php $__env->startSection('title', 'Danh sách danh mục'); ?>
<?php $__env->startSection('page-css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="card" style="margin-bottom: 30px">
        <h5 class="card-header">Hành động & Bộ lọc   
            <button class="btn btn-info"><a href="<?php echo e(route('admin.user.create')); ?>">Thêm mới</a></button>
        </h5>
        <div class="row">
            <div class="col-sm-3">
                <div class="row mb-3 p-md-3">
                    <div class="col-sm-6 ">
                        <select name="bulk-action" id="bulk-action" class="form-control">
                            <option selected>Hành động</option>
                            <option value="0">Xoá</option>
                            <option value="0">Active</option>
                            <option value="1">Inactive</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <button onclick="return bulkAction(this)" class="btn btn-outline-primary">Chọn</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="row mb-3 p-md-3">
                 
                    <div class="col-sm-3">
                        <select name="status" id="status" onchange="return search()" class="form-control">
                            <option disabled selected>Trạng thái</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="col-sm-3 ">
                        <select name="perPage" id="perPage" onchange="return search()" class="form-control">
                            <option disabled selected>Hiện thị</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                        </select>
                    </div>

                    <div class="col-sm-3 ">
                        <select name="sort" id="sort" onchange="return search()" class="form-control">
                            <option disabled selected>Sắp xếp</option>
                            <option value="asc">Tăng dần</option>
                            <option value="desc">Giảm dần</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card" style="margin-bottom: 20px">
        <h5 class="card-header">Danh sách</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">

                <thead>
                    <tr>
                        <th>
                            <input onclick="return checkAll(this)" style="font-size: 14px" class="form-check-input"
                                type="checkbox" id="chk-all">
                        </th>
                        <th>STT</th>
                        <th>Tên người dùng</th>
                        <th>Email</th>
                        <th>Quyền</th>
                        <th>Ảnh đại diện</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
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
                                <?php echo e($item->email); ?>

                            </td>
                            <td>
                                <ul class="list-unstyled">
                                    <?php $__currentLoopData = $item->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li> <span class="badge bg-label-info"><?php echo e($role->name); ?></span></li>                                     
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>

                            </td>
                            <td>
                                <img src="<?php echo e(asset('storage/app/'.$item->avatar)); ?>" alt="" title=""></a>
                            </td>


                            <td>
                                <a style="padding: 0.5em" class="btn btn-outline-primary"
                                    href="<?php echo e(route('admin.user.edit', $item->id)); ?>"><i class="bx bx-edit-alt me-1"></i>
                                    Sửa</a>
                                <a style="padding: 0.5em" class="btn btn-outline-danger"
                                    href="<?php echo e(route('admin.user.destroy', $item->id)); ?>" data-id="<?php echo e($item->id); ?>"
                                    data-confirm-delete="true"><i class="bx bx-trash me-1"></i>
                                    Xoá</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>

        </div>
    </div>
    <?php echo e($data->links('pagination::bootstrap-4')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-js'); ?>
    <script>
        function changeStatus(e) {
            let id = $(e).data('id');
            let token = $("meta[name='token']").attr("content");
            var url = "<?php echo e(route('admin.user.status', ':id')); ?>";
            url = url.replace(':id', id);
            let status = $(e).val();
            status = status == 1 ? 0 : 1;
            $.ajax({
                type: "patch",
                url: url,
                data: {
                    id: id,
                    status: status,
                    _token: token,

                },
                success: function(response) {
                    if (response['status'] == 200) {
                        $(e).val(status)
                    }

                }
            });
        }

        function checkAll(a) {
            $('input:checkbox[name=input]').not(a).prop('checked', a.checked);
        }

        function bulkAction(e) {
            let arr = [];
            $("input:checkbox[name=input]:checked").each(function() {
                arr.push($(this).val());
            });

            if (arr.length > 0) {
                let type = $('#bulk-action').val();
                switch (type) {
                    case '0':
                        Swal.fire({
                            title: "<?php echo e(config('message.title_delete')); ?>",
                            text: "<?php echo e(config('message.delete_sweet_alert')); ?>",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: "<?php echo e(config('message.yes_delete')); ?>"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                let token = $('meta[name=token]').attr('content');
                                let url = "<?php echo e(route('admin.user.destroy.list')); ?>"
                                $.ajax({
                                    type: "post",
                                    url: url,
                                    data: {
                                        ids: arr,
                                        _method: 'delete',
                                        _token: token
                                    },
                                    success: function(response) {
                                        if (response == 200) {
                                            Swal.fire(
                                                "<?php echo e(config('message.title_delete')); ?>",
                                                "<?php echo e(config('message.delete_success')); ?>",
                                                "<?php echo e(config('message.delete')); ?>"
                                            )
                                        }
                                    }
                                });

                            }
                        })
                        break;

                    default:
                        break;
                }

            }
        }

        function search(e) {
            let data = {};
            let sort = $('#sort').val();
            if (sort != null) {
                data['sort'] = sort
            }
            let status = $('#status').val();

            if (status != null) {
                data['status'] = status
            }
            let search = $('#search').val();
            if (search != null) {
                data['search'] = search
            }
            let perPage = $('#perPage').val();
            if (perPage != null) {
                data['perPage'] = perPage
            } else {
                data['perPage'] = 10
            }
            $.ajax({
                type: "get",
                url: "<?php echo e(route('admin.user.search')); ?>",
                data: data,
                success: function(response) {
                    if (response == '') {
                        let html = '<tr><td colspan="7" class="text-center"> Không tìm thấy</td></tr>';
                        $('tbody').html(html)
                    } else {
                        $('tbody').html(response)
                    }

                }
            });

        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('server.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web_ban_hang\ecommerce\resources\views/server/page/user/grid.blade.php ENDPATH**/ ?>