
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
                    <div class="col-xl-12">
                        <div class="nav-align-top mb-4">
                            <ul class="nav nav-pills mb-3" role="tablist">
                                <li class="nav-item">
                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home"
                                        aria-selected="true">
                                        Thông tin sản phẩm
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile"
                                        aria-selected="false">
                                        Biến thể
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-top-messages" aria-controls="navs-pills-top-messages"
                                        aria-selected="false">
                                        Gán giá trị
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-top-messages" aria-controls="navs-pills-top-messages"
                                        aria-selected="false">
                                        Thanh toán
                                    </button>
                                </li>
                            </ul>
                            <form id="form" action="<?php echo e(route('admin.product.store')); ?>" method="POST">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="navs-pills-top-home" role="tabpanel">

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
                                            <div class="col-3">
                                                
                                                <div class="mb-3 justify-content-center">
                                                    <label for="formFile" class="form-label" for="name">Ảnh đại
                                                        diện</label><br>
                                                    <div class="border border-dark" style="width: 150px ; height: 150px;">
                                                        <img src="https://vapa.vn/wp-content/uploads/2022/12/anh-nen-mau-trang-001.jpg"
                                                            onclick="filemanager.selectFile('avatar')" width="150px" ;
                                                            height="150px" id="avatar-preview" class="p-1">
                                                    </div>
                                                    <span class="btn btn-primary text-center mt-2"> chọn ảnh </span>
                                                    <input type="text" class="d-none" name="avatar" id="avatar"
                                                        value><br>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <div class=" row mb-3">
                                                    <div class="col-sm-6">
                                                        <label class=" form-label" for="name">Tên sản
                                                            phẩm</label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" onkeyup="changeAlias(this)"
                                                            onchange="changeAlias(this)" placeholder="Nhập tên sản phẩm ">
                                                    </div>
                                                    <div class="col-sm-6">

                                                        <label class=" form-label" for="Slug">Đường dẫn</label>
                                                        <input type="text" class="form-control" id="slug"
                                                            name="slug" placeholder="Nhập đường dẫn">

                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-sm-6">
                                                        <label class=" form-label" for="parent">Danh mục</label>
                                                        <input autocomplete="off" type="text" class="form-control"
                                                            placeholder="Chọn danh mục" id="category">
                                                        <input type="hidden" name="category_id" id="category_id">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class=" form-label" for="stock">Số lượng</label>
                                                        <input type="number" class="form-control" id="stock_default"
                                                            name="stock_default" placeholder="Nhập số lượng">
                                                    </div>
                                                </div>
                                                <div class=" row mb-3">
                                                    <div class="col-sm-6">
                                                        <label class=" form-label" for="price">Giá</label>
                                                        <input type="text" class="form-control" id="price"
                                                            onkeypress="return validate(event,this)"
                                                            placeholder="Nhập giá sản phẩm ">
                                                        <input type="number" hidden value="" name="price_default">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class=" form-label" for="price_sale">Giá giảm</label>
                                                        <input type="text" class="form-control" id="price_sale"
                                                            onkeypress="return validate(event,this)"
                                                            placeholder="Nhập giá sản phẩm ">
                                                        <input type="number" hidden value="" name="price_sale_default">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-6">
                                                        <label class=" form-label" for="description">Mô tả sản
                                                            phẩm</label>
                                                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class=" form-label" for="detail">Chi tiết sản
                                                            phẩm</label>
                                                        <textarea class="form-control" id="detail" name="detail" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-name">Màu
                                                sắc</label>
                                            <div class="col-sm-10">
                                                <?php $__currentLoopData = $color; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="form-check form-check-inline mt-3 ">
                                                        <input name="color[]" value="<?php echo e($item->id); ?>"
                                                            data-value="<?php echo e($item->name); ?>" class="color form-check-input"
                                                            onclick="return bien_the()" type="checkbox"
                                                            id="color-<?php echo e($item->id); ?>" value="<?php echo e($item->id); ?>">
                                                        <label class="form-check-label"
                                                            for="color-<?php echo e($item->id); ?>"><?php echo e($item->name); ?></label>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-name">Kích
                                                thước</label>
                                            <div class="col-sm-10">
                                                <?php $__currentLoopData = $size; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="form-check form-check-inline mt-3 ">
                                                        <input name="size[]" value="<?php echo e($item->id); ?>"
                                                            data-value="<?php echo e($item->name); ?>" class="size form-check-input"
                                                            onclick="return bien_the()" type="checkbox"
                                                            id="size-<?php echo e($item->id); ?>" value="<?php echo e($item->id); ?>">
                                                        <label class="form-check-label"
                                                            for="size-<?php echo e($item->id); ?>"><?php echo e($item->name); ?></label>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>


                                        <div class="table-responsive text-nowrap">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Biến thể</th>
                                                        <th>Giá</th>
                                                        <th>Số lượng</th>
                                                        <th>Ảnh</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">

                                    </div>

                                </div>
                                <button type="submit" onclick="return getTable(this)" class="btn btn-primary">Lưu
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('page-js'); ?>
        <script src="<?php echo e(asset('server/js/jquery-3.4.1.min.js')); ?>"></script>
        <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
        <script src="<?php echo e(asset('server/libs/select-tree/comboTreePlugin.js')); ?>"></script>
        <script>
            let data = <?php echo json_encode($result, 15, 512) ?>;
            let select = $('#category').comboTree({
                source: data,
            });
            $('#category').change(function() {
                $('#category_id').val(select.getSelectedIds());
            })

            function removeVietnameseTones(str) {
                str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
                str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
                str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
                str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
                str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
                str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
                str = str.replace(/đ/g, "d");
                str = str.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A");
                str = str.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E");
                str = str.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I");
                str = str.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O");
                str = str.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U");
                str = str.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y");
                str = str.replace(/Đ/g, "D");
                // Một vài bộ encode coi các dấu mũ, dấu chữ như một kí tự riêng biệt nên thêm hai dòng này
                str = str.replace(/\u0300|\u0301|\u0303|\u0309|\u0323/g, ""); // ̀ ́ ̃ ̉ ̣  huyền, sắc, ngã, hỏi, nặng
                str = str.replace(/\u02C6|\u0306|\u031B/g, ""); // ˆ ̆ ̛  Â, Ê, Ă, Ơ, Ư
                // Remove extra spaces
                // Bỏ các khoảng trắng liền nhau
                str = str.replace(/ + /g, " ");
                str = str.trim();
                // Remove punctuations
                // Bỏ dấu câu, kí tự đặc biệt
                str = str.replace(
                    /!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|-|{|}|\||\\/g,
                    " "
                );
                return str;
            }

            function changeAlias(e) {
                var name = $(e).val();
                var alias = removeVietnameseTones(name.toLowerCase());
                alias = alias.replaceAll(" ", "-");
                $("#slug").val(alias);
            }
        </script>
        <script>
            var format = function(num) {

                var str = num.toString().replace("đ", ""),
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
                return ("đ" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
            };
            $(function() {
                $("#price").keyup(function(e) {
                    let a = $(this).val();
                    let b = a.replaceAll(',', '')
                    let c = b.replace('đ', '');
                    $('input[name=price_default]').val(c)
                    $(this).val(format($(this).val()));
                });
                $("#price_sale").keyup(function(e) {
                    let a = $(this).val();
                    let b = a.replaceAll(',', '')
                    let c = b.replace('đ', '');
                    $('input[name=price_sale_default]').val(c)
                    $(this).val(format($(this).val()));
                });
            });
        </script>
        <script>
            window.onload = function() {
                CKEDITOR.replace('description', {
                    filebrowserBrowseUrl: filemanager.ckBrowseUrl,
                });
                CKEDITOR.replace('detail', {
                    filebrowserBrowseUrl: filemanager.ckBrowseUrl,
                });
            }
            window.myBulkSelectCallback = function(data) {
                data.forEach((e, index) => {
                    $('form').append('<input type="hidden" name="album[]" id="' + e.name + '">')
                    $('#a').append('<img class="border" width="80px" src="' + e.absolute_url +
                        '"><i onclick="alert(1)" class="fas fa-times"></i>');
                });
            };

            function validate(evt, e) {

                var theEvent = evt || window.event;

                // Handle paste
                if (theEvent.type === 'paste') {
                    key = event.clipboardData.getData('text/plain');
                } else {
                    // Handle key press
                    var key = theEvent.keyCode || theEvent.which;
                    key = String.fromCharCode(key);
                }
                var regex = /[0-9]|\./;
                if (!regex.test(key)) {
                    theEvent.returnValue = false;
                    if (theEvent.preventDefault) theEvent.preventDefault();
                }

            }
            let bien_the = function(e) {

                let size = $('.size:checked');
                let color = $('.color:checked')
                let sizeArr = [];
                let colorArr = [];
                size.each(function() {
                    sizeArr.push([$(this).data('value'), $(this).val()]);
                });
                color.each(function() {
                    colorArr.push([$(this).data('value'), $(this).val()]);
                });
                let data = [];
                let html = '';
                if (size.length == 0 && colorArr.length > 0) {
                    for (let y = 0; y < colorArr.length; y++) {
                        a = [colorArr[y]];
                        data.push(a);
                    }
                }
                if (colorArr.length == 0 && size.length > 0) {
                    for (let y = 0; y < sizeArr.length; y++) {
                        a = [sizeArr[y]];
                        data.push(a);
                    }
                }
                if (colorArr.length > 0 && sizeArr.length > 0) {
                    if (colorArr.length > sizeArr.length) {
                        for (let x = 0; x < colorArr.length; x++) {

                            for (let y = 0; y < sizeArr.length; y++) {
                                a = [colorArr[x], sizeArr[y]];
                                data.push(a);
                            }
                        }
                    } else {
                        for (let x = 0; x < sizeArr.length; x++) {

                            for (let y = 0; y < colorArr.length; y++) {
                                a = [colorArr[y], sizeArr[x]];
                                data.push(a);
                            }
                        }
                    }
                }
                let price = $('input[name=price_default]').val();
                let stock = $('#stock_default').val();

                data.forEach(function(e, index) {
                    if (e.length > 1) {
                        html += "<tr  id='tr-" + index + "'>"
                        html += "<td>" + e[1][0] + " - " + e[0][0] +"<input type='hidden' value='"+e[1][1]+","+e[0][1]+"' name='size_color[]'> </td>";
                    } else {
                        html += "<tr id='tr-" + index + "'>"
                        html += "<td data-value='" + e[0][1] + "'>" + e[0][0] + "</td>";
                    }
                    html +=
                        '<td><input type="number" class="form-control" placeholder="Giá" name="price[]"   value="' +
                        price + '"></td>';
                    html +=
                        '<td><input type="number" class="form-control"  placeholder="Số lượng" name="stock[]" value="' +
                        stock + '"></td>';
                    html +=
                        '<td> <input class="d-none" type="text" id="sp-' + index +
                        '" name="image[]"> <img data-id="' + index +
                        '" id="sp-' + index + '-preview" width="80px" src="#" onclick="return d(this)">';
                    html +=
                        "<td><i data-id='tr-" + index +
                        "' class='bx bx-trash' onclick='return delete_item(this)'></i></td>";
                    html += "</tr>"

                })
                $('tbody').html(html)

            }
            let delete_item = function(e) {
                selector = $(e).data('id');
                document.getElementById(selector).remove();
            }

            let d = function(e) {
                let id = $(e).data('id')
                filemanager.selectFile("sp-" + id)
            }
        </script>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('server.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web_ban_hang\ecommerce\resources\views/server/page/product/create.blade.php ENDPATH**/ ?>